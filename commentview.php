<?php //not needed file
    echo "<h1>Comments</h1>";
    include ('connectblog.php');
    $totalcount = $_GET["page"];
    $response = $db->query("SELECT username, date_entered, content FROM comments WHERE id_article=$articleNb ORDER BY id DESC LIMIT $totalcount,5");
    $comments = $response->fetchAll(PDO::FETCH_ASSOC);
    foreach ($comments as $article)
    {
        include('commentdisplay.php');
    }
    $req = $db->query("SELECT COUNT(*) AS commentsTotal FROM comments WHERE id_article=$articleNb");
    $messages = $req->fetchAll(PDO::FETCH_ASSOC);
    foreach($messages as $data) {
        $number = $data['commentsTotal'];
    }
    $response->closeCursor();
    $pagenumber=1;
    for($i=0; $i<$number; $i+=5){
        echo "<a href='comments.php?page=$i&id=$articleNb'>$pagenumber</a>";
        $pagenumber+=1;    
    }  
?>