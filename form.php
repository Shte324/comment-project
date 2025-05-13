<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Комментарии</title>
    <link href="styles-comment-form.css" rel="stylesheet">

</head>

<body>

    <div class="comment-form">
        <h2>Форма Комментария</h2>
        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="author">Имя:</label>
                <input type="text" id="author" name="author" placeholder="Ваше имя" required>
            </div>

            <div class="form-group">
                <label for="comment">Сообщение:</label>
                <textarea id="comment" name="comment" placeholder="Ваш комментарий" required></textarea>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
<!-- ------------------------------------------------------------------- -->
    <div class="all-comments">
        <h2>Все комментарии:</h2>
        <pre><?= file_get_contents('comments.txt') ?></pre>
    </div>
</body>
 
</html>