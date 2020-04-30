<?php 
 include_once 'function.php';
 include_once 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
</head>
<body>
    <h1>
        Welcome 
        <?php echo user('name');//call function user and print the name ?>
    </h1>

    <a href="logout.php">Logout</a>
    
</body>
</html>