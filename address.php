<?php

    session_start();

    include "database.php";
    $error = "";
    $show_table = true;

    // ini_set('display_errors', 1);

    $person = array();

    if (isset($_GET['name'])) {
        $person['name'] = $_GET['name'];
    }

    if (isset($_GET['email'])) {
        $person['email'] = $_GET['email'];
    }

    if (isset($_GET['tele'])) {
        $person['tele'] = $_GET['tele'];
    }
    else {
        $person['tele'] = "0000-0000";
    }

    if (isset($_GET['bookmarked'])) {
        $person['bookmarked'] = $_GET['bookmarked'];
    }
    else {
        $person['bookmarked'] = "";
    }


    $list_address = array();

    // $_SESSION['list_address'][] = $person;

    // if (isset($_SESSION['list_address'])) {
    //     $list_address = $_SESSION['list_address'];
    // }

    $list_address = get_tarefas($connect);

    // if (isset($list_database)) {
    //     $list_address = $list_database;
    // }
    // else {
    //     $error = "erro";
    // }

    include "index.php";