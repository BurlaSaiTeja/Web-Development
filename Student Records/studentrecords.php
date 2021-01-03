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
        <h1>STUDENT RECORDS</h1>
        <p>NAME: BURLA SAI TEJA</p>
        <p>USN: 1CR17CS029</p>
    </div>
    <div class="row content">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <h3 class="content">Original Student Records</h3>
            <?php

                    /*$server = "pixies.caj7gmdkfvnw.ap-south-1.rds.amazonaws.com";
                    $username = "root";
                    $password = "0xbeepboop";
                    $port = 3306;
                    $dbname = "weblab";*/
                /*
                                 * SQL Queries
                                 *
                                 * create table student (usn varchar(10), name varchar(20), batch int(10));
                                 * insert into student values("1CR17CS075", "Mohammed Rifas S", 2017);
                                 * insert into student values("1CR17EC029", "Anushka Jemima", 2017);
                                 * insert into student values("1CR17CS029", "Burla Sai Teja", 2017);
                                 * insert into student values("1CR17CS094", "Rahul Majgi", 2015);
                                 * insert into student values("1CR17ME090", "Rahul Dev R", 2016);
                                 */
                
                $server = "localhost";
                $username = "manager";
                $password = "0xbeepboop";
                $port = 3306;
                $dbname = "weblab";

                    // run sudo apt install php-mysqli
                    $conn = mysqli_connect($server, $username, $password, $dbname, $port);

                    if ($conn->connect_error)
                        die("Connection failed: " . $conn->connect_error);
                    else{

                    // Display table from database

                    $sql = "SELECT * FROM students";

                    $a = [];
                    $result = $conn->query($sql);

		        ?>
		        <table class="table table-hover">
		            <thead>
		            <tr>
		                <th scope="col">USN</th>
		                <th scope="col">Name</th>
		                <th scope="col">Batch</th>
		            </tr>
		            </thead>
		            <tbody>
		            <?php

		            if ($result->num_rows > 0) {
		                while ($row = $result->fetch_assoc()) {
		                    echo "<tr>";
		                    echo "<td>" . $row["USN"] . "</td>";
		                    echo "<td>" . $row["Name"] . "</td>";
		                    echo "<td>" . $row["Batch"] . "</td>";
		                    echo "</tr>";
		                    array_push($a, $row);
		                }
		            } else
                        echo "<tr><td colspan='3'>Empty Records</td></tr>";
		            ?>
		            </tbody>
		        </table>
		    </div>

            <div class="col-md-2"></div>

		    <div class="col-md-4">
		        <h3 class="content">Selection Sorted Student Records</h3>
		        <?php

		        $n = count($a);

		        for ($i = 0; $i < ($n - 1); $i++) {
		            for ($j = $i + 1; $j < $n; $j++) {
		                if ($a[$i]["USN"] > $a[$j]["USN"]) {
		                    $temp = $a[$i];
		                    $a[$i] = $a[$j];
		                    $a[$j] = $temp;
		                }
		            }
		        }
		        ?>
		        <table class="table table-hover">
		            <thead>
		            <tr>
		                <th scope="col">USN</th>
		                <th scope="col">Name</th>
		                <th scope="col">Batch</th>
		            </tr>
		            </thead>
		            <tbody id="counter-content">
		            <?php

		            for ($i = 0; $i < $n; $i++)
		                echo "<tr><td>" . $a[$i]["USN"] . "</td><td>" . $a[$i]["Name"] . "</td><td>" . $a[$i]["Batch"] . "</td></tr>";


		            ?>
		            </tbody>
		        </table>
		        <?php
		        $conn->close();
		        }
		        ?>
        </div>
    </div>
</body>
</html>
