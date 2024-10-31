<?php
class Animal{
    public function fazerSom(){
        echo "Barulho Genérico<br>";
    }
}
class Cachorro extends Animal{
    public function fazerSom(){
        echo "Auau<br>";
    }
}
class Gato extends Animal{
    public function fazerSom(){
        echo "Miau";
    }
}

$dog = new Cachorro();
$dog->fazerSom();

$cat = new Gato();
$cat->fazerSom();
?>