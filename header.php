<!--

Creators: Siim Salu & Vjeran Nagy
Date: sometime in semester 1 2017
File:  header of each page
Module: NCI Team Project year 3
Theme: Multi chat room
Tools used: PHP, HTML, HTML, JAVASCRIPT, MYSQL
version 1

-->

<?php
session_start();
if (isset($_SESSION['u_id'])) {
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/beauty.css">
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        <header>
             
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6 col-md-offset-4" style="margin: auto;">
                        <div class="panel panel-default">
                            <div class="panel-body" >
                                    
                                <div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-top: 0px; padding-left: 12px;"><a href="index.php" class="fa fa-home"></a></div>
                                    <?php
                                    if (isset($_SESSION['u_id']) && $_SESSION['u_level'] == 3) {
                                        echo '<div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-bottom: 1px; padding-top: 0px; padding-left: 12px; "><a href="chatroom.php?name=none" class="fa fa-comments-o"></a></div>
                                        <div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-top: 0px; padding-left: 15px; "><a href="admin.php" class="fa fa-user-secret"></a></div>';
                                    } elseif (isset($_SESSION['u_id'])) {
                                        echo '<div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; "><a href="chatroom.php?name=none" class="fa fa-comments-o"></a></div>';
                                    }
                                    ?>



                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo '<div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-top: 0px; padding-left: 11px;"><a href="settings.php" class="fa fa-user-o"></a></div>
                                        
                                <div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px;"><form action="Includes/logout.inc.php" method="POST">
                                        
                            <button type="submit" name="submit" class="fa fa-sign-out" style="border: none; background:none; color: white; padding-top: 7px; padding-left: 8px;"></button></div>
                            </form>';
                                } else {
                                    echo '<div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-top: 0px; padding-left: 15px;"><a href="login.php" class="fa fa-sign-in"></a></div>
                                
                            <div class="btn btn-success btn-md center-block" style="width: 80px; border-radius: 40px; height: 80px; padding-top: 0px; padding-left: 15px;"><a href="signup.php" class="fa fa-user-plus"></a></div>';
                                }
                                ?>

                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>

        </header>

