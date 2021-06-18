<?php
    
class Movie {
    public $titolo;
    public $anno;
    public $regista;
    public $lingua;
    public $genere;


    function __construct($titolo, $anno, $regista, $lingua, $genere) {
    $this->titolo = $titolo;
    $this->anno = $anno;
    $this->regista = $regista;
    $this->lingua = $lingua;
    $this->genere = $genere;
    }

    function __stampa() {
    echo "Titolo: " . $this->titolo . "<br>";
    echo "Anno: " . $this->anno . "<br>";
    echo "Regista: " . $this->regista . "<br>";
    echo "Lingua: " . $this->lingua . "<br>";
    echo "Genere: " . $this->genere . "<br>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    <?php

    $test = new Movie('test', 'test', 'test', 'test', 'test');
    $test->__stampa();

    ?>
</body>
</html>