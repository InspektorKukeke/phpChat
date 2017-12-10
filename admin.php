
<?php
include_once 'header.php';
include_once 'Includes/admin.inc.php';

if (!isset($_SESSION['u_id']) || $_SESSION['u_level'] != 3) {
    header("Location: index.php?path=invalid");
    exit();
}
?>

<div class="container">
    <div class="admin_tools">
        <form name="admin_menu" method="POST">
            <button type="submit" name="admininfo">Info</button></br>   
            <button type="submit" name="adminusers">Users</button></br>   
            <button type="submit" name="admincreatechat">Rooms</button></br>   
            <button type="submit" name="admintools">Tools</button></br>   
        </form>

    </div>

    <div class="admin_content">
       
        
        <?php echo $content;?>

       

    </div>
</div>


<?php include_once 'footer.php'; ?>
