<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        body{
            text-align: center;
        }
        .c1,.c2,.c3{
            border-radius: 15px 50px;
            background: #C39BD3;
            padding: 20px;
            width: 200px;
            height: 120px;
            color: white;
            display: inline-block;
            font-size: 100px;
            float: center;
        }
        .para{
            font-size: 100px;
            color: #C39BD3;
        }
    </style>
</head>
<body>
    <h1>DIGITAL CLOCK</h1>
    <meta http-equiv="refresh" content="1">
    <div>
        <?php
            date_default_timezone_set("Asia/Kolkata");
            echo "<div class=\"c1\">".date("h")."</div><span class=\"para\">:</span><div class=\"c2\">".date("i")."</div> <span class=\"para\">:</span> <div class=\"c3\">".date("s")."</div>";
        ?>
    </div>
</body>
</html>
