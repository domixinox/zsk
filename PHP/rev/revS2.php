<?php

    // If include_once before include then 2imports
    include "./import.php";
    include_once "./import.php";

    require "./import2.php";
    require_once "./import2.php";


    // Local var in "import.php" file
    echo "<br><br>", $local;

    echo "<br><br>", __FILE__;

    echo "<br><br><br><br>";

    echo ucfirst("jAKUB"), "<br><br>", strtolower("STRING TO LOWER"), "<br><br>", strtoupper("string to upper"), "<br><br>";

    // Insert line breaks before all newlines
    $doc = <<<L
        Hello World
        Foo
        Bar\n\n
    L;

    echo nl2br($doc);
    echo nl2br("Foo bar is \n bar\n\n\n");

    $lorem = <<< L1
        Quas veniam perferendis magnam cupiditate dicta porro possimus, vero obcaecati beatae quia fugiat quos animi dolorum.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias vel est fugit totam explicabo?
    L1;

    // Each first char of word is Upper Case
    echo ucwords($lorem);

    //$wrap = wordwrap($lorem, 10, "<hr>");

    //echo $wrap;

    echo "<br>", var_dump($lorem), "<br>";

    $name = "Jakub";
    $name2 = "Żółć";
    echo "<br>String length: ", strlen($name);
    echo "<br>String length(2bits per char): ", strlen($name2);
    echo "<br>String length(with encoding): ", mb_strlen($name2);

    // Trimming
    $test = "                                                TEST";
    echo "<br>Length with spaces: ", strlen($test);
    echo "<br>Length with trimming: ", strlen(trim($test));

    // 
    $address = "City: Poznan, Add: 62-001, Phone: 555-666-777";
    echo "<br>First occurrence: ", strstr($address, "Phone");


    $domain = "ZSK@gmail.com";
    echo "<br>Domain: ", strstr($domain, '@');
    echo "<br>Domain name only: ", substr(strstr($domain, '@'), 1);

    $replace = str_replace('%imie%', "Jakub", "Mam na imie %imie%");
    echo "<br>", $replace;

?>