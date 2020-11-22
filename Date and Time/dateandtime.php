<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        body{
            text-align: center;
        }
        div{
        margin: auto;
            font-size: 30px;
            background: #5D6D7E;
            border-radius: 15px 50px;
            padding: 20px;
            width: 500px;
            height: 280px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>DIGITAL CLOCK</h1>
    <meta http-equiv="refresh" content="1">
    <div>
        <?php
            date_default_timezone_set("Asia/Kolkata");
            echo "<div>";
            echo date("d / m / Y")."<br/>";
            echo date("d - m - Y")."<br/>";
            echo date("d . m . Y")."<br/>";
            echo date("d . M . Y / D")."<br/>";
            echo date("h : i : s")."<br/>";
            echo date("M , d , Y  h : i : s A")."<br/>";
            echo date("h : i a")."<br/>";
            echo "</div>";
        ?>
    </div>
</body>
</html>
