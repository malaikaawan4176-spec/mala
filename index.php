<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GitHub Practice Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My PHP Practice Project</h1>
        
        <!-- Form to send name -->
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter your name">
            <button type="submit">Greet Me!</button>
        </form>

        <p id="greeting">
            <?php
            if(isset($_POST['name']) && !empty(trim($_POST['name']))) {
                $name = htmlspecialchars($_POST['name']); // sanitize input
                echo "Hello, $name! Welcome to GitHub PHP practice.";
            } elseif(isset($_POST['name'])) {
                echo "Please enter your name!";
            }
            ?>
        </p>
    </div>

    <script src="script.js"></script>
</body>
</html>
