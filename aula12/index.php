<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a= new Ave();

            
            
        ?>
    </pre>
</body>
</html>