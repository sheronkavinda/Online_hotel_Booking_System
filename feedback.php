<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vibration-Feedback</title>
    <link rel="stylesheet" href="style/feedback.css">
    <?php
        include_once('config.php');
    ?>
	
</head>

<body>
	
    <?php
    include_once'header.php';
    ?>

    <div class="feedback-container">
        <h2>Feedback</h2>
        <form action="/submit-feedback" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your feedback" rows="5" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>

    <?php
    include_once'footer.php';
    ?>
	
	<script src = "js\feedback.js"></script>
</body>
</html>