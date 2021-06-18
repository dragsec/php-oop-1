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
    echo "Titolo: {$this->titolo} <br>
        Anno: {$this->anno} <br>
        Regista: {$this->regista} <br>
        Lingua: {$this->lingua} <br>
        Genere: {$this->genere} <br> <br>";
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

    $test = new Movie('Requiem for a Dream', '2000', 'Darren Aronofsky', 'Italiano', 'Drammatico');
    $test->__stampa();

    $test2 = new Movie('Grand Budapest Hotel', '2014', 'Wes Anderson', 'Italiano', 'Commedia');
    $test2->__stampa();

    ?>
</body>
</html>