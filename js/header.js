//navigationbar active js
(function() {
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });
})();

function goto_signup() {
    window.location.href = 'signup.php';
}

function logout() {
    window.location.href = 'logout.php';
}

// Handle login/logout button and user link dynamically
document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('loginBtn');
    const userlink = document.getElementById('userlink');

    // Update button text and user link based on login status
    function updatebtn(loggedIn, username = '') {
        if (loggedIn) {
            loginBtn.textContent = 'Logout';
            userlink.textContent = `Hello! ${username}`;
            userlink.href = 'userprofile.php';
        } else {
            loginBtn.textContent = 'Login';
            userlink.textContent = 'Hello! Guest';
            userlink.href = 'signup.php';
        }
    }

    // Fetch login status from server
    fetch('check_login.php')
        .then(response => response.json())
        .then(data => {
            updatebtn(data.loggedin, data.username);
        });

    // Handle login/logout button click
    loginBtn.addEventListener('click', () => {
        fetch('check_login.php')
            .then(response => response.json())
            .then(data => {
                if (data.loggedin) {
                    // User is logged in, perform logout
                    fetch('logout.php')
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.reload(); // Reload page after logout
                            }
                        });
                } else {
                    // User is not logged in, redirect to login page
                    window.location.href = 'login.php';
                }
            });
    });

    // Handle user link click
    userlink.addEventListener('click', (event) => {
        fetch('check_login.php')
            .then(response => response.json())
            .then(data => {
                if (!data.loggedin) {
                    event.preventDefault(); // Prevent default action
                    window.location.href = 'signup.php'; // Redirect to signup
                }
            });
    });
});