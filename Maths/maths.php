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
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="jumbotron content">
        <h1>MATHEMATICAL APPLICATIONS</h1>
    </div>
    <div class="content">
        <h3>Calculator Operations</h3>
        <form class="col-md-8 " method="POST">
            <label for="n1">Enter Number 1:</label>
            <input type="number" id="n1" class="form-control" name="n1" placeholder="Number 1" required>
            <label for="n2">Enter Number 2:</label>
            <input type="number" id="n2" class="form-control" name="n2" placeholder="Number 2" required>
            <input type="submit" class="btn btn-info" name="calculate" value="Calculate">
        </form>
        <div class="col-md-16">
        <?php
            if (isset($_POST["calculate"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                if (is_numeric($n1) && is_numeric($n2)) {
                    echo "<p><strong>Addition</strong>: " . ($n1 + $n2) . "</p>";
                    echo "<p><strong>Subtraction</strong>: " . ($n1 - $n2) . "</p>";
                    echo "<p><strong>Multiplication</strong>: " . ($n1 * $n2) . "</p>";
                    if ($n2 != 0)
                        echo "<p><strong>Division</strong>: " . ($n1 / $n2) . "</p>";
                    else
                        echo "<p><strong>Division</strong>: Divide by Zero</p>";
                } else {
                    echo "<p><strong>Invalid Input</strong></p>";
                }
            }
            ?>
        </div>
    </div>
    <div class="content">
        <h3>Matrix Operations</h3>
        <div class="col-md-16">
            <?php
                $a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
                $b = array(array(9, 8, 7), array(6, 5, 4), array(3, 2, 1));
                $m = count($a);
                $n = count($a[1]);
                $p = count($b);
                $q = count($b[1]);
            ?>
            <div class="row m-b-md">
                <div class="col-md-3">
                    <h6 class="content m-b-md">Matrix A: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        for ($r = 0; $r < $m; $r++) {
                            for ($c = 0; $c < $n; $c++)
                                echo " " . $a[$r][$c];
                            echo "<br>";
                        }
                        ?>
                    </code>
                </div>
                <div class="col-md-3">
                    <h6 class="content m-b-md">Matrix B: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        for ($r = 0; $r < $p; $r++) {
                            for ($c = 0; $c < $q; $c++)
                                echo " " . $b[$r][$c];
                            echo "<br>";
                        }
                        ?>
                    </code>
                </div>
            </div>

            <div class="row m-b-md">
                <div class="col-md-3">
                    <h6 class="content m-b-md">Transpose of Matrix A: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        for ($r = 0; $r < $n; $r++) {
                            for ($c = 0; $c < $m; $c++)
                                echo " " . $a[$c][$r];
                            echo "<br>";
                        }
                        ?>
                    </code>
                </div>
                <div class="col-md-3">
                    <h6 class="content m-b-md">Transpose of Matrix B: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        for ($r = 0; $r < $p; $r++) {
                            for ($c = 0; $c < $q; $c++)
                                echo " " . $b[$c][$r];
                            echo "<br>";
                        }
                        ?>
                    </code>
                </div>
            </div>

            <div class="row m-b-md">
                <div class="col-md-3">
                    <h6 class="content m-b-md">Multiplication of Both Matrices: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        if ($m == $p && $n == $q) {
                            $mul = array();
                            for ($r = 0; $r < $n; $r++) {
                                for ($c = 0; $c < $m; $c++) {
                                    $mul[$r][$c] = 0;
                                    for ($k = 0; $k < $n; $k++)
                                        $mul[$r][$c] += $a[$r][$k] * $b[$k][$c];
                                    echo " " . $mul[$r][$c];
                                }
                                echo "<br>";
                            }
                        }
                        ?>
                    </code>
                </div>
                <div class="col-md-3">
                    <h6 class="content m-b-md">Addition of Both Matrices: </h6>
                </div>
                <div class="col-md-3">
                    <code>
                    <?php
                        if ($m == $p && $n == $q) {
                            for ($r = 0; $r < $n; $r++) {
                                for ($c = 0; $c < $m; $c++)
                                    echo " " . ($a[$r][$c] + $b[$r][$c]);
                                echo "<br>";
                            }
                        }
                        ?>
                    </code>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

