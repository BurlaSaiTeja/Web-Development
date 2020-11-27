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
        <h1>USN CHECK</h1>
    </div>
    <div class="content">
        <form class="col-md-4" method="POST">
            <label for="usn"><h5>Enter USN to Check: </h5></label>
            <input type="text" id="usn" class="form-control" name="usn" required><br>
            <input type="submit" class="col-md-4 btn btn-info" name="check" value="Check" style="margin-left:auto; margin-right:auto">
        </form>
        <div class="col-md-16">
            <?php
                if (isset($_POST["check"])) {
                    $usn = $_POST["usn"];
                if (preg_match("/[1-4][A-Z]{2}\d{2}[A-Z]{2}\d{3}/", $usn))
                    echo '<script>alert("Correct format of USN!!!")</script>';
                else
                    echo '<script>alert("Incorrect format of USN!!! Try Again.")</script>';
                }
            ?>
        </div>
    </div>
</body>
</html>
