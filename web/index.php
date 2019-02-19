<?php  

session_start();

require_once 'lib/connections.php';
require_once 'model/main-model.php';
require_once 'model/student-model.php';
require_once 'lib/functions.php';

$action = filter_input(INPUT_POST, 'action');
if($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL) {
        $action = 'main';
    }
}

// Week 3 Variables
        // Cart Variables
        if(!isset($cart)) { $cart = array(); }
        if(!isset($_SESSION['numItems'])) { $_SESSION['numItems'] = 0; }
        if(!isset($_SESSION['cart'])) { $_SESSION['cart'] = array(); }
        
        // Uniform Variables
        $black = array("img"=>"black-uniform.jpg", "alt"=>"Black Uniform", "name"=>"Black V-Neck", "desc"=>"A black v-neck uniform", "href"=>"black", "cost"=>"29.99");
        $white = array("img"=>"white-uniform.jpg", "alt"=>"Standard Uniform", "name"=>"White V-Neck", "desc"=>"The standard white v-neck uniform", "href"=>"white", "cost"=>"19.99");
        $red = array("img"=>"red-uniform.jpg", "alt"=>"Red Uniform", "name"=>"Red Y-Neck", "desc"=>"A red v-neck uniform", "href"=>"red", "cost"=>"29.99");
        $blue = array("img"=>"blue-uniform.jpg", "alt"=>"Blue Uniform", "name"=>"Blue Y-Neck", "desc"=>"A blue v-neck uniform", "href"=>"blue", "cost"=>"29.99");
        $dan = array("img"=>"dan-uniform.jpg", "alt"=>"Black Belt Uniform", "name"=>"Black Belt V-Neck", "desc"=>"The standard black-belt v-neck uniform with black lapel", "href"=>"dan", "cost"=>"69.99");
        $uniforms = array($black, $white, $red, $blue, $dan);
        
        // Sparring Gear Variables
        $helmet = array("img"=>"headgear.jpg", "alt"=>"Helmet", "name"=>"Headgear", "desc"=>"Sparring Head Gear", "href"=>"helmet", "cost"=>"19.99");
        $mouth = array("img"=>"mouthguard.jpg", "alt"=>"Mouthguard", "name"=>"Mouthguard", "desc"=>"A clear mouth-guard with carrying case", "href"=>"mouthguard", "cost"=>"2.99");
        $hogu = array("img"=>"hogu.jpg", "alt"=>"Chest Protector", "name"=>"Chest Protector", "desc"=>"A reversible red/blue chest protector", "href"=>"hogu", "cost"=>"29.99");
        $arm = array("img"=>"forearm.jpg", "alt"=>"Arm Guard", "name"=>"Forearm Guards", "desc"=>"Forearm Guards", "href"=>"armguard", "cost"=>"19.99");
        $glove = array("img"=>"gloves.jpg", "alt"=>"Gloves", "name"=>"Sparring Gloves", "desc"=>"Fingerless gloves", "href"=>"gloves", "cost"=>"19.99");
        $shin = array("img"=>"shin.jpg", "alt"=>"Shin Guards", "name"=>"Shin Guards", "desc"=>"Protects the shins", "href"=>"shinguard", "cost"=>"19.99");
        $instep = array("img"=>"instep.jpg", "alt"=>"Instep Guards", "name"=>"Instep Guards", "desc"=>"Protects the top of the foot", "href"=>"instep", "cost"=>"19.99");
        $cup = array("img"=>"cup.jpg", "alt"=>"Groin Protector", "name"=>"Groin Protector", "desc"=>"Protects the groin", "href"=>"cup", "cost"=>"19.99");
        $sparring = array($helmet, $mouth, $hogu, $arm, $glove, $shin, $instep, $cup);
        
        // Weapon Variables
        $nunchaku = array("img"=>"nunchaku.jpg", "alt"=>"Nunchaku", "name"=>"Nunchaku", "desc"=>"Padded for training with a chain", "href"=>"nunchaku", "cost"=>"19.99");
        $escrima = array("img"=>"escrima.jpg", "alt"=>"Escrima Stick", "name"=>"Escrima Stick", "desc"=>"Made of rattan", "href"=>"escrima", "cost"=>"9.99");
        $bo = array("img"=>"bostaff.jpg", "alt"=>"Bo Staff", "name"=>"Bo Staff", "desc"=>"Comes in a variety of colors", "href"=>"bo", "cost"=>"29.99");
        $weapons = array($escrima, $nunchaku, $bo);


