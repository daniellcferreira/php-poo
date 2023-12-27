<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - POO</title>
</head>
<body>
    <pre>
        <?php 
            
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Maira");
            $p3->setNome("Fabiana");

            $p1->setIdade(25);
            $p2->setIdade(35);
            $p3->setIdade(21);
            $p4->setIdade(46);
        ?>
    </pre>   
</body>
</html>