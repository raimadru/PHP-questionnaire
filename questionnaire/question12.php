<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Question</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>

        <?php
        session_start();

        $_SESSION['question11'] = $_POST['question11'];
        ?>

        <form action="question13.php" method="POST">
            <div>Where do you buy groceries, cleaning and hygiene products: </div><br>
            
            <input type="radio" name="question12" value="Supermarkets">Supermarkets<br>
            <input type="radio" name="question12" value="Order online">Order online<br>
            <input type="radio" name="question12" value="Farmers market">Farmers market<br>
            <input type="radio" name="question12" value="I make them at home">I make them at home<br>
            <input type="radio" name="question12" value="I buy in bulk">I buy in bulk<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>
