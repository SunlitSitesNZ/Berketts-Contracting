document.getElementById('main_contact_form').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('./mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        var successDiv = document.getElementById('success');
        var failDiv = document.getElementById('fail');
        if (data.status === 'success') {
            successDiv.classList.remove('d-none');
            failDiv.classList.add('d-none');
            successDiv.textContent = data.message;
        } else {
            failDiv.classList.remove('d-none');
            successDiv.classList.add('d-none');
            failDiv.textContent = data.message;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        var failDiv = document.getElementById('fail');
        failDiv.classList.remove('d-none');
        failDiv.textContent = "An unexpected error occurred.";
    });
});