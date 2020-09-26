<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - rev</title>
</head>
<body>
    
    <?php

        $ver = PHP_VERSION;
        $name = "Jakub";
        $a = "A"; $b = "B"; $c = "C";
        $potega = 2**5;

        echo "Imie: ".$name."<br>", "Wersja PHP: ".$ver, "<br>", "2 do 5 wynosi: ".$potega, "<br>", $a.$b.$c."<br>";

        $bin = 0b011; //3
        $oct = 011; //9
        $hex = 0x11; //17

        $x = 1;
        $y = 1.01;

        if($x == $y){
            echo "Czy równe?: TAK";
        }else{
            echo "Czy równe?: NIE";
        }

        echo "<br><br>Nazwa zmiennej \$x, wartość zmiennej x: $x";

        $heredoc = <<<L
            Dualizm
            Korpuskularno
            Falowy
            123
        L;

        $nowdoc = <<<'L'
            tekst
            1
        L;

        echo "<br><br>Heredoc: ".$heredoc, "<br>Nowdoc: ".$nowdoc;

        print "<br>Typ nowdoc'a ".gettype($nowdoc);

        $num1 = 20;
        $num2 = 30;
        
        // -1 Jeżeli liczba po prawej jest większa, 0 dla równych, 1 gdy po prawej większa
        echo "<br><br>Operator spaceship: "."<strong>".($num1 <=> $num2)."</strong>";

        echo "<br><br>Maksymalny rozmiar inta: ".PHP_INT_SIZE."<br>Maksymalna wartość inta: ".PHP_INT_MAX;

        echo "<br><br>Rzutowanie: ".(int)1.11111;

        class Person{
            private $name;
            private $surName;
            private $age;

            public function printer(){
                echo "Imie: ", $this->$name, "<br>Nazwisko: ", $this->$surName, "<br>Wiek: ", $this->$age;
            }
        }

        //dostępne typy - bool, int, float, string, array, object, unset
        $isTrue = true;
        $i = 1;
        $floa = 1.1111;
        $text = "Stringgg....";
        $tab = [1, 2, 3, 4, 5, 6];
        $obj = new Person();

        $cos = 20;

        echo "<br>Czy jeden jest intem: ".is_int($cos)."(TAK)";

        //Undefined variable
        $ignoreee;
        echo $ignoreee;

        //Nothing
        $ignoreee;
        echo "Nic: ".@$ignoreee;
    ?>

</body>
</html>