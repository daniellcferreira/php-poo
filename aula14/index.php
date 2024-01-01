<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Video.php';
            require_once 'Gafanhoto.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 45, "F", "Creuzita");

            print_r($v);
            print_r($g);


        ?>
    </pre>   
</body>
</html>