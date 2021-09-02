<div class="news">
    <h3><?php echo htmlspecialchars($article['username'])." ".htmlspecialchars($article['date_entered'])?></h3>
    <p class="news p"><?php echo htmlspecialchars($article['content'])?><br> 
    <?php
        if(!isset($showAtag)) {
    ?>
            <a href="comments.php?id=<?php echo htmlspecialchars($article["id"])?>">Comments</a></p>
    <?php
        }
    ?>
</div>

