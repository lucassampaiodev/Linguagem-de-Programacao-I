<html>

<head>
    <meta charset="utf-8">
    <title>Métodos Getter, Setter e Construtor</title>
</head>

<body>
    <pre><?php
        require_once 'Caneta.php';
        /*
        $c1 = new Caneta;
        $c1->setModelo("BIC");
        $c1->setPonta(0.5);
        //Chave no método dentro do echo para o servidor interpretar o parentese dentro das aspas
        echo "Eu tenho uma caneta modelo {$c1->getModelo()} de ponta {$c1->getPonta()}";
        echo "<br><br>"; //Quebra de linha
        print_r($c1);
        */
        $c1 = new Caneta("BIC", 0.7, "Azul");
        $c2 = new Caneta("Compactor", 0.5, "Verde");

        print_r($c1);
        print_r($c2);



        
        ?>
        </pre>
</body>

</html>