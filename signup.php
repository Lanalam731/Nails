<?php
     include 'header.php';
     require 'includes/dbh.inc.php';
?>

    <main>
        <h2 style="text-align:center;">Signup</h2>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class=signuperror">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
                echo '<p class=signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET['error'] == "invaliduid") {
                echo '<p class=signuperror">Invalid username!</p>';
            }
            else if ($_GET['error'] == "Invalidmail") {
                echo '<p class=signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p class=signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p class=signuperror">Your username is already taken!</p>';
            }
        }
       
        else if ($_GET["signup"] == "success") {
            echo '<p class="signupsuccess">Signup successful!</p>';
        }
        ?>
        <div class="signupForm">
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <label for="uid">Username</label>
                <input type="text" name="uid" placeholder="Username">
            <label for="mail">E-mail</label>
                <input type="text" name="mail" placeholder="E-mail">
            <label for="pwd">Password</label>
                <input type="password" name="pwd" placeholder="Password">
            <label for="pwd-repeat">Repeat Password</label>
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <input type="submit" value="Submit">
        </form>
    </div>
    </main>
    </body>
    </html>