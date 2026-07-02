<script src="<?php echo rtrim($actual_link, '/'); ?>/js/form-submit.js?v=<?php echo @filemtime(__DIR__ . '/../js/form-submit.js') ?: time(); ?>&brand=843190"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Ensure Brevo Conversations global function is set
    window.BrevoConversations = window.BrevoConversations || function () {
        (window.BrevoConversations.q = window.BrevoConversations.q || []).push(arguments);
    };

    function initializeBrevoChat() {
        if (typeof window.BrevoConversations === "function") {
            try {
                // Example: automatically open the widget once ready
                // Comment out if you don't want auto-open
                // window.BrevoConversations('openChat', true);

                // Click handlers for chat buttons
                document.querySelectorAll('.chat, .chatt').forEach(function (btn) {
                    btn.removeEventListener('click', chatClickHandler);
                    btn.addEventListener('click', chatClickHandler);
                });

                // (Optional) Track incoming messages — Brevo Conversations
                // doesn't have "unreadMessage" like Zendesk, so you'd need
                // to handle this with their events API when/if available.
                // Example pseudo:
                /*
                window.BrevoConversations('on', 'messageReceived', function (message) {
                    console.log('New message:', message);
                });
                */
                
            } catch (err) {
                console.error("Error initializing Brevo Conversations:", err);
            }
        } else {
            // Retry after short delay if not loaded yet
            setTimeout(initializeBrevoChat, 1000);
        }
    }

    function chatClickHandler(e) {
        e.preventDefault();
        try {
            if (typeof window.BrevoConversations === "function") {
                window.BrevoConversations('openChat', true);
            } else {
                console.warn("Brevo Conversations is not ready yet.");
            }
        } catch (err) {
            console.error("Error opening Brevo Conversations chat:", err);
        }
    }

    // Start initialization
    initializeBrevoChat();
});
</script>


