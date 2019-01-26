<!DOCTYPE html>
<html lang="en">
<!--Add head-->
<?php include dirname(__FILE__) . '../../../../common/head.php'; ?>

<body>

<!--Header-->
<div class="jumbotron jumbotron-fluid w03-picture">

</div>

<nav class="navbar sticky-top navbar-dark bg-secondary">
    <a class="navbar-brand" href="index.php?action=browse03">Browse</a>
  <a class="btn btn-info my-2 my-sm-0 text-right go-to-cart" href="index.php?action=cart">
      Cart <?= ((isset($_SESSION['numItems']) && $_SESSION['numItems'] > 0)? "<span class='badge badge-light cart-badge'>".$_SESSION['numItems']."</span>" : ""); ?>
  </a>
</nav>

<main>
    <h2>Your Shopping Cart</h2>
    
    <div class='row mx-auto'>
        <div class='col-1'></div>
        <div class='col-8'>
    <div class="table-responsive">
        <table class="table border">
            <tbody>
        <?php 
            if(!empty($cart)) {
                $itemAmount = 1;
                $total = 0;
                for($i = 0, $j = 1; $i < sizeof($cart); $i++, $j++){
                    $total += $cart[$i]['cost'];
                    if($j < sizeof($cart) && ($cart[$i] == $cart[$j])) {
                            $itemAmount++;
                    } else {
                    echo "<tr>"
                        .   "<td class='w-200'>"
                        .       "<img src='img/".$cart[$i]['img']."' alt='".$cart[$i]['alt']."' class='img-thumbnail cart-img'>"                        
                        .   "</td>"
                        .   "<td class='w-200'>" 
                        .       "<span class='h4'>".$cart[$i]['name']."</h4>"
                        .   "</td>"
                        .   "<td>"    
                        .       "<span class='h5'>$".$cart[$i]['cost']."</h5>"
                        .   "</td>"
                        .   "<td class='w-200 text-center mx-auto'>"
                        .       "<input class='form-control w-50 mx-auto text-center' type='text' placeholder='$itemAmount' readonly>"
                        .       "<p class='text-success h5'>$".$cart[$i]['cost'] * $itemAmount."</p>"
                        .       "<button class='btn btn-danger btn-delete-cart-item w-50'>Delete</button>"    
                        .   "</td>"
                        ."</tr>";
                        $itemAmount = 1;
                    }
                }
                
            }
        ?>
            </tbody>
        </table>
    </div>
            </div>
        <div class='col-2'>
            <?php if(isset($total)) {
                echo "<div class='container'>"
                    .   "<h4>Total: <span class='text-success'>$$total</span></h4>"
                    .   "<h4 class='mx-auto text-center'><a href='index.php?action=checkout' class='btn btn-primary btn-lg'>Checkout</a></h4>"
                    ."</div>";
            }
            ?>
        </div>
        <div class='col-1'></div>
    </div>
    
    <?php if(empty($cart)) {
        echo "<div class='alert alert-info empty-cart-alert text-center'>"
                    .   "Your cart is currently empty!"
                    ."</div>";
    } else { 
        echo "<div class='container text-center empty-cart-btn mx-auto'>"
                   .    "<a class='btn btn-primary text-center mx-auto' href='index.php?action=emptyCart'>Empty Cart Contents</a>"
                   . "</div>";
    }?>

    <?php if(isset($_SESSION['total']) && isset($total)) { $_SESSION['total'] = $total; }?>
    
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>
</html>
