let domReady = (cb) => {
    document.readyState === 'interactive' || document.readyState === 'complete'
        ? cb()
        : document.addEventListener('DOMContentLoaded', cb);
};

domReady(() => {
    // Display body when DOM is loaded
    document.body.style.visibility = 'visible';
});


$(document).ready(function () {
    $('#main_contact_form').on('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission\
        // Disable the submit button
        $('#submit-btn').prop('disabled', true); // Disable the submit button

        var formData = $(this).serializeArray();

        $.ajax({
            url: './mail.php',
            type: 'POST',
            data: formData,
            success: function (responseText, textStatus, jqXHR) {
                var successDiv = $('#success');
                var failDiv = $('#fail');

                $('#main_contact_form')[0].reset();

                // Check the HTTP status code
                if (jqXHR.status === 200) {

                    successDiv.removeClass('d-none');
                    failDiv.addClass('d-none');
                    // Clear the form inputs

                } else {
                    failDiv.removeClass('d-none');
                    successDiv.addClass('d-none');

                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error:', errorThrown);
                var failDiv = $('#fail');
                failDiv.removeClass('d-none');
                failDiv.text("Please Try Again Later");
            }
        });
    });
});

