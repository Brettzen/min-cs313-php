<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <h1>Scripture Resources</h1>

<?php
        foreach ($db->query("SELECT * FROM scriptures WHERE lower(book) = lower('" . $book . "')") as $row)
        {
          echo '<p><a href="index.php?action=week4Details&id=' . $row['id'] . '"><b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b></a></p>';
        }
    ?>
    
    <button type="button" class="btn btn-info return-btn">
        <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
    </button>
</body>
</html>