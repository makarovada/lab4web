<?php
$array = array('Хип-Хоп', 'Хаус', 'Локинг', 'Джазз-Фанк');
?>
<?php
include 'header.html';
?>
<!doctype html>
<html>

<body>   
    <main>
        <div class="text">
        <h1>Студия танцев "Вернисаж"</h1>
            <p>Вернисаж - проект от создателей шоу "К звездам". Мы обучаем детей и взрослых современным направлениям танцев:<br><br>
            <?php foreach ($array as $n => $row) {
                echo  ' ' .($n + 1) . '.' .' '. $row . "<br>\r\n";
            } ?>
            </p></div>
        
        <div class="image-container">
        <?php echo '<img src="dance'.(date('s')% 2 + 1).'.jpg" alt="My photo"'?>
        </div>
        
        
    </main>
<footer>
    <div style="text-align:left">Сформировано <?=date('d.m.Y в H-i:s')?></div>
</footer>
</body>
 
</html>