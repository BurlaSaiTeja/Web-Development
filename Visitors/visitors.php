<!DOCTYPE html>
<html>
<head>
    <title>Visitors</title>
    <style>
        body{
            text-align: center;
        }
        .boxed {
            height: 85px;
            width: 400px;
            margin: auto;
            background-color: #D5D8DC;
        }
    </style>
</head>
<body>
    <h1>VISITORS</h1>
    <div class="boxed">
        <?php
            $file = "visitors.txt";
            $count = strval(file_get_contents($file));
            $count = (int) $count;
            file_put_contents($file, $count + 1);
            echo "<h3><br/>Visitor Count <br/> ".$count."</h3>";
        ?>
    </div>
</body>
</html>
