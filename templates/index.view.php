<?php

    /*echo '<pre>';
    var_dump($guestBook);
    echo '</pre>';
    die;*/
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1 mb-4" style="text-align: center;">Гостевая книга</h1>
        <div class="row col-md-12 mb-4">
            <ul class="guestbook__list list-group" style="width: 100%; justify-content: center; text-align: center;">
                <?php foreach ($guestBook->getRecords() as $record): ?>
                <li class="list-group-item"><?php echo $record->getMessage(); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="row col-md-12 mb-4" style="justify-content: center; text-align: center;">
            <form action="../append.php" method="get">
                <div class="form-group">
                    <label for="message">Новая запись</label>
                    <textarea class="form-control" name="message" idrows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</body>
</html>