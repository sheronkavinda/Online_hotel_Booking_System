document.querySelector('.book-btn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default behavior of the link
    alert('Redirecting to the Booking page...');
   
    window.location.href = 'booking.php';
});
