<?php
if (!isset($_SESSION['loggedin'])) {
    header('location: /index.php?action=w4Login');
    exit;
}

if (isset($_SESSION['userData'])) {
    $userData = $_SESSION['userData'];
}

if (isset($_SESSION['curriculum'])) {
    $curriculum = $_SESSION['curriculum'];
}

if (isset($_SESSION['fitness'])) {
    $fitness = $_SESSION['fitness'];
}
?>

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
    
    <div class="student-main">
        
        
            <div class="curriculum-menu">
                <div class="responsive-curriculum-menu">
                    <p>Curriculum Categories</p>
                    <i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i>
                </div>
                <?= $categoryMenu ?>
            </div><div class="curriculum-main">
                <aside class='logout'>
                    <button id='logout' class='btn btn-info btn-small btn-logout'>Logout</button>
                </aside>
                <?= $beltSelect ?>
                <h2 class="student-welcome">Welcome<?php
                    if (isset($userData['firstName'])) {
                        if ($userData['firstName'] != 'Demo') {
                            echo ", " . $userData['firstName'];
                        }
                    }
                    ?>!</h2>
                <p class="student-welcome">Use the dropdown menu to the right to select a belt and the menu to the left to review the curriculum you will be tested on for your next test.</p>
                    
                <?= $fitnessTable ?>

                <?= $curriculumDisplay ?>

            </div>
        </div>

</main>

<button type="button" class="btn btn-info return-btn">
    <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
</button>


<script src='/js/curriculum.js'></script>
</body>

</html>