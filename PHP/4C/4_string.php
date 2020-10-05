<?php
    $text = <<<L
        zsk - Zespół
        Szkół
        Komunikacji<br>
    L;


    echo $text;
    echo nl2br($text);

    $name = "JaNuSz";

    //to lower and upper case
    echo "<br>To lower: ";
    echo strtolower($name), "<br>";

    echo "To upper: ";
    echo strtoupper($name);

    //only first letter
    $name2 = "<br><br>januSz KoWaLsKi<br>";
    echo ucfirst($name2);

    echo "<br><br>Uppercase words: ", ucwords("janusz");

    $name3 = <<<T
        janusz
    T;

    echo "<br><br>Heredoc uppercase: ", ucfirst($name3);

    // Lorem ipsum
    $lorem = <<<LOREM
    <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Distinctio tempora molestiae assumenda adipisci eveniet non, ex veritatis,
         at similique quaerat a sit enim autem recusandae aliquid saepe ipsum reiciendis magnam.
    LOREM;

    $col = wordwrap($lorem, 40, "<hr>");
    echo $col;

    //clear buffer

    ob_clean();

    //del white spaces
?>

