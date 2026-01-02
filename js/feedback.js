
    // Add event listener to the review form
    document.getElementById('reviewForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get form values
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const review = document.getElementById('review').value.trim();
        const rating = document.querySelector('input[name="rating"]:checked');
        const errorMessage = document.getElementById('errorMessage');

        // Clear previous error messages
        errorMessage.textContent = '';

        // Validation logic
        if (!name || !email || !review || !rating) {
            errorMessage.textContent = 'All fields, including the rating, are required.';
            return; // Exit the function if validation fails
        }

        // Email validation regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage.textContent = 'Please enter a valid email address.';
            return; // Exit if email validation fails
        }

        // Simulate form submission (replace this with actual submission logic)
        alert(`Thank you for your review, ${name}! Your rating: ${rating.value} stars.`);
        
        // Reset the form after successful submission
        document.getElementById('reviewForm').reset();
    });
