<?php
$newsletterStatus = null;
$newsletterMessage = '';
$newsletterEmail = '';

function escapeValue(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function readSmtpResponse($socket): string
{
    $response = '';

    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }

    return $response;
}

function smtpCommand($socket, string $command, array $expectedCodes): string
{
    fwrite($socket, $command . "\r\n");
    $response = readSmtpResponse($socket);
    $statusCode = (int) substr($response, 0, 3);

    if (!in_array($statusCode, $expectedCodes, true)) {
        throw new RuntimeException('SMTP command failed: ' . trim($response));
    }

    return $response;
}

function sendSmtpEmail(string $recipient, string $subject, string $body, ?string $replyToEmail = null): bool
{
    $smtpHost = 'ssl://smtp.gmail.com';
    $smtpPort = 465;
    $smtpUser = 'sellers.of.serendipity@gmail.com';
    $smtpPass = 'bodg mohi pysk ltmg';
    $fromEmail = $smtpUser;
    $fromName = 'Serendipity Sellers';

    $headers = [
        'Date: ' . date('r'),
        'Subject: ' . $subject,
        'From: ' . $fromName . ' <' . $fromEmail . '>',
        'To: <' . $recipient . '>',
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
    ];

    if ($replyToEmail !== null && $replyToEmail !== '') {
        $headers[] = 'Reply-To: ' . preg_replace("/[\r\n]+/", '', $replyToEmail);
    }

    $message = implode("\r\n", $headers) . "\r\n\r\n" . str_replace("\n.", "\n..", $body) . "\r\n";

    $socket = stream_socket_client(
        $smtpHost . ':' . $smtpPort,
        $errorNumber,
        $errorMessage,
        30,
        STREAM_CLIENT_CONNECT
    );

    if ($socket === false) {
        throw new RuntimeException('SMTP connection failed: ' . $errorMessage . ' (' . $errorNumber . ')');
    }

    stream_set_timeout($socket, 30);

    try {
        $banner = readSmtpResponse($socket);
        $bannerCode = (int) substr($banner, 0, 3);

        if ($bannerCode !== 220) {
            throw new RuntimeException('SMTP server rejected connection: ' . trim($banner));
        }

        smtpCommand($socket, 'EHLO serendipitysellers.local', [250]);
        smtpCommand($socket, 'AUTH LOGIN', [334]);
        smtpCommand($socket, base64_encode($smtpUser), [334]);
        smtpCommand($socket, base64_encode($smtpPass), [235]);
        smtpCommand($socket, 'MAIL FROM:<' . $fromEmail . '>', [250]);
        smtpCommand($socket, 'RCPT TO:<' . $recipient . '>', [250, 251]);
        smtpCommand($socket, 'DATA', [354]);
        smtpCommand($socket, $message . "\r\n.", [250]);
        smtpCommand($socket, 'QUIT', [221]);
    } finally {
        fclose($socket);
    }

    return true;
}

