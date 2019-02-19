<!DOCTYPE html>
<html lang="en">
<!--Add head-->
<?php include dirname(__FILE__) . '../../../../common/head.php'; ?>

<body>

<!--Header-->
<div class="jumbotron jumbotron-fluid etkd-picture">
  <div class="container">
    <h1 class="display-1 etkd-font">Elemental Taekwondo</h1>
  </div>
</div>
    
<!--Main-->
<main>
    <h2>Student Login</h2>
    
    <?php if(isset($msg)) { echo "<div class='container alert alert-success'>$msg</div>"; } ?>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                <input type="hidden" name="action" value="studentLogin">
            </div>
        </form>
    </div>
    
    <div class="container text-center">
        <p style='margin-top: 80px;'>Want an account?</p>
        <button id="createAccount" class="btn btn-primary btn-lg">Create Account</button>
    </div>
    
    <p style="text-align: center; margin-top: 80px;">Don't want to create an account? Try out a demo!</p>
    <p style="text-align: center;"><strong>Username:</strong> allcolorbelts</p>
    <p style="text-align: center;"><strong>Password:</strong> etkd123</p>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

<script src ='/js/main.js'></script>
</body>

</html>