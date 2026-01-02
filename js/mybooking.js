document.addEventListener("DOMContentLoaded", function() {
    //Change Package button
    const changePackageBtn = document.getElementById("changePackageBtn");
    changePackageBtn.addEventListener("click", function() {
        alert("Redirecting to the package change page...");

        
        window.location.href = "package_change.html"; 
    });

    // Cancel Booking
    const cancelBookingBtn = document.getElementById("cancelBookingBtn");
    cancelBookingBtn.addEventListener("click", function() {
    const confirmCancel = confirm("Are you sure you want to cancel this booking?");
        if (confirmCancel) {
            alert("Booking Cancelled.");
            
        }
    });

    // Event handler for 'Logout' button
    const logoutBtn = document.getElementById("logoutBtn");
    logoutBtn.addEventListener("click", function() {
        alert("Logging out...");
        window.location.href = "logout.php"; 
    });
});
