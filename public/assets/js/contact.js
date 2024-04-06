document.getElementById('submitButton').addEventListener('click', function() {
    // Collect form data
    var formData = new FormData(document.getElementById('contactForm'));

    // Send form data using AJAX
    fetch('contact/submit', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            // If submission is successful, reset form and display success message
            document.getElementById('contactForm').reset();
            alert('Your message has been sent successfully!');
        } else {
            // If submission fails, display error message
            alert('An error occurred. Please try again later.');
        }
    })
    .catch(error => {
        // If there's a network error, display error message
        console.error('Error:', error);
        alert('Network error. Please try again later.');
    });
});