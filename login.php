
<?php

include_once 'header.php';
$feedback = "";
if (isset($_GET['login'])) {
    switch ($_GET['login']) {
        case "empty":
            $feedback = "<p style='color:red;'>Empty fields!</p>";
            break;
        case "baduser":
            $feedback = "<p style='color:red;'>Incorrect username!</p>";
            break;
        case "badpw":
            $feedback = "<p style='color:red;'>Password incorrect!</p>";
            break;
        case "banned":
            $feedback = "<p style='color:red;'>Your account is permanently disabled!</p>";
            break;
        default:
            break;
    }
}
?>
<section class="main_container">
    <div class="main_wrapper">
    </div>
</section>


<div class="container" style="margin-top: 0px; background: none;">
    <div class="row">

        <div class="col-md-4 col-md-offset-4" style="margin: auto;">

            <div class="panel panel-default">

                <h4>Login with</h4><br>
                <span><i class="fa fa-facebook" style="padding-top: 12px; padding-right: 1px;"></i></span>
                <span><i class="fa fa-twitter" style="padding-top: 12px; padding-right: 1px;"></i></span>
                <span><i class="fa fa-google-plus" style="padding-top: 12px; padding-right: 0px;"></i></span>
                <br><br>
                <h4>or</h4><br>
                <h4>username/email</h4><br>
                
                <div class="panel-body">
                    <form method="POST" action="Includes/login.inc.php">
                        <div class = "form-group">
                            <input type="username" name="uid" class="form-control" placeholder="username" style="border-radius: 20px; border: 0px; height: 50px; font-size: 25px;">
                        </div>



                        <div class = "form-group">
                            <input type="password" name="pwd" class="form-control" placeholder="password" style="border-radius: 20px; border: 0px; height: 50px; font-size: 25px;">
                        </div>

                        <div class = "form-group">
                            <button type="submit" name="login" class="btn btn-success btn-md center-block"  value="Login" style="width: 80px; border-radius: 40px; height: 80px;"><i class="fa fa-sign-in" style="padding-bottom: 1px; padding-top: 0px; padding-left: 2px;"></i></button>
                        </div>
                        <?php echo $feedback;?>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>