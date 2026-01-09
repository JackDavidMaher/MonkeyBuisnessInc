<!DOCTYPE html>
<html>
<head>
    <title>BELLO!</title>
</head>
<body>
    <?php echo '<p>Hello World</p>'; ?>
    <?php #phpinfo(); ?>
    <?php 
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
        echo 'You are using Firefox.';
    }
    ?>
    <form action="action.php" method="post">
    <label for="name">Your name:</label>
    <input name="name" id="name" type="text">

    <label for="age">Your age:</label>
    <input name="age" id="age" type="number">

    <button type="submit">Submit</button>
</form>
</body>
</html>