// Payment Button Alert and Redirect
document.querySelector('.pay-btn').addEventListener('click', function(event) {
    event.preventDefault();
    
    alert('Your payment has been processed!');
    // Redirect to the booking page after 1 second
    setTimeout(function() {
        window.location.href = 'mybooking.php';
    }, ); 
});

// Back Button Action
document.querySelector('.back-btn').addEventListener('click', function() {
    window.history.back();
});
