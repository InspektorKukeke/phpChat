  <?php
include_once 'Includes/settings.inc.php';
include_once 'header.php';


if (!isset($_SESSION['u_id'])) {
    header("Location: index.php?path=invalid");
}
?>
<div class="container">



    <div class="admin_wrapper">
        <h1>Profile Page</h1>

        <h2>Content</h2>

    </div>
    <div class="displaycontent">


        <?php echo $updatecolor . $addfriend . $removefriend . $pwchangeform . $avatarselect; ?>

    </div>

   


</div>

<?php include_once 'footer.php'; ?>


