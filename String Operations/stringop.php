<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
    <style>
        body{
            text-align: center;
        }
        .box1, .box2, .box3, .box4, .box5, .box6, .box7, .box8 {
            height: 58px;
            width: 400px;
            margin: auto;
        }
        .box1{
            background-color: #D5D8DC;
        }
        .box2{
            background-color: #FADBD8;
        }
        .box3{
            background-color: #FAE5D3;
        }
        .box4{
            background-color: #FCF3CF;
        }
        .box5{
            background-color: #D5F5E3;
        }
        .box6{
            background-color: #D6EAF8;
        }
        .box7{
            background-color: #D4E6F1;
        }
        .box8{
            background-color: #EBDEF0;
        }
    </style>
</head>
<body>
    <h1>STRING OPERATIONS</h1>
    <div>
        <?php
            $file = "stringop.txt";
            $word = strval(file_get_contents($file));
            $len = strlen($word);
            $wordc = str_word_count($word);
            $rev = strrev($word);
            $pos = strpos($word, "World");
            $rep = str_replace("World", "Sherly Maam :)", $word);
            $lower = strtolower($word);
            $upper = strtoupper($word);
            echo "<div class=\"box1\"><h4>Orginal String</h4><p>" . $word . "</p>";
            echo "<div class=\"box2\"><h4>Length of String</h4><p>" . $len . "</p>";
            echo "<div class=\"box3\"><h4>Number of Words in String</h4><p>" . $wordc . "</p>";
            echo "<div class=\"box4\"><h4>Reversed String</h4><p>" . $rev . "</p>";
            echo "<div class=\"box5\"><h4>Position of String</h4><p>" . $pos . "</p>";
            echo "<div class=\"box6\"><h4>Replaced String</h4><p>" . $rep . "</p>";
            echo "<div class=\"box7\"><h4>Lowercase String</h4><p>" . $lower . "</p>";
            echo "<div class=\"box8\"><h4>Uppercase String</h4><p>" . $upper . "</p>";
            file_put_contents($file, $len . "\n" . $wordc . "\n" . $rev . "\n" . $pos . "\n" . $rep . "\n" . $lower . "\n" . $upper);
        ?>
    </div>
</body>
</html>
