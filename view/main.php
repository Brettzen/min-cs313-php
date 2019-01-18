<!DOCTYPE html>
<html lang="en">
<!--Add head-->
<?php include dirname(__FILE__) . '/../common/head.php'; ?>

<body>
<!--Add header-->
<?php include dirname(__FILE__) . '/../common/header.php'; ?>

<!--Add navigation-->
<?php include dirname(__FILE__) . '/../common/nav.php'; ?>

<!--Add main-->
<main>
  <div class='row'>  
    <div class='col-3'>
    <ul class="nav flex-column">
        <li class="nav-item">
            <h3 class='nav-link item-heading'>Projects</h3>
            <div class="item-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" id='one'>Elemental Taekwondo</a>
                    <a href="#" class="list-group-item list-group-item-action" id='two'>Sunshine Roofing Company</a>
                    <a href="#" class="list-group-item list-group-item-action" id='three'>Home-Grown</a>
                    <a href="#" class="list-group-item list-group-item-action" id='four'>Band of Others</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
          <h3 class='nav-link item-heading'>Tricking</h3>
            <div class="item-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" id='five'>What is tricking?</a>
                        <a href="#" class="list-group-item list-group-item-action" id='six'>2008 Sampler</a>
                        <a href="#" class="list-group-item list-group-item-action" id='seven'>Yamada gets the Butterfly Twist</a>
                    </div>
            </div>
        </li>
        <li class="nav-item">
          <h3 class='nav-link item-heading'>Gaming</h3>
            <div class="item-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" id='eight'>Steam Profile</a>
                        <a href="#" class="list-group-item list-group-item-action" id='nine'>Speedrunning Mega Man Anniversary Collection</a>
                        <a href="#" class="list-group-item list-group-item-action" id='ten'>Final Fantasy IV Challenge: Auto-Battle Geryon</a>
                        <a href="#" class="list-group-item list-group-item-action" id='eleven'>Zelda: A Link to the Past: Speedrun</a>
                    </div>
            </div>
        </li>
    </ul>
    </div>
    <div class='col-9'>
        <div class="intro">
            <h2>Welcome!</h2>
            <p>Use the menu on the left to navigate.</p>
        </div>
        <div class="item-desc one">
            <h4>Elemental Taekwondo</h4>
            <img src='img/2666.jpg' class='img-fluid' alt='Elemental Taekwondo'>
            <p>Elemental Taekwondo is a martial arts school that I founded back in 2010. Initially it started out as a martial arts after-school program for Magna Elementary in Magna, UT. Through multiple transitions we now offer full Taekwondo classes to all ages in Shelley, ID. We also manage the BYU-I Taekwondo club and hold belt promotional tests at the end of every semester.</p>
            <p>The Elemental Taekwondo website, <a href='http://www.elementaltkd.com'>elementaltkd.com</a> was made using PHP, MySQL, JavaScript, and jQuery. It gives information about the school, has a small shop integrated with PayPal, a gallery, and a student dashboard that existing students can use to view their current belt's curriculum. There are currently around 40 registered students on the website.</p>
        </div>
        
        <div class="item-desc four">
            <h4>Band of Others</h4>
            <img src="img/bandOfOthers1.png" class='img-fluid' alt="Band of Others">
            <p><a href="http://blog.ninjabee.com/2014/02/the-buzz-global-game-jam-2014.html" target="_blank">http://blog.ninjabee.com/2014/02/the-buzz-global-game-jam-2014.html</a></p>
            <p>I had the opportunity to work alongside friends at Wahoo Studios (also known as NinjaBee) to create a game for this year's Global Game Jam. Following the theme, "We don't see things as they are, we see them as we are", we set to work brainstorming, designing and developing our game. Our end result was a guessing game titled "Band of Others". In Band of Others, you have ten different characters to select from. After selecting a character, you are then directed to a screen with a covered image. Using stamps and clues to reveal fragments of the image, you must guess what the image is. Because of the theme, the answer may be called something different depending on what character is "seeing" the object.</p>
            <p>Band of Others was created using HTML5 and JavaScript, using the rat.js game engine and TortoiseSVN. My main tasks were finding all stock photos to ensure we stayed compliant with creative common license law, and designing/coding the "Results" screen.</p>
            <p><a href="http://wahoo.com/play/jam/" target="_blank">You can play it here!</a></p>
        
    </div>
</div>
    
</main>

<!--Add footer and extra scripting-->
<?php include dirname(__FILE__) . '/../common/footer.php'; ?>
</body>

</html>