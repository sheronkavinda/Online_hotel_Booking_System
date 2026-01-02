<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration MyBooking</title>
    <link rel="stylesheet" href="style/newheaderfooter.css">
    <link rel="stylesheet" type="text/css" href="style/mybooking.css">
    <script src="js/mybooking.js"></script>

</head>

<body>
	
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Hotel Logo">
        </div>

        <div id="profile-info">
            <a href="userprofile.php"><img src="images/u.jpeg"> </a> 
            Hello! Savindu
		    <form action="logout.php" method="post">
                <button type="submit" id="logoutBtn">Logout</button>
            </form> 
        </div>

        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>|
            </ul>
        </nav>
        
    </header>

    <div>
        <h1>My Bookings</h1>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Event Type</th>
                    <th>Package</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    require 'config.php';

                    // Fetch booking details from the 'reservation' table
                    $sql = "SELECT id, event_type, package, event_date, name, email, address, mobile FROM reservation";
                    $result = $con->query($sql);

                    // Check if the query returned any results
                    if ($result->num_rows > 0) {
                        // Loop through each row and display the data in the table
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>". $row['id'] ."</td>
                                    <td>". $row['event_type'] ."</td>
                                    <td>". $row['package'] ."</td>
                                    <td>". date('d M Y', strtotime($row['event_date'])) ."</td>
                                    <td>". $row['name'] ."</td>
                                    <td>". $row['email'] ."</td>
                                    <td>". $row['address'] ."</td>
                                    <td>". $row['mobile'] ."</td>";
                                    echo "<td>
                            <div class='action-btns'>
                                <!-- Edit button - triggers edit form -->
                                <form action='edit.php' method='POST'>
                                    <input type='hidden' name='id' value='". $row["id"]."'>
                                    <input type='submit' class='edit-btn' value='Update'>
                                </form>
        
                                <!-- Delete button -->
                                <form action='delete.php' method='POST'>
                                <input type='hidden' name='id' value='" . $row["id"] . "'>
                                <input type='submit' class='delete-btn' value='Delete' onclick='return confirm(\"Are you sure you want to delete this?\");'>
                            </form>

                            </div>
                          </td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Not Submition yet.";
            }
                    $con->close();
                ?>
            </tbody>
        </table>

    </div>

    <footer>
    <div class="section1">
    <div class='details'>    
        <section>
            <h4>Contact</h4>
            <p>Tel: +94 70 999999</p>
            <p>E-mail: hotelvibration@gmail.com</p>
        </section>

        <section>
            <h4>Address</h4>
            <p>No 7,</p><p>Temple rode,</p><p>Malabe.</p>
        </section>

        <section>
            <h4>Schedule</h4>
            <p>Monday - Sunday</p>
            <p>Bar: 9am - 11pm</p>
            <p>Kitchen: 8am - 10pm</p>
        </section>
    </div>
    
    <div class="social-media">
        <h4>Follow Us</h4>
        <p>
            <a href = "https://www.facebook.com/"><img src = "images/fb.png"></a>
            <a href = "https://web.whatsapp.com/"><img src = "images/wp.png"></a>
            <a href = "https://www.instagram.com/"><img src = "images/ins.png"></a>
            <a href = "https://x.com/"><img src = "images/tx.png"></a>
            <a href = "https://www.youtube.com/"><img src = "images/yt.png"></a>
        </p>
    </div>

    <div class="subscribe-section">
        <h4>Get the latest news </h4>
         <p>
             <form id="subscribeForm">
                <input type="email" id="subscribeEmail" placeholder="Enter your email">
                <button type="submit" class="subscribe-btn">Subscribe</button>
             </form>
      </p>
        
    </div>
    </div>

    <br>  
    
    <div class="footer-links">
        <ul>
            <li><a href="terms.php">Terms and Conditions</a> |</li>
            <li><a href="terms.php">Privacy Policy</a> |</li>
            <li><a href="terms.php">Cookies Policy</a></li>
        </ul>
        <br>
        <br>
    </div>

    <hr>

    <div class="rights" >
        Copyright © 2024 Hotel Vibration. All rights reserved
    </div>   
        
</footer>




<style>
        /* Common styles for both buttons */
        .edit-btn, .delete-btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin: 5px;
        }

        /* Style for the Update button */
        .edit-btn {
            background-color: #4CAF50; /* Green color for the Update button */
            color: white;
        }

        .edit-btn:hover {
            background-color: white;
            color: #4CAF50;
            border: 2px solid #4CAF50;
        }

        /* Style for the Delete button */
        .delete-btn {
            background-color: #cc0101; /* Red color for the Delete button */
            color: white;
        }

        .delete-btn:hover {
            background-color: white;
            color: #cc0101;
            border: 2px solid #cc0101;
        }
    </style>


