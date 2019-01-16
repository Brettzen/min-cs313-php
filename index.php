<?php

$action = filter_input(INPUT_POST, 'action');
if($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL) {
        $action = 'main';
    }
}


switch($action) {
    //actions
    case 'assignments':
        $assignment = true;
        include 'view/assignments.php';
        break;
    
    case 'main':
    case 'about':
    default: 
        $assignment = false;
        include 'view/main.php';
}
        