<?php 

include 'db.php';

$sql = "SELECT * FROM student";
$result = $db1->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr id='tr".$row['id']."'>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td><button data-id='".$row['id']."' class='edit'>Edit</button> |
         <button data-id='".$row['id']."' class='delete'>Delete</button></td></tr>";
    }
    }


?>