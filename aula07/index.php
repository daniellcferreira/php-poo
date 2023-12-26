<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Lutador.php';
            require_once 'Lutar.php';
            
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 3, 2);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 1, 2);
            $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 2, 0);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 3, 4);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 4, 2);
        
            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[4], $l[5]);
            $UEC01->lutar();

            
        ?>
    </pre>   
</body>
</html>