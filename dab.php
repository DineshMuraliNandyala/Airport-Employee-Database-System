<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the Tables</title>
    <link rel="stylesheet" href="display.css">
</head>
    <body style="margin: 80px;">
    <background="7.jpg"; 
    link="#000"; alink="#017bf5"; vlink="#000";>
    <h1>DISPLAYING AILINE BOOKING TABLE</h1>
    <br>
    <table class="table"  align="center" border="3px" style="width:1200px; line-height:50px;">
        <thead>
            <tr>    
                <th colspan="10"><h2>AIRLINE BOOKING DATA</h2>
            </tr>   
            <tr>
            <th>BOOKING ID</th>
            <th>BOOKING TYPE</th>
            <th>BOOKING DATE</th>
            <th>BOOKING DESCRIBE</th> 
            </tr>
        </thead>
            <tbody>
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
            
                // Create a database connection
                $con = mysqli_connect($server, $username, $password);
            
                // Check for connection success
                if(!$con){
                    die("connection to this database failed due to" . mysqli_connect_error());
                }
                $sql="SELECT * FROM `airline`.`ab`";
                $result= $con->query($sql);
                if(!$result)
                {
                    die("Invalid Query...".$con->error);
                }
                while($row = $result->fetch_assoc())
                {
                    echo"<tr>
                    <td>" . $row["ab_id"]."</td>
                    <td>" . $row["ab_type"]."</td>
                    <td>" . $row["ab_date"]."</td>
                    <td>" . $row["ab_des"]."</td>
                    </tr>";
                }
                ?>
            </tbody>
    </table>
</body>
</html>