<!--Creator - Siim Salu x15003019 
    Date: 14/10/17
    Version 1
-->



<?php
//This script controls chatroom content display depending on user input

require($_SERVER['DOCUMENT_ROOT'] . "/phpChat/Controller/Chatcontroller.php");
$cc = new ChatController();

//Checking for session, prevents hacking
if (!isset($_SESSION['u_uid'])) {
    header("Location: ../index.php?destination=invalid");
    exit();
}
//Displaying all users(including offline)
elseif (isset($_POST['all'])) {
    $_SESSION['u_list'] = 0;
    $chatrooms = $cc->CreateChatroomList($_SESSION['u_activeroom']);
    $users = $cc->CreateUserList($_SESSION['u_list'], $_SESSION['u_activeroom']);
}
//Displaying online users 
elseif (isset($_POST['online'])) {
    $_SESSION['u_list'] = 1;
    $chatrooms = $cc->CreateChatroomList($_SESSION['u_activeroom']);
    $users = $cc->CreateUserList($_SESSION['u_list'], $_SESSION['u_activeroom']);
}
//Displaying all users(including offline) 
elseif (isset($_POST['friends'])) {
    $_SESSION['u_list'] = 2;
    $chatrooms = "";
    $users = $cc->GetUsersFriends($_SESSION['u_uid']);
}
//Creating private chat view using $_GET, dependable on user input
elseif (isset($_GET['name']) && isset($_GET['type']) && isset($_SESSION['u_uid'])) {

    $cc->InsertChatroomUser($_SESSION['u_uid'], $_GET['name']);
    $_SESSION['u_activeroom'] = $_GET['name'];
    $_SESSION['u_type'] = $_GET['type'];
    $chatrooms = "";
    $users = $cc->GetChatroomUsers($_SESSION['u_activeroom'], $_SESSION['u_type']);
} 
//Default view (users/chat)
else 
{
    $chatrooms = $cc->CreateChatroomList($_SESSION['u_activeroom']);
    $users = $cc->CreateUserList($_SESSION['u_list'], $_SESSION['u_activeroom']);
    $chatmessages = "";
    $_SESSION['u_activeroom'] = "General";
}

//This code executes when user is submitting into chat
if (isset($_POST['submit1']) && isset($_SESSION['u_id']) && !empty($_POST['message'])) {
    $pusher = $_SESSION['u_uid'];
    $receiver = $_SESSION['u_activeroom'];
    $message = $_POST['message'];
    $cc->InsertChat($pusher, $receiver, $message);
}

//User list view when clicking on chat anchor tag
if ($_GET['name'] == "none") {
    $chatmessages = "";
} else {
    $chatmessages = $cc->GetChatMessages($_SESSION['u_uid'], $_SESSION['u_activeroom'], $_SESSION['u_type']);
}


