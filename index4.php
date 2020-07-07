    <?php

        $text = "Hello world!"; // creates a variable name text

        echo strlen($text)."<br>"; // outputs 12
        echo str_word_count($text)."<br>"; # outputs 2
        echo strrev($text)."<br>"; // outputs !dlrow olleH
        echo strpos($text, "world")."<br>"; // outputs 6
        echo str_replace("world", "Salum", $text)."<br>"; // outputs Hello Salum!
        
    ?>