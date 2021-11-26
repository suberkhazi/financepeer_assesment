<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<?php

//connect to mysql db

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'financepeer');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$statusMsg = '';

// File upload path
$targetDir = "C:/xampp/htdocs/financepeer/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('json','txt');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        $jsondata = file_get_contents($targetFilePath);
        //convert json object to php associative array
        $data = json_decode($jsondata, true);

    $id = $data['empid'];
    $name = $data['personal']['name'];
    $gender = $data['personal']['gender'];
    $age = $data['personal']['age'];
    $streetaddress = $data['personal']['address']['streetaddress'];
    $city = $data['personal']['address']['city'];
    $state = $data['personal']['address']['state'];
    $postalcode = $data['personal']['address']['postalcode'];
    $designation = $data['profile']['designation'];
    $department = $data['profile']['department'];
    }

    //insert into mysql table
    $sql = "INSERT INTO json(empid, empname, gender, age, streetaddress, city, state, postalcode, designation, department)
    VALUES('$id', '$name', '$gender', '$age', '$streetaddress', '$city', '$state', '$postalcode', '$designation', '$department')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}


$sql = "SELECT * FROM json";
if ($res = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>empid</th>";
        echo "<th>empname</th>";
        echo "<th>gender</th>";
        echo "<th>age</th>";
        echo "<th>streetaddress</th>";
        echo "<th>city</th>";
        echo "<th>state</th>";
        echo "<th>postalcode</th>";
        echo "<th>designation</th>";
        echo "<th>department</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['empid']."</td>";
            echo "<td>".$row['empname']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['streetaddress']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['state']."</td>";
            echo "<td>".$row['postalcode']."</td>";
            echo "<td>".$row['designation']."</td>";
            echo "<td>".$row['department']."</td>";
            echo "</tr>";
        }
        echo "</table>";
       
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link);
}
mysqli_close($link);

?>
<p>
        
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out
           
        </a>
    </p>
</body>
</html>