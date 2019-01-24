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
                    <a class="list-group-item list-group-item-action" id='one'>Elemental Taekwondo</a>
                    <a class="list-group-item list-group-item-action" id='two'>Sunshine Roofing Company</a>
                    <a class="list-group-item list-group-item-action" id='three'>Home-Grown</a>
                    <a class="list-group-item list-group-item-action" id='four'>Band of Others</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
          <h3 class='nav-link item-heading'>Tricking</h3>
            <div class="item-menu">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" id='five'>What is tricking?</a>
                        <a class="list-group-item list-group-item-action" id='six'>2008 Sampler</a>
                        <a class="list-group-item list-group-item-action" id='seven'>Yamada gets the Butterfly Twist</a>
                    </div>
            </div>
        </li>
        <li class="nav-item">
          <h3 class='nav-link item-heading'>Gaming</h3>
            <div class="item-menu">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" id='eight'>Steam Profile</a>
                        <a class="list-group-item list-group-item-action" id='nine'>Speedrunning Mega Man Anniversary Collection</a>
                        <a class="list-group-item list-group-item-action" id='ten'>Final Fantasy IV Challenge: Auto-Battle Geryon</a>
                        <!--<a href="#" class="list-group-item list-group-item-action" id='eleven'>Zelda: A Link to the Past - Speedrun</a>-->
                    </div>
            </div>
        </li>
    </ul>
    </div>
    <div class='col-9'>
        <div class="intro">
            <h2>Welcome!</h2>
            <p class="text-center">Use the menu on the left to navigate.</p>
        </div>
        <div class="item-desc one">
            <h4>Elemental Taekwondo</h4>
            <img src='img/2666.jpg' class='img-fluid' alt='Elemental Taekwondo'>
            <p>Elemental Taekwondo is a martial arts school that I founded back in 2010. Initially it started out as a martial arts after-school program for Magna Elementary in Magna, UT. Through multiple transitions we now offer full Taekwondo classes to all ages in Shelley, ID. We also manage the BYU-I Taekwondo club and hold belt promotional tests at the end of every semester.</p>
            <p>The Elemental Taekwondo website, <a href='http://www.elementaltkd.com'>elementaltkd.com</a> was made using PHP, MySQL, JavaScript, and jQuery. It gives information about the school, has a small shop integrated with PayPal, a gallery, and a student dashboard that existing students can use to view their current belt's curriculum. There are currently around 40 registered students on the website.</p>
        </div>
        
        <div class="item-desc two">
            <h3>Sunshine Roofing Company Website</h3>
            <img src="img/sunshineroofingSampleThumb.png" class='img-fluid' alt="Sunshine Roof Utah">
            <p>Sunshine Roofing Company is a local roofing construction and repair company in Roosevelt, UT. They serve customers' commercial and residential roofing needs around the Uintah Basin and Bear Lake areas.</p>
            <p>The website, <a href="http://www.sunshineroofutah.com">sunshineroofutah.com</a> was built using JavaScript and jQuery. The owner of Sunshine Roofing Company chose the layout color scheme and structure to create a website design and layout that was appealing to both him and customers. The site consists of 6 pages, plus a PHP form for customers to request quotes. A personalized lightbox was created for the Gallery pages and the Products &amp; Services page. I also utilized jQuery to replace the navigation bar with a simple pull-down menu for smaller screens. The website utilizes responsive-design and all jQuery degrades cleanly for users who have JavaScript disabled. A simple PHP email form was also created.</p>
            <p>The website is currently undergoing a design overhaul. When completed, the site will be a single-page application built with Foundation and SCSS.</p>
        </div>
        
        <div class='item-desc three'>
            <h4>"Home-Grown" Web Application</h4>
            <img src="img/home-grownSample.png" class='img-fluid' alt="Home-Grown">
            <p>"Home-Grown" is a home-schooling application for families to maintain their children's home-schooling lessons and activities in a centralized location. Using the website, users can upload and view lessons, schedules, videos, and other media. The application will interface with the info in the database that was sent from the website to pull the lessons to their handheld devices, thus creating a different user experience for every user. This is all done to make the home-schooling process more effective and easier to manage.</p>
            <p>This is a collaboration project I was working on with a close friend. We're utilizing a GitHub private repository to share code. The website is being created with HTML and CSS, with use of angular.js framework, javaScript and jQuery.</p>
        </div>
        
        <div class="item-desc four">
            <h4>Band of Others</h4>
            <img src="img/bandOfOthers1.png" class='img-fluid' alt="Band of Others">
            <p class="text-center lead"><a href="http://blog.ninjabee.com/2014/02/the-buzz-global-game-jam-2014.html" target="_blank">http://blog.ninjabee.com/2014/02/the-buzz-global-game-jam-2014.html</a></p>
            <p>I had the opportunity to work alongside friends at Wahoo Studios (also known as NinjaBee) to create a game for this year's Global Game Jam. Following the theme, "We don't see things as they are, we see them as we are", we set to work brainstorming, designing and developing our game. Our end result was a guessing game titled "Band of Others". In Band of Others, you have ten different characters to select from. After selecting a character, you are then directed to a screen with a covered image. Using stamps and clues to reveal fragments of the image, you must guess what the image is. Because of the theme, the answer may be called something different depending on what character is "seeing" the object.</p>
            <p>Band of Others was created using HTML5 and JavaScript, using the rat.js game engine and TortoiseSVN. My main tasks were finding all stock photos to ensure we stayed compliant with creative common license law, and designing/coding the "Results" screen.</p>
            <p class="lead"><a href="http://wahoo.com/play/jam/" target="_blank">You can play it here!</a></p>    
        </div>
        
        <div class="item-desc five">
            <h4>What is Tricking?</h4>
            <img src="img/flashgainer.gif" class='img-fluid' alt="That's me!">
            <p>In basic terms, tricking is a dynamic form of kicks, flips, twists, and breakdancing moves used to perform various acrobatic feats. Tricking is used mainly to push your body to new heights (pun intended) while also building dynamic strength in a fun way. It's also used to show off.</p>
            <p>Tricking is normally comprised of martial arts, gymnastics, and breakdancing. Most trickers come from one of these backgrounds and it shows in their tricks. I personally come from a martial arts background, so my tricks are much more pronounced with dynamic kicks and powerful twisting moves. My biggest weakness is breakdancing tricks, as I have little experience with it.</p>
            <p>Want to get into tricking? Follow the counsel of the famous tricker known as Jujimufu: "Start the way myself and thousands of others have done it. Fire up a tricking video. Get pumped up. Run outside and start trying to mimic what you just watched."</p>
        </div>
        
        <div class="item-desc six">
            <h4>2008 Sampler</h4>
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FMinnowMaginnow%2Fvideos%2F41822193498%2F&show_text=0&width=560" width="560" height="373" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            <p>This was a progression sampler from when I first entered the tricking world to three years later. My best footage was taken a few years after this, so it isn't included in this video.</p>
        </div>
        
        <div class="item-desc seven">
            <h4>Yamada gets the Butterfly Twist</h4>
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FBYUITKD%2Fvideos%2F340386506690119%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            <p>This is a video of Nelson Yamada from the BYU-I Taekwondo Club landing some of his very first Butterfly Twists.</p>
        </div>
        
        <div class="item-desc eight">
            <h4>Steam Profile</h4>
            <img src="img/steamprofile.png" class='img-fluid' alt="Steam Profile">
            <p>I have always been a fan of video games. As a young lad of 5 I remember my mother, father, and siblings gathering around the NES on Friday nights and playing games such as Mario Bros. 3, Castlevania, and Punch-Out!!!. As I grew up, my love of games became more refined. I have found myself enjoying RPG's and Action-Adventures more and more.</p>
            <p>In recent years, I have gained an almost obsessive nature to completing achievements. As such, I spend most of my very limited game time nowadays playing on Steam collecting achievements from old games I grew up playing (as well as new ones!)</p>
            <p>If you'd like to view my Steam profile (or become friends on Steam, yay!), you can see it here: <a href='https://steamcommunity.com/id/Brettz/'>https://steamcommunity.com/id/Brettz/</a></p>
        </div>
        
        <div class="item-desc nine">
            <h4>Speedrunning Mega Man Anniversary Collection</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oyVFIgWt-CA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>This video is my speedrunning attempt of a special stage on the Mega Man Anniversary Collection. Pardon the horrid video quality, it was filmed on a phone.</p>
        </div>
        
        <div class="item-desc ten">
            <h4>Final Fantasy IV Challenge: Auto-Battle Geryon</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/c0cPvSyU6-I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>While completing all of the achievements for the "HD" version of Final Fantasy IV on Steam, I decided I wanted to try defeating one of the ultra-bosses, Geryon, using nothing but Auto-Battle. As Final Fantasy IV's auto-battle is customizable, it wasn't really that difficult, although still fun.</p>
        </div>
        
<!--        <div class="item-desc eleven">
            <h4>Zelda: A Link to the Past - Speedrun</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/c0cPvSyU6-I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>While completing all of the achievements for the "HD" version of Final Fantasy IV on Steam, I decided I wanted to try defeating one of the ultra-bosses, Geryon, using nothing but Auto-Battle. As Final Fantasy IV's auto-battle is customizable, it wasn't really that difficult, although still fun.</p>
        </div>-->
        
    </div>
</div>
    
</main>

<!--Add footer and extra scripting-->
<?php include dirname(__FILE__) . '/../common/footer.php'; ?>
</body>

</html>