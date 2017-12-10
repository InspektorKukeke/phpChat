<!--

Creators: Siim Salu & Vjeran Nagy
Date: sometime in semester 1 2017
File:  front end code - signup form
Module: NCI Team Project year 3
Theme: Multi chat room
Tools used: PHP, HTML, HTML, JAVASCRIPT, MYSQL
version 2

-->

<?php include_once 'header.php'; 

$feedback = "";
if (isset($_GET['signup'])) {
    switch ($_GET['signup']) {
        case "empty":
            $feedback = "<p style='color:red;'>Empty fields!</p>";
            break;
        case "invalid":
            $feedback = "<p style='color:red;'>First and last name alphabetic characters only !</p>";
            break;
        case "email":
            $feedback = "<p style='color:red;'>Invalid email!</p>";
            break;
        case "pwshort":
            $feedback = "<p style='color:red;'>Password too short!(5 min)</p>";
            break;
        case "inputtoolong":
            $feedback = "<p style='color:red;'>Input too long, 20 characters max!</p>";
            break;
        case "usertaken":
            $feedback = "<p style='color:red;'>Username not available!</p>";
            break;
        case "success":
            $feedback = "<p style='color:green;'>Registration successful! You can now log in.</p>";
            break;
        default:
            break;
    }
}

?>


<div class="container" style="margin-top: 0px; background: none;">
    <div class="row">

        <div class="col-md-4 col-md-offset-4" style="margin: auto;">

            <div class="panel panel-default">





                <div class="panel-body">
                    <form action="Includes/signup.inc.php" method="POST">
                        <div class = "form-group">
                            <input type="firstname" name="first" class="form-control" placeholder="firstname" style="border-radius: 20px; border: 0px; height: 50px; font-size: 20px;">
                        </div>

                        <div class = "form-group">
                            <input type="lastname" name="last" class="form-control" placeholder="lastname" style="border-radius: 20px; border: 0px; height: 50px; font-size: 20px;">
                        </div>

                        <div class = "form-group">
                            <input type="email" name="email" class="form-control" placeholder="email" style="border-radius: 20px; border: 0px; height: 50px; font-size: 20px;">
                        </div>

                        <div class = "form-group">
                            <input type="username" name="uid" class="form-control" placeholder="username" style="border-radius: 20px; border: 0px; height: 50px; font-size: 20px;">
                        </div>

                        <div class = "form-group">
                            <input type="password" name="pwd" class="form-control" placeholder="password" style="border-radius: 20px; border: 0px; height: 50px; font-size: 20px;">
                        </div>

                        <div class = "form-group">
                           <button type="submit" name="signup" class="btn btn-success btn-md center-block"  value="Sign Up" style="width: 80px; border-radius: 40px; height: 80px;"><i class="fa fa-user-plus" style="padding-bottom: 1px; padding-top: 0px; padding-left: 2px;"></i></button>
                        </div>
                        <?php echo $feedback;?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>

