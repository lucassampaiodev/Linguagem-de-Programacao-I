<html>

<head>
    <meta charset=utf-8>
    <title>Estudos de PHP</title>
</head>

<body>
    <pre>//TAG PARA FORMATAR O print_r
    <?php
    require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        //$c1->carga = "Cheia";
        //$c1->ponta = 0.5; COMENTADO, POIS O ATRIBUTO É PRIVADO
        //var_dump($c1); //Mostra o estado atual de c1
        //$c1->tampada = false;
        $c1->rabiscar(); //Chamando o método Rabiscar
        print_r($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2->cor = "Verde";
        //$c2->ponta = 0.7;
        //$c2->carga = 50;
        //$c2->tampar(); COMENTADO, POIS O MÉTODO FOI TORNADO PRIVADO
        print_r($c2); //MOSTRA O RESULTADO ATUAL DE c2
?>
</pre>
</body>


</html>