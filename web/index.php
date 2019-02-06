<?php  

session_start();

require_once 'lib/connections.php';

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
    
    /*-----------------
     *  Week 3
     -----------------*/
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
    
    case 'team04':
        include 'view/assignments/team/w04/week4.php';
        break;
    
    case 'team4Search':
        $book = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
        foreach ($db->query('SELECT * FROM scriptures WHERE book = ' . $book) as $row)
        {
          echo '<p><b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> - "' . $row['content'] . '"</p>';
        }
        include 'view/assignments/team/w04/week4search.php';
        break;
    
    case 'main':
    case 'about':
    default: 
        $assignment = false;
        include 'view/main.php';
}
        