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
             margin:auto;
        }
    </style>
</head>
<body>
    <div class="jumbotron content">
        <h1>STRINGS & ARRAYS</h1>
    </div>
<div class="content" style="text-align: left; padding-left:750px;">
            <?php
                $states = "Mississippi Alabama Texas Massachusetts Kansas";
                $statesArray = explode(" ", $states);
                $statesList = array();
                echo "<br><h5>The Original Array is:</h5> <br>";
                foreach ($statesArray as $key => $value)
                print("<strong>statesArray[$key]</strong> : <code>$value</code><br>");
                foreach ($statesArray as $value) {
                    if (preg_match("/.*xas$/", $value))
                        $statesList[0] = $value;
                    if (preg_match("/^k.*s$/i", $value))
                        $statesList[1] = $value;
                    if (preg_match("/^M.*s$/", $value))
                        $statesList[2] = $value;
                    if (preg_match("/.*s$/", $value))
                        $statesList[3] = $value;
                }
                echo "<br><h5>The Converted Array is:</h5> <br>";
                foreach (array_values($statesList) as $i => $value)
                print("<strong>statesalList[$i]</strong> : <code>$value</code><br>");
            ?>
    </div>
</body>
</html>

