<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Загрузка файла на сервер</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="upload.php" method="post"> <!--для сервера-->
            <br>
            <input type="hidden" name="MAX_FILE_SIZE" value="350000000" /><!--максимально допустимый размер файла для загрузки в байтах-->
            Выбрать файл для загрузки: <input name="uploaded_file" type="file" /><!--файл для загрузки-->
            <br><br>
            <input type="submit" value="Отправить" /><!--кнопка загрузки-->
        </form>
        <form enctype="multipart/form-data" action="delete.php" method="post"> <!--для сервера-->
           <input type="submit" value="Удалить все файлы" /><!--кнопка загрузки-->
        </form>
    </body>
</html>
