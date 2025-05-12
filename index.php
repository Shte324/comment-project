<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $author  = htmlspecialchars($_POST['author'] ?? '');
    $comment = htmlspecialchars($_POST['comment']);

    if(!empty($author) && !empty($comment)){
        file_put_contents('comments.txt', "$author: $comment  \n -----------------\n", FILE_APPEND);
        echo '<h1>комментарий сохранен!</h1>';
        echo"<br>";
        echo '<a href="form.php">Написать еще</a>';
    }else{
        echo "Необходимо заполнить все поля";
    }
}