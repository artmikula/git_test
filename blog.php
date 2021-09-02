<?php
    try { ///connectblog
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Error : ' . $e->getmessage());
    }

    $response = $db->query('SELECT id, title, content, date_entered FROM articles ORDER BY date_entered DESC LIMIT 0,5');
    $articles = $response->fetchAll(PDO::FETCH_ASSOC);  //only when reusing make new file
    foreach ($articles as $article) {  
        include('articleview.php');
    };
    $response->closeCursor();
?>