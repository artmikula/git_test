<?php
$result = $_POST['username'];
$result2 = $_POST['commentText'];
$result3 = $_POST['articleid'];

if(isset($_POST["username"]) AND isset($_POST["commentText"])) {
    include('connectblog.php');     
    $req = $db->prepare("INSERT INTO comments(id_article, username, content) VALUES(:id_article, :username, :content)");
    $req->execute(array(
        'username' => $result,
        'content' => $result2,
        'id_article' => $result3,
    ));
    $req->closeCursor();
};

header("Location: comments.php?page=0&id=$result3");
?>