<?php
include("model_member.php");
session_start();

//create session memberlist if not exist
if (!isset($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = array();
}

function createMember(){
    $member = new model_member();
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->email = $_POST['inputEmail'];
    $member->note = $_POST['inputNote'];
    array_push($_SESSION['memberlist'], $member);
}

function updateMember($memberID){
    $member = $_SESSION['memberlist'][$memberID]; //ambil dari indexnya
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->email = $_POST['inputEmail'];
    $member->note = $_POST['inputNote'];
}

function getAllMembers(){
    return $_SESSION['memberlist'];
}

function deleteMember($memberIndex){
    unset($_SESSION['memberlist'][$memberIndex]);
}

function getMemberWithID($memberID){
    return $_SESSION['memberlist'] [$memberID];
}

// jika button regist kik
if (isset($_POST['button_register'])) {
    createMember();
    header("Location:view_member.php"); //back 
}

// jika button delete kik
if (isset($_GET['deleteID'])) {
    deleteMember($_GET['deleteID']);
    header("Location:view_member.php"); //back 
}

// jika button update kik
if (isset($_POST['button_update'])) {
    updateMember($_POST['input_id']);
    header("Location:view_member.php"); //back 
}


?>