// Login Function
function loginUser() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (!email || !password) {
        alert("Both email and password are required to log in.");
        return false;
    }


    alert("Login successful for: " + email);

    return true;
}
