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
    <div class='container'>

    </div>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>
</html>

