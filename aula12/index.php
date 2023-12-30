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
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'GoldFIsh.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a= new Ave();

            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();

            $m->setPeso(33.5);
            $m->locomever();
            $a->locomever();
            $p->locomever();
            $c->locomever();
            $k->locomever();
            $t->locomever();
            

            
            
        ?>
    </pre>
</body>
</html>