<!--This week's assignment was driven by David Durrant-->
<html>
    <?php include dirname(__FILE__) . '/../../../../common/head.php'; ?> <!-- Added to make work on my server -->
    <body>
        <?php 
            $major = Array("cs" => "Computer Science",
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
        ?>
        <form action="index.php" method="post">
            Name: <input name="name" type="text"><br>
            Email: <input name="email" type="email"><br>
            Major: <?php foreach($major as $key => $item){
                        echo "<input name='major' type='radio' value='$key'>$item<br>";
                    } ?>
            Comments: <textarea name="comments"></textarea><br>
            Continents: <?php foreach ($continents as $key => $item) {
                            echo "<input name='continents[]' type='checkbox' value='$key'>$item<br>";
                        } ?>
            <input type="submit">
            <input type="hidden" name="action" value="team03Submit"> <!-- Added to make work on my server -->
        </form>
        
        <!-- Added return button -->
        <button type="button" class="btn btn-info return-btn">
            <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
        </button>
    </body>
</html>