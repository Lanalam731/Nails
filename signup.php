<?php
     include 'header.php';
     require 'includes/dbh.inc.php';
?>

    <main>
        <div class="signupTitle">
        <h2 >Signup</h2>
        <hr>
        </div>
        <?php
                if (isset($_GET['error'])) {
                        if($_GET['error'] == "emptyfields") {
                         echo '<p class="signuperror">Fill in all fields!</p>';
                        }
                        else if($_GET['error'] == "invaliduidmail") {
                                echo '<p class="signuperror">Invalid unername and email!</p>';
                        }
                        else if($_GET['error'] == "invaliduid") {
                        echo '<p class="signuperror">Invalid unername!</p>';
                        }
                        else if($_GET['error'] == "invalidmail") {
                                echo '<p class="signuperror">Invalid email!</p>';
                        }
                        else if($_GET['error'] == "passwordcheck") {
                                echo '<p class="signuperror">Your passwords do not match!</p>';
                        }
                        else if($_GET['error'] == "usertaken") {
                                echo '<p class="signuperror">Username is already taken!</p>';
                        }
                }
              
        ?>


        
        <div class="signupForm">
        <form class="form-signup" action="includes/signup.inc.php" method="post">
         
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Submit</button>
        </form>
    </div>
    </main>
    <?php
            //footer
            require 'includes/footer.php';
    ?>
    
		
		