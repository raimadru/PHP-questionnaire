<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>

        <?php
        // first: age
        session_start();

        $DisplayForm = True;
        if (isset($_POST['submit'])) {
            $DisplayForm = False;
        }

        if ($DisplayForm) {
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div>Your age: </div><br>
                <input type="text" name="age" required><br>
                <input type="submit" name="submit" value="submit">
            </form>

            <?php
        } else {
            ?>
            <?php
            // second: country
            $DisplayForm = False;

            if (isset($_POST['submit'])) {
                $DisplayForm = True;
            }

            if ($DisplayForm) {
                session_start();

                $_SESSION['age'] = $_POST['age'];
                ?>
                <form action="question3.php" method="POST">
                    <div>Country: </div><br>
                    <input type="text" name="country" required><br>
                    <input type="submit" name="submit" value="submit">
                </form>

                <?php
            }
            ?>
        </body>
    </html>

    <?php
}
 
