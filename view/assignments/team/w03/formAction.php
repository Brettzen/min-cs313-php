<!--This week's assignment was driven by David Durrant-->
<html>
    <?php include dirname(__FILE__) . '/../../../../common/head.php'; ?> <!-- Added to make work on my server -->
    <body>
        <?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $major = $_POST['major'];
        $comments = $_POST['comments'];
            $majorValues = Array("cs" => "Computer Science",
                          "wdd" => "Web Design and Development",
                          "cit" => "Computer information Technology",
                          "ce" => "Computer Engineering");
        
            $continents = Array("na" => "North America",
                          "sa" => "South America",
                          "eu" => "Europe",
                          "as" => "Asia",
                          "au" => "Australia",
                          "af" => "Africa",
                          "an" => "Antarctica");
        
        echo "Name: $name
            <br>Email: <a href='mailto:$email'> $email</a>
            <br>Major: $majorValues[$major]
            <br>Comments: $comments
            <br>Continents:<br>";
        foreach ($_POST['continents'] as $item) {
            echo "$continents[$item]<br>";
        }
        ?>
        
        <!-- Added return button -->
        <button type="button" class="btn btn-info return-btn">
            <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
        </button>
    </body>
</html>