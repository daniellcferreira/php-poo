<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");

            $l[0] = new Livro("PHP Basico", "Jose Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avancado", "Ana Paula", 800, $p[1]);

            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->avancarPag();
            $l[0]->detalhes();

            $l[1]->detalhes();
        ?>

    </pre>
</body>
</html>