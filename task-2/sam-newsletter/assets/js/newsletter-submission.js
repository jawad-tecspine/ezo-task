jQuery(document).ready(function ($) {
    $("body").on("submit", ".sam-newsletter-form", function (e) {
        e.preventDefault();

        let form = $(this);
        let nameInput = form.find("#sam-newsletter-name");
        let emailInput = form.find("#sam-newsletter-email");

        let name = nameInput.val().trim();
        let email = emailInput.val().trim();

        let isValid = true;
        form.find(".error-message").remove();

        // --- Name Validation ---
        if (name === "") {
            nameInput.after('<span class="error-message">Name cannot be empty.</span>');
            isValid = false;
        } else if (name.length < 3) {
            nameInput.after('<span class="error-message">Name must be at least 3 characters long.</span>');
            isValid = false;
        }

        // --- Email Validation ---
        if (email === "") {
            emailInput.after('<span class="error-message">Email cannot be empty.</span>');
            isValid = false;
        } else {
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
            if (!emailRegex.test(email)) {
                emailInput.after('<span class="error-message">Invalid email address.</span>');
                isValid = false;
            }
        }

        if (isValid) {
            $.ajax({
                url: samNewsletter.ajax_url,
                type: "POST",
                data: {
                    action: "sam_newsletter_subscribe",
                    name: name,
                    email: email,
                },
                beforeSend: function () {
                    $('.loader-wrapper').css('display', 'flex');
                },
                success: function (response) {
                    $('.loader-wrapper').css('display', 'none');

                    if (response.success) {
                        toastr.success(response.data.message, "Success");
                        form[0].reset();
                    } else {
                        toastr.error(response.data.message, "Error");
                    }
                },
                error: function () {
                    $('.loader-wrapper').css('display', 'none');
                    toastr.error("Something went wrong. Please try again.", "Error");
                }
            });
        }

    });
});
