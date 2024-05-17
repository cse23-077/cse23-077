<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Movie</title>
</head>
<body>
    <h1>Rent Movie</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process renting form submission
        echo "<p>Your movie has been rented successfully!</p>";
    } else {
        // Display renting form
        echo '
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <button type="submit">Submit</button>
        </form>';
    }
    ?>
</body>
</html>
