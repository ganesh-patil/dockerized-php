<?php 
try {
 echo "=========Welcome to Ganesh patil's PHP appliction build using docker containers: ===<br>";
$con = mysqli_connect("mysql", "root", "root","TEST");
mysqli_query($con,"CREATE TABLE IF NOT EXISTS  emp (emp_id INT NOT NULL AUTO_INCREMENT, name VARCHAR(20), PRIMARY KEY (emp_id)) ");
//echo mysqli_errno($con) . ": " . mysqli_error($con). "\n";
mysqli_query($con,"INSERT INTO emp (name) VALUES ('Ganesh')");

//echo mysqli_errno($con) . ": " . mysqli_error($con). "\n";
$data = mysqli_query($con,"SELECT * FROM TEST.emp");

 while($row = $data->fetch_assoc())
        {
            $rows[] = $row;
        }


if(!empty($rows)) {
    echo "Following records are present in Database: <br>";
    foreach($rows as $record) {
        echo "Record : ID =".$record['emp_id']."  Name :".$record['name']. "<br>";
    }
}
mysqli_close($con);
}
catch (Exception $e) {
    prin_r($e->getMessage());
}