function sendNewsletterEmail(string $subscriberEmail): bool
{
    $safeEmail = preg_replace("/[\r\n]+/", '', $subscriberEmail);
    $body = implode("\r\n", [
        'You received a new newsletter subscription request from the Serendipity Sellers website.',
        '',
        'Subscriber email: ' . $safeEmail,
    ]);

    return sendSmtpEmail(
        'sellers.of.serendipity@gmail1.com',
        'New newsletter subscriber from Serendipity Sellers',
        $body,
        $safeEmail
    );
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'newsletter') {
    $newsletterEmail = trim((string) ($_POST['email'] ?? ''));

    if ($newsletterEmail === '') {
        $newsletterStatus = 'error';
        $newsletterMessage = 'Please enter your email address.';
    } elseif (!filter_var($newsletterEmail, FILTER_VALIDATE_EMAIL)) {
        $newsletterStatus = 'error';
        $newsletterMessage = 'Please enter a valid email address.';
    } else {
        try {
            sendNewsletterEmail($newsletterEmail);
            $newsletterStatus = 'success';
            $newsletterMessage = 'Thanks for subscribing. We will be in touch soon.';
            $newsletterEmail = '';
        } catch (Throwable $exception) {
            $newsletterStatus = 'error';
            $newsletterMessage = 'Sorry, there was a problem with your subscription. Please try again later.';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Serendipity Sellers</title>
  <meta name="description" content="Stories, art, and leadership practices that notice what’s missed when we’re busy enduring." />
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Serendipity Sellers Books",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@type": "Book",
        "name": "The Jester’s Grin",
        "author": {
          "@type": "Person",
          "name": "Hannah Toney"
        },
        "url": "https://www.amazon.com/dp/B0GHQ3C432/"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@type": "Book",
        "name": "The Light That Remembers",
        "author": {
          "@type": "Person",
          "name": "Hannah Toney"
        },
        "url": "https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@type": "Book",
        "name": "Snow White’s Journey",
        "author": {
          "@type": "Person",
          "name": "Hannah Toney"
        },
        "url": "https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP"
      }
    }
  ]
}
  </script>
  <link rel="icon" href="images/logo.png" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="site-header" id="top">
    <div class="wrap header-inner">
      <a class="brand" href="#top" aria-label="Serendipity Sellers home">
        <img src="images/logo.png" alt="Serendipity Sellers" width="44" height="44" />
      </a>

      <nav class="nav" aria-label="Primary">
        <a href="#books-slider">Books</a>
        <a href="#art">Art</a>
        <a href="#events">Events</a>
        <a href="#studio">Stories</a>
        <a href="#about">About</a>
        <a href="https://serendipitysellers.substack.com" target="_blank" rel="noopener noreferrer">Notes From the Studio</a>
      </nav>
    </div>
  </header>

  <section class="hero" aria-label="Welcome">
    <div class="hero-carousel" aria-hidden="true">
      <div class="hero-slide hero-slide-1"></div>
      <div class="hero-slide hero-slide-2"></div>
      <div class="hero-slide hero-slide-3"></div>
      <div class="hero-overlay"></div>
    </div>
    <div class="wrap hero-inner">
      <p class="eyebrow">Welcome</p>
      <h1>
        This is a space for stories, art, and leadership practices<br />
        <span>that notice what’s missed when we’re busy enduring.</span>
      </h1>
      <p class="eyebrow">Explore books, art, and practices designed to expand attention</p>
      <div class="hero-cta">
        <a class="btn" href="#content" id="enterBtn">Enter</a>
      </div>
    </div>
  </section>

  <main id="content">
    <section class="section section-alt reveal" id="books-slider" aria-labelledby="books-slider-title">
      <div class="wrap">
        <header class="section-head">
          <p class="kicker">BOOKS</p>
          <h2 id="books-slider-title">Stories that make room for wonder and weight</h2>
          <p class="lede">Fantasy and fiction shaped by imagination, care, and consequence.</p>
          <p class="muted">These stories explore what happens when endurance is mistaken for strength, when silence protects the wrong things, and when unlikely people are asked to carry what others refuse to see.</p>
        </header>

        <div class="slider" data-slider="books">
          <div class="slider-track">
            <article class="card slider-slide">
              <img src="images/Georgie and Bug and the Noisy Barn.png" alt="Book cover for Big Feelings, Brave Friends with Georgie and Bug – Book I" loading="lazy" />
              <div class="card-body">
                <h3>Big Feelings, Brave Friends with Georgie and Bug – Book I</h3>
                <p>Georgie &amp; Bug and the Noisy Barn<br />When strange sounds echo from the barn, Bug must learn that listening closely can be braver than barking first.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/Georgie-Bug-Noisy-Barn-Listening/dp/B0GDP64K19?ref_=ast_author_dp&amp;th=1&amp;psc=1" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/Georgie and Bug and the Chickens That Charged.png" alt="Book cover for Big Feelings, Brave Friends with Georgie and Bug – Book II" loading="lazy" />
              <div class="card-body">
                <h3>Big Feelings, Brave Friends with Georgie and Bug – Book II</h3>
                <p>Georgie &amp; Bug and the Chickens That Charged<br />When a flurry of feathers feels like an attack, Bug discovers that loud and fast doesn’t always mean dangerous.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/Georgie-Bug-Chickens-That-Charged/dp/B0GDNLDS1N?ref_=ast_author_dp&amp;th=1&amp;psc=1" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/Book1.png" alt="Book cover for The Storykeepers’ Daughter – Book I" loading="lazy" />
              <div class="card-body">
                <h3>The Storykeepers’ Daughter – Book I</h3>
                <p>The Storykeeper’s Daughter<br />A mysterious young woman with a fractured heritage becomes the living key in a rising war against a darkness that does not conquer—it erases.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/dp/B0GHQ3C432/" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/Book2.png" alt="Book cover for The Storykeepers’ Daughter – Book II" loading="lazy" />
              <div class="card-body">
                <h3>The Storykeepers’ Daughter – Book II</h3>
                <p>The Light Remembers<br />As kingdoms fracture and ancient powers awaken, the only weapon against the encroaching void is a light forged from memory, sacrifice, and the stubborn refusal to yield.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/coming-soon.png" alt="Book cover for The Storykeepers’ Daughter – Book III" loading="lazy" />
              <div class="card-body">
                <h3>The Storykeepers’ Daughter – Book III</h3>
                <p>The Shard and Shadow<br />With the world breaking and the darkness taking form, a queen and an ancient king must bind crystal, crown, and cost to stand against annihilation.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/coming-soon.png" alt="Book cover for The Hollow Places – Book I" loading="lazy" />
              <div class="card-body">
                <h3>The Hollow Places – Book I</h3>
                <p>On Monsters and the Missing<br />After a young fantasy author survives a supernatural encounter in the woods, she discovers the monster she met is real—and that the real predators may not be the ones she thought.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/coming-soon.png" alt="Book cover for The Hollow Places – Book II" loading="lazy" />
              <div class="card-body">
                <h3>The Hollow Places – Book II</h3>
                <p>Calypso’s Children<br />When a dancer Ser once shadowed for research calls her in fear—and then vanishes—Ser is pulled into a stolen art ring where exploited women are disposable assets and the real monsters wear collector’s gloves.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>

            <article class="card slider-slide">
              <img src="images/coming-soon.png" alt="Book cover for The Hollow Places – Book III" loading="lazy" />
              <div class="card-body">
                <h3>The Hollow Places – Book III</h3>
                <p>Misunderstood Monsters<br />As Ser reframes folklore’s villains as scapegoats for human violence, a string of ritualistic killings forces her to defend a small town’s mascot from becoming the next convenient monster.</p>
                <a class="btn btn-ghost" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Read More →</a>
              </div>
            </article>
          </div>

          <button class="slider-nav prev" type="button" aria-label="Previous book">‹</button>
          <button class="slider-nav next" type="button" aria-label="Next book">›</button>
        </div>

        <div class="section-actions">
          <a class="link" href="https://www.amazon.com/stores/Serendipity-Sellers/author/B0GJFWBBFP" target="_blank" rel="noopener noreferrer">Browse all books on Amazon →</a>
        </div>
      </div>
    </section>

    <section class="section section-alt section-grey reveal-stagger" id="art" aria-labelledby="art-title">
      <div class="wrap">
        <header class="section-head">
          <p class="kicker">ART</p>
          <h2 id="art-title">Art as a way of noticing</h2>
          <p class="lede">Paintings, prints, and objects shaped by attention and practice.</p>
          <p class="muted">Some pieces are held in the studio.<br />Some travel into daily life.<br />All of them begin the same way — paint on canvas.</p>
        </header>

        <div class="grid tiles">
          <a class="tile tile-originalworks" href="https://serendipity-sellers.myshopify.com/collections/original-works" target="_blank" rel="noopener noreferrer">
            <div class="tile-inner tile-on-image">
              <h3>Original Works</h3>
              <p>One-of-a-kind paintings, ceramics, and studio pieces.</p>
              <p>These works are held for in-person viewing through studio visits and select exhibitions. Each is made slowly, by hand, and meant to be encountered directly.</p>
              <span class="pill pill-on-image">View upcoming studio dates →</span>
            </div>
          </a>

          <a class="tile tile-ritual" href="https://serendipity-sellers.myshopify.com/collections/everyday-ritual-objects" target="_blank" rel="noopener noreferrer">
            <div class="tile-inner tile-on-image">
              <h3>Everyday Ritual Objects</h3>
              <p>Art carried into daily life.</p>
              <p>Candles, bookmarks, lamps, and small objects that hold original paintings and studio patterns — made to be used, handled, and lived with.</p>
              <span class="pill pill-on-image">Shop ritual objects →</span>
            </div>
          </a>

          <a class="tile tile-wearable" href="https://serendipity-sellers.myshopify.com/collections/wearable-collections" target="_blank" rel="noopener noreferrer">
            <div class="tile-inner tile-on-image">
              <h3>Wearable Editions</h3>
              <p>Art in motion.</p>
              <p>Limited designs translated into clothing and small-batch studio apparel—meant to move beyond the studio, into classrooms, gatherings, and wherever the work continues.</p>
              <span class="pill pill-on-image">Shop wearable editions →</span>
            </div>
          </a>
        </div>

        <div class="section-actions">
          <a class="link" href="https://serendipity-sellers.myshopify.com/" target="_blank" rel="noopener noreferrer">Explore art on Shopify →</a>
        </div>
      </div>
    </section>

    <section class="section reveal-stagger" id="events" aria-labelledby="events-title">
      <div class="wrap">
        <header class="section-head">
          <p class="kicker">EVENTS</p>
          <h2 id="events-title">Shared practices</h2>
          <p class="lede">These aren’t classes. They’re structured spaces to practice attention, leadership, and creative work together.</p>
          <p class="muted">Each gathering is designed as a working session — small groups, guided prompts, and real conversation. You won’t just receive information. You’ll participate, reflect, and build capacity in real time.</p>
          <p class="muted">Spots are limited. Registration and ticketing are handled through our studio shop.</p>
        </header>

        <div class="event-image">
          <a href="https://serendipity-sellers.myshopify.com/collections/classes-and-events-at-the-studio" target="_blank" rel="noopener noreferrer">
            <img src="images/events.png" alt="Upcoming events at the studio" loading="lazy" />
          </a>
        </div>

        <div class="section-actions">
          <a class="link" href="https://serendipity-sellers.myshopify.com/collections/classes-and-events-at-the-studio" target="_blank" rel="noopener noreferrer">View all upcoming events →</a>
        </div>
      </div>
    </section>

    <section class="section section-alt reveal section-grey" id="studio" aria-labelledby="studio-title">
      <div class="wrap">
        <header class="section-head">
          <p class="kicker">STORIES</p>
          <h2 id="studio-title">In the studio</h2>
          <p class="lede">Notes from the middle of the work. A glimpse into process and practice.</p>
        </header>

        <p class="muted">This is where ideas take shape — before they become books, events, or finished paintings. Studio notes, readings, experiments, and reflections from inside the work.</p>

        <div class="featured-story">
          <p class="kicker">FEATURED STORY</p>
          <div class="featured-inner">
            <a class="featured-media" href="https://www.youtube.com/watch?v=B8g_EQyfafw" target="_blank" rel="noopener noreferrer">
              <img src="https://img.youtube.com/vi/B8g_EQyfafw/maxresdefault.jpg" alt="Featured video thumbnail: The Jester’s Grin — Author Interview" loading="lazy" />
            </a>
            <div class="featured-copy">
              <h3>The Jester’s Grin: What This Story Is Really About</h3>
              <p>A behind-the-scenes reflection on endurance, leadership, and why this world began with a jester.</p>
              <a class="btn btn-ghost" href="https://www.youtube.com/watch?v=B8g_EQyfafw" target="_blank" rel="noopener noreferrer">Watch Now →</a>
            </div>
          </div>
        </div>

        <h3 class="subhead">Recent Studio Notes</h3>
        <div class="grid media">
          <article class="video-card">
            <a class="video-thumb" href="https://www.youtube.com/live/4JfuMoJ-Ewg?si=FDrdZ5G7WV_ryUYm" target="_blank" rel="noopener noreferrer">
              <img src="https://img.youtube.com/vi/4JfuMoJ-Ewg/hqdefault.jpg" alt="Video thumbnail: Real-time painting of a battle scene from The Storykeeper's Daughter, Book 2" loading="lazy" />
            </a>
            <div class="video-body">
              <h4>Real-time painting from The Storykeeper's Daughter: Battle from book 02, video 02</h4>
              <p>Watch the author of The Light Remembers paint a battle scene from Book 2 of The Storykeeper’s Daughter — second layer, filmed in real time inside the studio.</p>
              <a class="btn btn-ghost" href="https://www.youtube.com/live/4JfuMoJ-Ewg?si=FDrdZ5G7WV_ryUYm" target="_blank" rel="noopener noreferrer">Watch →</a>
            </div>
          </article>

          <article class="video-card">
            <a class="video-thumb" href="https://www.youtube.com/watch?v=r7ZrlukC_Qo" target="_blank" rel="noopener noreferrer">
              <img src="https://img.youtube.com/vi/r7ZrlukC_Qo/hqdefault.jpg" alt="Video thumbnail: Persephone’s Flower — Painting Overview" loading="lazy" />
            </a>
            <div class="video-body">
              <h4>Persephone’s Flower — Painting Overview</h4>
              <p>A look at the layered process behind Persephone and Hades, and how mythology informs studio practice.</p>
              <a class="btn btn-ghost" href="https://www.youtube.com/watch?v=r7ZrlukC_Qo" target="_blank" rel="noopener noreferrer">Watch →</a>
            </div>
          </article>
        </div>

        <div class="section-actions">
          <p class="muted">Continue the Practice — New studio notes are shared regularly, including readings, process reflections, and conversations on leadership and creative work.</p>
          <a class="link" href="https://www.youtube.com/@SerendipitySellers" target="_blank" rel="noopener noreferrer">Visit the YouTube Channel →</a>
        </div>
      </div>
    </section>

    <section class="section reveal" id="about" aria-labelledby="about-title">
      <div class="wrap about">
        <div class="about-image" role="img" aria-label="Writing desk"></div>
        <div>
          <p class="kicker">ABOUT</p>
          <h2 id="about-title">Leadership is a creative act.</h2>
          <p class="lede">Hannah Toney, Ed.D., is an educator and leadership practitioner who builds stories and studio work alongside her professional practice. With decades of experience in education and systems leadership, she brings a structural lens to everything she makes—whether that’s a novel, a painting, or a room full of adults learning how to think differently. This website gathers those threads in one place.</p>
          <a class="btn btn-ghost about-cta" href="https://serendipity-sellers.myshopify.com/products/work-together" target="_blank" rel="noopener noreferrer">Let’s Work Together<br /><span>Start here →</span></a>
        </div>
      </div>
    </section>

    <section class="section section-dark reveal" id="newsletter" aria-labelledby="letters-title">
      <div class="wrap newsletter">
        <h2 id="letters-title">Occasional letters</h2>
        <p class="lede">About stories, art, leadership, and noticing what’s quietly shaping us.</p>

        <?php if ($newsletterMessage !== ''): ?>
          <p class="form-message <?php echo escapeValue((string) $newsletterStatus); ?>" role="status" aria-live="polite">
            <?php echo escapeValue($newsletterMessage); ?>
          </p>
        <?php endif; ?>

        <form class="form-row" action="#newsletter" method="post">
          <input type="hidden" name="form_type" value="newsletter" />
          <label class="sr" for="email">Email address</label>
          <input id="email" name="email" type="email" placeholder="Enter your email" value="<?php echo escapeValue($newsletterEmail); ?>" required />
          <button class="btn" type="submit">Subscribe</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="wrap footer-grid">
      <div>
        <img src="images/logo.png" alt="Serendipity Sellers" width="44" height="44" />
        <p class="muted">A hub for stories, art, and shared practice.</p>
      </div>

      <div>
        <h3>Explore</h3>
        <a href="#books-slider">Books</a>
        <a href="#art">Art</a>
        <a href="#events">Events</a>
        <a href="#studio">Stories</a>
      </div>

      <div>
        <h3>Contact</h3>
        <a href="mailto:sellers.of.serendipity@gmail.com">sellers.of.serendipity@gmail.com</a>
      </div>

      <div>
        <h3>Stay connected</h3>
        <div class="social">
          <a href="https://www.instagram.com/serendipity.sellers/" aria-label="Instagram">IG</a>
          <a href="https://www.youtube.com/@SerendipitySellers" aria-label="YouTube">YT</a>
          <a href="https://www.linkedin.com/in/hrtoney/" aria-label="LinkedIn">in</a>
        </div>
      </div>
    </div>

    <div class="wrap footer-bottom">
      <p class="muted">Copyright © 2026 Serendipity Sellers. All rights reserved.</p>
      <a class="link" href="#top">Back to top ↑</a>
    </div>
  </footer>

  <script>
    document.querySelectorAll('a[href^="#"]').forEach((a) => {
      a.addEventListener('click', (e) => {
        const href = a.getAttribute('href');
        if (!href || href === '#') return;

        if (href === '#top') {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
          return;
        }

        const el = document.querySelector(href);
        if (!el) return;

        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });

    const revealEls = document.querySelectorAll('.reveal, .reveal-stagger');
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    revealEls.forEach((el) => io.observe(el));

    document.querySelectorAll('[data-slider]').forEach((slider) => {
      const track = slider.querySelector('.slider-track');
      const slides = Array.from(slider.querySelectorAll('.slider-slide'));
      const prevBtn = slider.querySelector('.slider-nav.prev');
      const nextBtn = slider.querySelector('.slider-nav.next');
      if (!track || !slides.length) return;

      const visibleCount = 3;
      const maxIndex = Math.max(0, slides.length - visibleCount);
      let index = 0;

      const update = () => {
        const slideWidth = 100 / visibleCount;
        track.style.transform = `translateX(-${index * slideWidth}%)`;
      };

      const nextSlide = () => {
        index = index >= maxIndex ? 0 : index + 1;
        update();
      };

      const prevSlide = () => {
        index = index <= 0 ? maxIndex : index - 1;
        update();
      };

      prevBtn?.addEventListener('click', prevSlide);
      nextBtn?.addEventListener('click', nextSlide);

      update();
    });
  </script>
</body>
</html>