switch($action) {
    //actions
    case 'assignments':
        $assignment = true;
        include 'view/assignments.php';
        break;
    
/*--------------------------------------------------------------
 *  Week 3
 --------------------------------------------------------------*/
    
    case 'addToCart':
        $cart = $_SESSION['cart'];
        error_log('made it to php!');
        $item = $_POST;
        $_SESSION['numItems']++;
        array_push($cart, $item);
        $_SESSION['cart'] = $cart;
        echo $_SESSION['numItems'];
        break;
    
    case 'cart':
        $cart = $_SESSION['cart'];
        if(!empty($cart)){
            usort($cart, function($a, $b) {
                return strnatcmp($a['name'], $b['name']);
            });
        }
        include 'view/assignments/w03/cart.php';
        break;
    
    case 'emptyCart':
        $_SESSION['cart'] = array();
        $_SESSION['numItems'] = 0;
        $cart = array();
        include 'view/assignments/w03/cart.php';
        break;
    
    case 'checkout':
        include 'view/assignments/w03/checkout.php';
        break;
    
    case 'checkoutSuccess':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
        $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
        $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_NUMBER_INT);
        $cart = $_SESSION['cart'];
        
        error_log($name . $address . $zip);
        if(!empty($cart)){
            usort($cart, function($a, $b) {
                return strnatcmp($a['name'], $b['name']);
            });
        }
        $_SESSION['cart'] = array();
        $_SESSION['numItems'] = 0;
        $cart = array();        
        include 'view/assignments/w03/confirm.php';
        break;
    
    case 'team03':
        include 'view/assignments/team/w03/week3.php';
        break;
    
    case 'team03Submit':
        include 'view/assignments/team/w03/formAction.php';
        break;   
    
    case 'browse03':        
        include 'view/assignments/w03/browse.php';
        break;
    
