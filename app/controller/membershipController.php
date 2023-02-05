<?php include_once('baseController.php');

function index()
{
    $s = "select * from memberships";
    $memberships = readQuery($s);
    $memberships = json_decode($memberships);
    return $memberships;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from memberships where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}