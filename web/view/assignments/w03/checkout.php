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
    <h2>Checkout</h2>
    
    <div class='container'>
        <?php if(isset($_SESSION['total'])) {
            echo "<h4 class='text-center ml-0'>Total: <span class='text-success'>$".$_SESSION['total']."</h4>";
        } ?>
    </div>
    
    <div class='container'>
        <form action='index.php' method='post'>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class='form-group'>
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
            </div>
            <div class="form-group form-inline">
              <label for="name">City</label>
              <input type="text" class="form-control address-form" id="city" name="city" placeholder="Enter city" required>
              <label for="name">State</label>
              <input type="text" class="form-control address-form" id="state" name="state" placeholder="Enter state" required>
              <label for="name">Zip</label>
              <input type="number" class="form-control address-form" id="zip" name="zip" placeholder="Enter zip" required>
            </div>
            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Buy</button>
                <input type='hidden' name='action' value='checkoutSuccess'>
                <a href='index.php?action=cart' class='btn btn-danger'>Return to Cart</a>
            </div>
        </form>
    </div>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>
</html>

