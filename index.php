<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            background-color: #228B22; /* Forest Green background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .content {
            text-align: center;
            color: #f5f5dc; /* Light cream text */
            font-size: 48px; /* Large font size */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php
        echo "Hello World! NICO<br>";
        echo "Server: " . gethostname() . "<br>";
        echo "Web server #" . getenv('SERVER_ID');
        ?>
    </div>
</body>
</html>



