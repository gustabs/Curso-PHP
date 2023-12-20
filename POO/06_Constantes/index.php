<?php 

    class Humano {

        public $Nome;
        public const Olhos = 2;
        public const Bracos = 2;
        public const Pernas = 2;
        public const Cabeca = 1;

        function NomeUser($Nome)
        {
            return $this->Nome = $Nome;
        }

        function CorpoHumano()
        {
            echo self::Bracos . "<br>"; // Ao invez de usar o "$this", usamos o "self" para referenciar uma constante
            echo self::Olhos . "<br>";
            echo self::Pernas . "<br>";
            echo self::Cabeca . "<br>";
        }
    }


    $Gustavo = new Humano;

    echo $Gustavo::Bracos . "<br>"; // Ao invez de usar ->, nas constantes usamos ::
    echo $Gustavo::Cabeca . "<br>"; // Ao invez de usar ->, nas constantes usamos ::
    echo $Gustavo::Olhos . "<br>"; // Ao invez de usar ->, nas constantes usamos ::
    echo $Gustavo::Pernas . "<br>"; // Ao invez de usar ->, nas constantes usamos ::

    echo "<br>";
    echo $Gustavo->CorpoHumano();
?>

<html lang="en">
    <p><?= $Gustavo->NomeUser("Gustavo")?> Tem <?= $Gustavo::Bracos?> braços</p>
    <p><?= $Gustavo->NomeUser("Gustavo")?> Tem <?= $Gustavo::Cabeca?> cabeça</p>
    <p><?= $Gustavo->NomeUser("Gustavo")?> Tem <?= $Gustavo::Olhos?> olhos</p>
    <p><?= $Gustavo->NomeUser("Gustavo")?> Tem <?= $Gustavo::Pernas?> pernas</p>
</html>