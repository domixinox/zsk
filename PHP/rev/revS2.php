<?php

    // If include_once before include then 2imports
    include "./import.php";
    include_once "./import.php";

    require "./import2.php";
    require_once "./import2.php";

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

    $wrap = wordwrap($lorem, 10, "<hr>");

    echo $wrap;

    echo "<br>", var_dump($lorem), "<br>"

?>