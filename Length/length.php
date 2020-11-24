<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            color: #566573;
        }
        .content{
            text-align: center;
        }
        label, input{
            margin-bottom: 10px;
        }
        form{
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="jumbotron content">
        <h1>LENGTH CONVERTER</h1>
    </div>
    <div class="content">
        <form method="POST">
            <div class="row">
                <div class="col-md-1"></div>

                <?php
            if (isset($_POST["calculate"])) {
                if(!empty($_POST['len1'])) {
                    $len1 = $_POST["len1"];
                }
                if(!empty($_POST['len2'])) {
                    $len2 = $_POST["len2"];
                }
                $num = $_POST["num"];
                
                $res = 0;

                if (is_numeric($num) && $len1=='kilometer1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num);
                            break;
                        case "meter2":
                            $res = ($num * 1000);
                            break;
                        case "centimeter2":
                            $res = ($num * 100000);
                            break;
                        case "millimeter2":
                            $res = ($num * 1000000);
                            break;
                        case "micrometer2":
                            $res = ($num * 1000000000);
                            break;
                        case "nanometer2":
                            $res = ($num * 1000000000000);
                            break;
                        case "mile2":
                            $res = ($num / 1.609);
                            break;
                        case "yard2":
                            $res = ($num * 1094);
                            break;
                        case "foot2":
                            $res = ($num * 3281);
                            break;
                        case "inch2":
                            $res = ($num * 39370);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1.852);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='meter1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 1000);
                            break;
                        case "meter2":
                            $res = ($num);
                            break;
                        case "centimeter2":
                            $res = ($num * 100);
                            break;
                        case "millimeter2":
                            $res = ($num * 1000);
                            break;
                        case "micrometer2":
                            $res = ($num * 1000000);
                            break;
                        case "nanometer2":
                            $res = ($num * 1000000000);
                            break;
                        case "mile2":
                            $res = ($num / 1609);
                            break;
                        case "yard2":
                            $res = ($num * 1.094);
                            break;
                        case "foot2":
                            $res = ($num * 3.281);
                            break;
                        case "inch2":
                            $res = ($num * 39.37);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1852);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='centimeter1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 100000);
                            break;
                        case "meter2":
                            $res = ($num / 100);
                            break;
                        case "centimeter2":
                            $res = ($num);
                            break;
                        case "millimeter2":
                            $res = ($num * 10);
                            break;
                        case "micrometer2":
                            $res = ($num * 10000);
                            break;
                        case "nanometer2":
                            $res = ($num * 10000000);
                            break;
                        case "mile2":
                            $res = ($num / 160934);
                            break;
                        case "yard2":
                            $res = ($num / 91.44);
                            break;
                        case "foot2":
                            $res = ($num / 30.48);
                            break;
                        case "inch2":
                            $res = ($num / 2.54);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 185200);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='millimeter1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 1000000);
                            break;
                        case "meter2":
                            $res = ($num / 1000);
                            break;
                        case "centimeter2":
                            $res = ($num / 10);
                            break;
                        case "millimeter2":
                            $res = ($num);
                            break;
                        case "micrometer2":
                            $res = ($num * 1000);
                            break;
                        case "nanometer2":
                            $res = ($num * 1000000);
                            break;
                        case "mile2":
                            $res = ($num / 1609000);
                            break;
                        case "yard2":
                            $res = ($num / 914);
                            break;
                        case "foot2":
                            $res = ($num / 305);
                            break;
                        case "inch2":
                            $res = ($num / 25.4);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1852000);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='micrometer1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 1000000000);
                            break;
                        case "meter2":
                            $res = ($num / 1000000);
                            break;
                        case "centimeter2":
                            $res = ($num / 10000);
                            break;
                        case "millimeter2":
                            $res = ($num / 1000);
                            break;
                        case "micrometer2":
                            $res = ($num);
                            break;
                        case "nanometer2":
                            $res = ($num * 1000);
                            break;
                        case "mile2":
                            $res = ($num / 1609000000);
                            break;
                        case "yard2":
                            $res = ($num / 914400);
                            break;
                        case "foot2":
                            $res = ($num / 304800);
                            break;
                        case "inch2":
                            $res = ($num / 25400);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1852000000);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='nanometer1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 1000000000000);
                            break;
                        case "meter2":
                            $res = ($num / 1000000000);
                            break;
                        case "centimeter2":
                            $res = ($num / 10000000);
                            break;
                        case "millimeter2":
                            $res = ($num / 1000000);
                            break;
                        case "micrometer2":
                            $res = ($num / 1000);
                            break;
                        case "nanometer2":
                            $res = ($num);
                            break;
                        case "mile2":
                            $res = ($num / 1609000000000);
                            break;
                        case "yard2":
                            $res = ($num / 914400000);
                            break;
                        case "foot2":
                            $res = ($num / 304800000);
                            break;
                        case "inch2":
                            $res = ($num / 25400000);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1852000000000);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='mile1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num * 1.609);
                            break;
                        case "meter2":
                            $res = ($num * 1609);
                            break;
                        case "centimeter2":
                            $res = ($num * 160934);
                            break;
                        case "millimeter2":
                            $res = ($num * 1609000);
                            break;
                        case "micrometer2":
                            $res = ($num * 1609000000);
                            break;
                        case "nanometer2":
                            $res = ($num * 1609000000000);
                            break;
                        case "mile2":
                            $res = ($num);
                            break;
                        case "yard2":
                            $res = ($num * 1760);
                            break;
                        case "foot2":
                            $res = ($num * 5280);
                            break;
                        case "inch2":
                            $res = ($num * 63360);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 1.151);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='yard1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 1094);
                            break;
                        case "meter2":
                            $res = ($num / 1.094);
                            break;
                        case "centimeter2":
                            $res = ($num * 91.44);
                            break;
                        case "millimeter2":
                            $res = ($num * 914);
                            break;
                        case "micrometer2":
                            $res = ($num * 914400);
                            break;
                        case "nanometer2":
                            $res = ($num * 914400000);
                            break;
                        case "mile2":
                            $res = ($num / 1760);
                            break;
                        case "yard2":
                            $res = ($num);
                            break;
                        case "foot2":
                            $res = ($num * 3);
                            break;
                        case "inch2":
                            $res = ($num * 36);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 2025);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='foot1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 3281);
                            break;
                        case "meter2":
                            $res = ($num / 3.281);
                            break;
                        case "centimeter2":
                            $res = ($num * 30.48);
                            break;
                        case "millimeter2":
                            $res = ($num * 305);
                            break;
                        case "micrometer2":
                            $res = ($num * 304800);
                            break;
                        case "nanometer2":
                            $res = ($num * 304800000);
                            break;
                        case "mile2":
                            $res = ($num / 5280);
                            break;
                        case "yard2":
                            $res = ($num / 3);
                            break;
                        case "foot2":
                            $res = ($num);
                            break;
                        case "inch2":
                            $res = ($num * 12);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 6076);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='inch1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num / 39370);
                            break;
                        case "meter2":
                            $res = ($num / 39.37);
                            break;
                        case "centimeter2":
                            $res = ($num * 2.54);
                            break;
                        case "millimeter2":
                            $res = ($num * 25.4);
                            break;
                        case "micrometer2":
                            $res = ($num * 25400);
                            break;
                        case "nanometer2":
                            $res = ($num * 25400000);
                            break;
                        case "mile2":
                            $res = ($num / 63360);
                            break;
                        case "yard2":
                            $res = ($num / 36);
                            break;
                        case "foot2":
                            $res = ($num / 12);
                            break;
                        case "inch2":
                            $res = ($num);
                            break;
                        case "nauticalmile2":
                            $res = ($num / 72913);
                            break;
                    }
                }
                if (is_numeric($num) && $len1=='nauticalmile1') {
                    switch ($len2) {
                        case "kilometer2":
                            $res = ($num * 1.852);
                            break;
                        case "meter2":
                            $res = ($num * 1852);
                            break;
                        case "centimeter2":
                            $res = ($num * 185200);
                            break;
                        case "millimeter2":
                            $res = ($num * 1852000);
                            break;
                        case "micrometer2":
                            $res = ($num * 1852000000);
                            break;
                        case "nanometer2":
                            $res = ($num * 1852000000000);
                            break;
                        case "mile2":
                            $res = ($num * 1.151);
                            break;
                        case "yard2":
                            $res = ($num * 2025);
                            break;
                        case "foot2":
                            $res = ($num * 6076);
                            break;
                        case "inch2":
                            $res = ($num * 72913);
                            break;
                        case "nauticalmile2":
                            $res = ($num);
                            break;
                    }
                }
            }
            ?>

                <div class="col-md-4">
                    <label for="num">Enter Value: </label>
                    <input type="text" id="num" class="form-control mb-3" name="num" value="<?php echo $num; ?>" placeholder="Value" required>

                    <label for="len1">From: </label>
                    <select name="len1" id="len1" class="form-control" value="<?php echo $len1; ?>">
                    <option value="kilometer1">KiloMeter</option>
                    <option value="meter1">Meter</option>
                    <option value="centimeter1">CentiMeter</option>
                    <option value="millimeter1">MilliMeter</option>
                    <option value="micrometer1">MicroMeter</option>
                    <option value="nanometer1">NanoMeter</option>
                    <option value="mile1">Mile</option>
                    <option value="yard1">Yard</option>
                    <option value="foot1">Foot</option>
                    <option value="inch1">Inch</option>
                    <option value="nauticalmile1">Nautical Mile</option>
                    </select>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-4">
                    <label for="num">Converted Value: </label>
                    <input type="text" id="num" class="form-control mb-3" value="<?php echo $res; ?>" name="num" placeholder="Value" disabled>
                    <label for="len2">To: </label>
                    <select name="len2" id="len2" class="form-control">
                    <option value="kilometer2">KiloMeter</option>
                    <option value="meter2">Meter</option>
                    <option value="centimeter2">CentiMeter</option>
                    <option value="millimeter2">MilliMeter</option>
                    <option value="micrometer2">MicroMeter</option>
                    <option value="nanometer2">NanoMeter</option>
                    <option value="mile2">Mile</option>
                    <option value="yard2">Yard</option>
                    <option value="foot2">Foot</option>
                    <option value="inch2">Inch</option>
                    <option value="nauticalmile2">Nautical Mile</option>
                    </select>

                    <script>
                        document.getElementById("len1").value = "<?php echo $len1;?>";
                        document.getElementById("len2").value = "<?php echo $len2;?>";

                    </script>
                </div>

                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <input type="submit" class="col-md-5 btn btn-info mt-5" name="calculate" value="Calculate" style="margin-left:auto; margin-right:auto">
            </div>
        </form>

        

    </div>
</body>
</html>
