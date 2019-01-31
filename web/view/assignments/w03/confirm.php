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
    <div class='container alert-success'>
        <h3>Thank you!</h3>
        <p>Your order was successfully placed.</p>
        <p>The shipment will be sent to:</p>
        <p><?= (isset($name)) ? $name : '' ?><br><?= (isset($address)) ? $address : '' ?><br><?= (isset($city)) ? $city . ',' : '' ?> <?= (isset($state)) ? $state : '' ?> <?= (isset($zip)) ? $zip : '' ?></p>
    </div>
    <div class='row mx-auto'>
        <div class='col-1'></div>
        <div class='col-10'>
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
                        .   "<td class='w-25'>"
                        .       "<img src='img/".$cart[$i]['img']."' alt='".$cart[$i]['alt']."' class='img-thumbnail cart-img-25 w-25'>"                        
                        .   "</td>"
                        .   "<td class='w-25'>" 
                        .       "<span class='h4'>".$cart[$i]['name']."</h4>"
                        .   "</td>"
                        .   "<td>"    
                        .       "<span class='h5'>$".$cart[$i]['cost']."</h5>"
                        .   "</td>"
                        .   "<td class='w-25 text-center mx-auto'>"
                        .       "<input class='form-control w-50 mx-auto text-center' type='text' placeholder='$itemAmount' readonly>"
                        .       "<p class='text-success h5'>$".$cart[$i]['cost'] * $itemAmount."</p>"  
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
        <div class='col-1'>
    </div>
    </div>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>
</html>
