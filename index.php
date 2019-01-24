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
    
    case 'team03':
        include 'view/assignments/team/w03/week3.php';
        break;
    
    case 'team03Submit':
        include 'view/assignments/team/w03/formAction.php';
        break;
    
    case 'main':
    case 'about':
    default: 
        $assignment = false;
        include 'view/main.php';
}
        