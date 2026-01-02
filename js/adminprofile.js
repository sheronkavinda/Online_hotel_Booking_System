// Account Activation
function activateAccount() {
 
    var email = document.getElementById("useremail").value;
    var password = document.getElementById("password").value;
    var userType = document.getElementById("user_type").value;

    if (!email || !password || !userType) {
        alert("All fields are required for account activation.");
        return false;
    }

    alert("Account activated for: " + email);

    return true;
}


// Account Update
function updateAccount() {

    var email = document.getElementById("updateUserEmail").value;
    var password = document.getElementById("updatePassword").value;
    var userType = document.getElementById("updateUserType").value;

    if (!email || !password || !userType) {
        alert("All fields are required for account update.");
        return false;
    }

    alert("Account updated for: " + email);

    return true;
}

// Account Deletion
function deleteAccount() {

    var useremail = document.getElementById("deleteUserEmail").value;

    if (!useremail) {
        alert("Account Email is required to delete an account.");
        return false;
    }

    alert("Account with Email " + useremail + " deleted.");

    return true;
}

// Booking Status Update
function updateBookingStatus() {

    var bookingID = document.getElementById("bookingID").value;
    var status = document.getElementById("status").value;

    if (!bookingID || !status) {
        alert("Booking ID and status are required to update the booking.");
        return false;
    }

    
    alert("Booking status updated for ID: " + bookingID);
    return true;
}

// Contact User
function contactUser() {

    var email = document.getElementById("userEmail").value;
    var message = document.getElementById("userMessage").value;

    if (!email || !message) {
        alert("Both email and message are required to contact a user.");
        return false;
    }

    alert("Message sent to: " + email);

    return true;
}

// Function to goto feedback form
function openFeedbackForm() {
    window.location.href = 'feedback.php';
}
