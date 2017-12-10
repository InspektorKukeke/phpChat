
<?php
include_once 'header.php';
include_once 'Includes/chat.inc.php';

if (!isset($_SESSION['u_id'])) {
    header("Location: index.php?destination=invalid");
}
?>


<div class="container">


    <div class="user_wrapper" id="style-2">

        <form name="userlist" method="POST">
            <button class="btnSidebar" style="width: 60px; border-radius: 10px; height: 30px;" type="submit" name="all">All</button>   
            <button class="btnSidebar" style="width: 60px; border-radius: 10px; height: 30px;" type="submit" name="online">Online</button>   
            <button class="btnSidebar" style="width: 60px; border-radius: 10px; height: 30px;" type="submit" name="friends">Friends</button>
             
        </form>
        <br>
        <?php echo $chatrooms . $users; ?>
        <img id="ad" src="images/gif.gif" alt="ad">
        <img id="ad" src="images/gif2.gif" alt="ad">
    </div>
    <script type="text/javascript">
            $(document).ready(function()
            {
                refresh(); // Calling refresh() on document ready
                window.setInterval("refresh()", 1000); // Calling refresh() every 10 seconds
            });

            function refresh()
            {
                // Asynchonously requesting the content of disp.php
                $.get('chat.inc.php', function(data)
                {
                    // This will be executed when you get the response back from the server
                    $('#chatbox').html(data);
                });
            }
        </script> 
    <div class="chat_wrapper"  id="chatbox">
         <img id="ad" src="images/gif3.gif" alt="ad">
        <?php echo $chatmessages; ?>
        
    </div>
        

    <div class="chatbox_wrapper">

        <script type="text/javascript">
            $(function () {
                $("#message").focus();
            });


        </script>
        <form name="chatpush" class="chatpush" method="post">
            <textarea rows="3" name="message" id="message" class="message" placeholder="" Style="resize: none;"></textarea>

            <input type="submit" id="submit" name="submit1" value="" style="display:none" />
        </form>

    </div>

</div>

<?php include_once 'footer.php'; ?>

