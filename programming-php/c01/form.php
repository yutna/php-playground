<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting Form</title>
</head>

<body>
    <?php if (!empty($_POST['name'])) {
        echo "Greetings, {$_POST['name']}, and welcome.";
    } ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" />
        <button type="submit">Submit</button>
    </form>
</body>

</html>
