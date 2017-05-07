<?php
    if (file_exists('./upload'))
    foreach (glob('./upload/*') as $file)
    unlink($file); 

    echo 'Файлы из каталога успешно удалены'; 
?>

