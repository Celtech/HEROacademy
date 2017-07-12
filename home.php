<?php
    $posts = $db->query("SELECT * FROM posts ORDER BY id DESC");
    while ($row = mysqli_fetch_object($posts)) {
        echo "<section>";
        echo "<h1>".$row->title."</h1>";
        echo "<p>".$row->content."</p>";
        echo "<h2>Posted by ". ucfirst($row->author)." on " . explode(" ",$row->date)[0]."</h2>";
        echo "</section>";
    }
?>
