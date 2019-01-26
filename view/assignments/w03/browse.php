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
    
<!--Main-->
<main>
    <h2>Pro Shop</h2>

    <h4>Uniforms</h4>
    <div class="d-flex flex-wrap shop-cards">
    <?php 
    
        foreach($uniforms as $uniform) {
            $uniformJSON = json_encode($uniform);
            echo "<div class='card shop-card'>"
               .    "<img src='img/".$uniform['img']."' class='card-img-top' alt='".$uniform['alt']."'>"
               .    "<div class='card-body'>"
               .        "<h5 class='card-title'>".$uniform['name']."</h5>"
               .        "<p class='card-text'>".$uniform['desc']."</p>"
               .        "<p class='card-text font-weight-bold text-success'>$".$uniform['cost']."</p>"     
               .        "<p class='text-center btn-row'>"
//               .            "<a href='/index.php?action=".$uniform['href']."' class='btn btn-primary'>Details</a>"
               .            "<a class='btn btn-primary btn-cart' data='$uniformJSON'>Add to Cart</a>"
               .        "</p>"
               .    "</div>"
               . "</div>";
        }
    ?>
    </div>
    
    <h4>Sparring Gear</h4>
    <div class="d-flex flex-wrap shop-cards">
    <?php 
        foreach($sparring as $gear) {
            $gearJSON = json_encode($gear);
            echo "<div class='card shop-card'>"
               .    "<img src='img/".$gear['img']."' class='card-img-top' alt='".$gear['alt']."'>"
               .    "<div class='card-body'>"
               .        "<h5 class='card-title'>".$gear['name']."</h5>"
               .        "<p class='card-text'>".$gear['desc']."</p>"
               .        "<p class='card-text font-weight-bold text-success'>$".$gear['cost']."</p>"  
               .        "<p class='text-center btn-row'>"
//               .            "<a href='/index.php?action=".$gear['href']."' class='btn btn-primary'>Details</a>"
               .            "<a class='btn btn-primary btn-cart' data='$gearJSON'>Add to Cart</a>"
               .        "</p>"
               .    "</div>"
               . "</div>";
        }
    ?>
    </div>
    
    <h4>Weapons</h4>
    <div class="d-flex flex-wrap shop-cards">
    <?php 
        foreach($weapons as $weapon) {
            $weaponJSON = json_encode($weapon);
            echo "<div class='card shop-card'>"
               .    "<img src='img/".$weapon['img']."' class='card-img-top' alt='".$weapon['alt']."'>"
               .    "<div class='card-body'>"
               .        "<h5 class='card-title'>".$weapon['name']."</h5>"
               .        "<p class='card-text'>".$weapon['desc']."</p>"
               .        "<p class='card-text font-weight-bold text-success'>$".$weapon['cost']."</p>"  
               .        "<p class='text-center btn-row mx-auto'>"
//               .            "<a href='/index.php?action=".$weapon['href']."' class='btn btn-primary'>Details</a>"
               .            "<a class='btn btn-primary btn-cart' data='$weaponJSON'>Add to Cart</a>"
               .        "</p>"
               .    "</div>"
               . "</div>";
        }
    ?>
    </div>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>

</html>