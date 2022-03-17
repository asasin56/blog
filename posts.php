<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="posts-style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Posts</title>
</head>
<header class="header">
    <ul class="header-ul">
        <li><a href="index.php" class="logo">asasin56</a><li>
        <li><a href="posts.php" class="Categories">Posts</a></li>
        <li><a class="Categories"  href="not-done-yet.php">Articles</a></li>
        <li ><a href="not-done-yet.php" class="Categories">Games</a></li>
        <li><a href="not-done-yet.php" class="Categories">About</a> </li>
    </ul>
</header>
<body>
<ul>
<?php

         $conection = mysqli_connect('127.0.0.1', 'root', '', 'blog'); 
         if($conection == false)
         {
            echo "sdfgfsd";
            echo mysqli_connect_eror();
            exit();
         }

        
       $result = mysqli_query($conection, "SELECT * FROM `posts`"); 

  while ($record = mysqli_fetch_assoc($result)) {
    echo '<li class="post"> <h1 class="title">' . $record['title'] .
    '</h1> <p class="text">' . $record['text'] . ' </p> </li> ';
    
  }
?>
 

    </ul>

</body>
</html>