/*--------------------------------------------------------------
 *  Week 4
 --------------------------------------------------------------*/
    
    case 'team04':
        include 'view/assignments/team/w04/week4.php';
        break;
    
    case 'team4Search':
        $book = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
        include 'view/assignments/team/w04/week4search.php';
        break;
    
    case 'week4Details':
        $id = $_GET['id'];
        include 'view/assignments/team/w04/week4details.php';
        break;
    
    case 'w4Login':
        include 'view/assignments/w04/login.php';
        break;
    
    case 'studentLogin':
        $username = strtolower(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
        $userExists = checkUsername($username);
        if (!$userExists) {
            $msg = "<p class='err-msg'>We can't find that username in our system. Please try again.</p>";
            include 'view/assignments/w04/login.php';
            exit;
        }

        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $userData = getUserData($username);
        
        $hashCheck = password_verify($password, $userData['password']);
        if (!$hashCheck) {
            $msg = "<p class='err-msg'>Invalid password. Please try again.</p>";
            include 'view/assignments/w04/login.php';
            exit;
        }
        
        $_SESSION['userData'] = $userData;
        array_pop($userData);
        $_SESSION['loggedin'] = true;
        $rankId = 1;
        $_SESSION['userData']['rankId'] = $rankId;
        header('location: /index.php?action=dashboard&id=' . $rankId);
        exit;
        break;
        
    case 'dashboard':
        $username = $_SESSION['userData']['username'];
        $rankId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $id = $_SESSION['userData']['studentid'];
        $categories = getCategories();
        $categoryMenu = buildCategoryMenu($categories);
        $ranks = getRanks($username);
        $beltSelect = createBeltSelect($rankId, $ranks);
        $curriculum = getCurriculum($username, $rankId);
        $curriculumDisplay = buildCurriculum($curriculum, $categories);
        $fitness = getFitness($username);
        $fitnessTable = createFitnessTable($rankId, $fitness);
        $colorScheme = getColorScheme($rankId);
        include 'view/assignments/w04/dashboard.php';
        break;
    
/*--------------------------------------------------------------
 *  Week 5
 --------------------------------------------------------------*/
    case 'addFitness':
        $userid = $_SESSION['userData']['studentid'];
        error_log($userid);
        $data = filter_input_array(INPUT_POST);
        
        error_log('made it to controller. $data is: ' . json_encode($data));
        
        $success = addFitness($userid, $data);
        
        error_log('back to the controller. $success is ' . $success);
        
        if ($success) {
            echo 'Fitness Stats successfully added.';
            break;
        } else {
            echo 'Sorry, there was an error.';
            break;
        }
        break;
        
    case 'createAccount':
        include 'view/assignments/w06/createAccount.php';
        break;
    
    case 'addUser':
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $passwordConfirm = filter_input(INPUT_POST, 'passwordConfirm', FILTER_SANITIZE_STRING);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
        $rankid = filter_input(INPUT_POST, 'rankid', FILTER_SANITIZE_NUMBER_INT);
        
        $rankname = 'White Belt';
        
        switch($rankid) {
            case 2:
                $rankname = 'Advanced White Belt';
                break;
            case 3:
                $rankname = 'Yellow Belt';
                break;
            case 4:
                $rankname = 'Advanced Yellow Belt';
                break;
            case 5:
                $rankname = 'Green Belt';
                break;
            case 6:
                $rankname = 'Advanced Green Belt';
                break;
            case 7:
                $rankname = 'Blue Belt';
                break;
            case 8:
                $rankname = 'Advanced Blue Belt';
                break;
            case 9:
                $rankname = 'Red Belt';
                break;
            case 10:
                $rankname = 'Advanced Red Belt';
                break;
            case 101:
                $rankname = '1st Dan Black';
                break;
            case 102:
                $rankname = '2nd Dan Black';
                break;
            case 103:
                $rankname = '3rd Dan Black';
                break;
            case 104:
                $rankname = '4th Dan Black';
                break;
            default:
                $rankname = 'White Belt';
                break;
        }
        
        $checkUsername = checkUsername($username);
        if ($checkUsername) {
            $msg = "That username already exists in the system.";
            include 'view/assignments/w06/createAccount.php';
            exit;
        }
        
        if($password != $passwordConfirm) {
            $msg = "Your passwords do not match. Please try again.";
            include 'view/assignments/w06/createAccount.php';
            exit;
        }
        
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        
        $success = addStudent($firstname, $lastname, $username, $hashedpassword, $gender, $rankid, $rankname);
        
        if($success) {
            $msg = "Your account has been created. Log in now!";
            include 'view/assignments/w04/login.php';
            break;
        } else {
            $msg = "There was an issue creating your account. Please try again.";
            include 'view/assignments/w06/createAccount.php';
            break;
        }
        
        break;
        
    case 'logout':
        session_unset();
        session_destroy();
        $msg = "You have successfully logged out.";
        include 'view/assignments/w04/login.php';
        break;
        
/*--------------------------------------------------------------
 * Other
 --------------------------------------------------------------*/
    case 'Contact':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = checkEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        
        if(empty($name) || empty($email)) {
            echo 'Please provide information for all empty form fields.';   
            exit;
        }
        
        $messageSuccess = sendMessage($name, $email, $phone, $message);
        if(!$messageSuccess) {
            echo "Sorry, but there were error(s) found with the form you submitted.";
        } else {
            echo "Thanks! I'll get back to you.";
        }
        break;
    
    case 'main':
    case 'about':
    default: 
        $assignment = false;
        include 'view/main.php';
}
        