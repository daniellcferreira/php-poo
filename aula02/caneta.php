<?php 
    class caneta {
        var $modelo;
        var $ponta;
        var $cor;
        var $carga;
        var $tampada;

        function rabiscar () {
            if ($this->tampada == true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        function tampar () {
            $this->tampada = true;
        }

        function destampar () {
            $this->tampada = false;
        }
    }
?>