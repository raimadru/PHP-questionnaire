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

        $_SESSION['question4'] = $_POST['question4'];
        ?>

        <form action="question6.php" method="POST">
            <div>What are the most common groceries in your refrigerator? </div><br>
            
            <input type="radio" name="question5" value="Dairy">Dairy<br>
            <input type="radio" name="question5" value="Vegetables and fruits">Vegetables and fruits<br>
            <input type="radio" name="question5" value="Meat">Meat<br>

            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>
