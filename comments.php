<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div id='mainDiv'>
    <a href="index.php">GO BACK</a>
    <?php
        include('connectblog.php');
        $articleNb = $_GET["id"];
        $response = $db->query("SELECT * FROM articles WHERE id=$articleNb");
        $article = $response->fetch(PDO::FETCH_ASSOC);
        $showAtag = false;
        $blogcount = 0;
        if (empty($article)) {
            echo "<br><br>Article not found";
        } else {
            include('articleview.php');
            include('commentview.php');
            include('form.php');
        };
    ?>
    </div>
</body>
</html>