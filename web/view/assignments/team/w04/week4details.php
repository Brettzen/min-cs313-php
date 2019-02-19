<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <h1>Scripture Details</h1>

    <?php
        foreach ($db->query("SELECT * FROM scriptures WHERE id = " . $id) as $row)
        {
          echo '<p><b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> ' . $row['content'] . '</p>';
        }
    ?>

    <button type="button" class="btn btn-info return-btn">
        <a href='index.php?action=assignments' class="btn-link">Return to assignments?</a>
    </button>
</body>
</html>