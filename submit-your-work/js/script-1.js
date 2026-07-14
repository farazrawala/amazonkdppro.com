document.querySelectorAll('.file-upload-wrapper').forEach(wrapper => {
    const fileInput = wrapper.querySelector('.file-input');
    const fileUploadLabel = wrapper.querySelector('.file-upload-label');
    const fileSelected = wrapper.querySelector('.file-selected');
    const fileName = wrapper.querySelector('.file-name');
    const fileRemove = wrapper.querySelector('.file-remove');
    const allowedTypes = ['.pdf', '.doc', '.docx', '.txt'];

    function getExtension(name) {
        const parts = String(name || '').toLowerCase().split('.');
        return parts.length > 1 ? '.' + parts.pop() : '';
    }

    function assignFile(file) {
        try {
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            fileInput.files = dataTransfer.files;
        } catch (err) {
            // Fallback for older browsers; change event may still carry the file
            console.warn('Could not assign dropped file via DataTransfer', err);
        }
    }

    function showSelectedFile(file) {
        const maxSize = 10 * 1024 * 1024; // 10MB
        if (file.size > maxSize) {
            alert('File size must be less than 10MB');
            fileInput.value = '';
            fileUploadLabel.style.display = 'flex';
            fileSelected.style.display = 'none';
            return false;
        }

        const extension = getExtension(file.name);
        if (!allowedTypes.includes(extension)) {
            alert('Please select a valid file type (PDF, DOC, DOCX, TXT)');
            fileInput.value = '';
            fileUploadLabel.style.display = 'flex';
            fileSelected.style.display = 'none';
            return false;
        }

        fileName.textContent = file.name + ' (' + (file.size / (1024 * 1024)).toFixed(2) + ' MB)';
        fileUploadLabel.style.display = 'none';
        fileSelected.style.display = 'flex';
        return true;
    }

    fileInput.addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            showSelectedFile(file);
        }
    });

    wrapper.addEventListener('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        wrapper.classList.add('dragover');
    });

    wrapper.addEventListener('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        wrapper.classList.remove('dragover');
    });

    wrapper.addEventListener('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        wrapper.classList.remove('dragover');

        const files = e.dataTransfer.files;
        if (!files.length) {
            return;
        }

        const file = files[0];
        if (!allowedTypes.includes(getExtension(file.name))) {
            alert('Please select a valid file type (PDF, DOC, DOCX, TXT)');
            return;
        }

        assignFile(file);
        showSelectedFile(file);
    });

    fileRemove.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        fileInput.value = '';
        fileName.textContent = '';
        fileUploadLabel.style.display = 'flex';
        fileSelected.style.display = 'none';
    });
});

 // Modal functionality
const consultBtns = document.querySelectorAll('.consultBtn');
const modalOverlay = document.getElementById('modalOverlay');
const modalClose = document.getElementById('modalClose');
const consultationForm = document.getElementById('consultationForm');
const modalBody = document.getElementById('modalBody');

// Urgency badge selection
const urgencyBadges = document.querySelectorAll('.urgency-badge');
const urgencyInput = document.getElementById('urgency');

urgencyBadges.forEach(badge => {
    badge.addEventListener('click', () => {
        urgencyBadges.forEach(b => b.classList.remove('selected'));
        badge.classList.add('selected');
        urgencyInput.value = badge.dataset.urgency;
    });
});

// Open modal from any consultBtn
consultBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
});

// Close modal
function closeModal() {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = 'auto';
}

modalClose.addEventListener('click', closeModal);

modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
        closeModal();
    }
});


    (function() {
      "use strict";

      const carousel = document.getElementsByClassName('carousel')[0];
      const slider = carousel.getElementsByClassName('carousel__slider')[0];
      const prevBtn = carousel.getElementsByClassName('carousel__prev')[0];
      const nextBtn = carousel.getElementsByClassName('carousel__next')[0];

      const margin = 20;
      let width, height, totalWidth;
      let currIndex = 0;
      let interval, intervalTime = 4000;

      // Replace these with your actual image paths and alt texts
       const itemsData = [
        { src: "/assets/img/Mock-1.jpg", alt: "Mock 1" },
        { src: "/assets/img/Mock-2.jpg", alt: "Mock 2" },
        { src: "/assets/img/Mock-3.jpg", alt: "Mock 3" },
        { src: "/assets/img/Mock-4.jpg", alt: "Mock 4" },
        { src: "/assets/img/Mock-5.jpg", alt: "Mock 5" },
        { src: "/assets/img/Mock-6.jpg", alt: "Mock 6" },
        { src: "/assets/img/Mock-7.jpg", alt: "Mock 7" },
        { src: "/assets/img/Mock-8.jpg", alt: "Mock 8" },
        { src: "/assets/img/Mock-9.jpg", alt: "Mock 9" },
        { src: "/assets/img/Mock-10.jpg", alt: "Mock 10" }
      ];


      function buildItems() {
        slider.innerHTML = '';
        itemsData.forEach((itemData, idx) => {
          const item = document.createElement('div');
          item.className = 'carousel__slider__item';
          item.setAttribute('aria-label', itemData.alt);
          item.setAttribute('role', 'group');
          const frame = document.createElement('div');
          frame.className = 'item__3d-frame';

          const front = document.createElement('div');
          front.className = 'item__3d-frame__box item__3d-frame__box--front';
          const img = document.createElement('img');
          img.src = itemData.src;
          img.alt = itemData.alt;
          img.loading = 'lazy';
          front.appendChild(img);

          const left = document.createElement('div');
          left.className = 'item__3d-frame__box item__3d-frame__box--left';
          const right = document.createElement('div');
          right.className = 'item__3d-frame__box item__3d-frame__box--right';

          frame.appendChild(front);
          frame.appendChild(left);
          frame.appendChild(right);
          item.appendChild(frame);
          slider.appendChild(item);
        });
      }

      function resize() {
        width = Math.max(window.innerWidth * .25, 275);
        height = window.innerHeight * .5;
        totalWidth = width * itemsData.length;
        slider.style.width = totalWidth + "px";

        const items = carousel.getElementsByClassName('carousel__slider__item');
        for (let i = 0; i < items.length; i++) {
          const item = items[i];
          item.style.width = (width - (margin * 2)) + "px";
          item.style.height = height + "px";
        }
      }

      function move(index) {
        if (index < 1) index = itemsData.length;
        if (index > itemsData.length) index = 1;
        currIndex = index;

        const items = carousel.getElementsByClassName('carousel__slider__item');
        for (let i = 0; i < items.length; i++) {
          const item = items[i];
          const box = item.querySelector('.item__3d-frame');
          if (i === (index - 1)) {
            item.classList.add('carousel__slider__item--active');
            box.style.transform = "perspective(1200px)";
          } else {
            item.classList.remove('carousel__slider__item--active');
            const rotation = i < (index - 1) ? 40 : -40;
            box.style.transform = "perspective(1200px) rotateY(" + rotation + "deg)";
          }
        }

        const translateX = (index * -width) + (width / 2) + (window.innerWidth / 2);
        slider.style.transform = "translate3d(" + translateX + "px, 0, 0)";
      }

      function timer() {
        clearInterval(interval);
        interval = setInterval(() => {
          move(++currIndex);
        }, intervalTime);
      }

      function prev() {
        move(--currIndex);
        timer();
      }

      function next() {
        move(++currIndex);
        timer();
      }

      function bindEvents() {
        window.addEventListener('resize', () => {
          resize();
          move(currIndex);
        });
        prevBtn.addEventListener('click', prev);
        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); prev(); }
        });
        nextBtn.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); next(); }
        });
      }

      function init() {
        buildItems();
        resize();
        move(Math.floor(itemsData.length / 2) + 1);
        bindEvents();
        timer();
      }

      document.addEventListener('DOMContentLoaded', init);
    })();

    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        autoplayVideos: true
    });


    