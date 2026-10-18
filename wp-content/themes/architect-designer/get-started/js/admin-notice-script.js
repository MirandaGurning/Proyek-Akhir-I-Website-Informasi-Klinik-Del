jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'architect_designer_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// WordClever – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const architect_designer_button = document.getElementById('install-activate-button');

    if (!architect_designer_button) return;

    architect_designer_button.addEventListener('click', function (e) {
        e.preventDefault();

        const architect_designer_redirectUrl = architect_designer_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const architect_designer_checkData = new FormData();
        architect_designer_checkData.append('action', 'check_wordclever_activation');

        fetch(installWordcleverData.ajaxurl, {
            method: 'POST',
            body: architect_designer_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = architect_designer_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                architect_designer_button.textContent = 'Installing & Activating...';

                const architect_designer_installData = new FormData();
                architect_designer_installData.append('action', 'install_and_activate_wordclever_plugin');
                architect_designer_installData.append('_ajax_nonce', installWordcleverData.nonce);

                fetch(installWordcleverData.ajaxurl, {
                    method: 'POST',
                    body: architect_designer_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = architect_designer_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        architect_designer_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    architect_designer_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
