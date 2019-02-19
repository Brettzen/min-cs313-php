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
    <h2>Create a Student Account</h2>
    
    <?php if(isset($msg)) { echo "<div class='container alert alert-danger'>$msg</div>"; } ?>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                <select id="gender" name="gender">
                    <option value='m'>Gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Enter your password again" required>
            </div>
            <div class="form-group">
                <select id="rankid" name="rankid" required>
                    <option value='1'>Current rank</option>
                    <option value="1">White</option>
                    <option value="2">Advanced White</option>
                    <option value="3">Yellow</option>
                    <option value="4">Advanced Yellow</option>
                    <option value="5">Green</option>
                    <option value="6">Advanced Green</option>
                    <option value="7">Blue</option>
                    <option value="8">Advanced Blue</option>
                    <option value="9">Red</option>
                    <option value="10">Advanced Red</option>
                    <option value="101">1st Dan Black</option>
                    <option value="102">2nd Dan Black</option>
                    <option value="103">3rd Dan Black</option>
                    <option value="104">4th Dan Black</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Create Account</button>
                <input type="hidden" name="action" value="addUser">
            </div>
        </form>
    </div>
</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>

</body>

</html>