<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "movieloverproject(v2)";
    $db_table1 = "payment_method";
    $db_table2 = "userprofile";

    // Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// "INSERT INTO  $db_table1 (NameOnCard) VALUES ('$nameoncard')"

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 


        
                                                
                $cnum = (int)$_POST['updateccnumber'];
                $fullname =  $_POST['updatefullname'];
                $nameoncard = $_POST['updatenoc'];
                $username = $_POST['updateusername'];
               // $password = $_POST['inputpassword'];
                $email = $_POST['updateemail'];
                $area = $_POST['updatelocation'];
                $cvv = (int)$_POST['updatecvv'];
                $userID =1;
               
               // $sql1 = "UPDATE $db_table1 SET fullname = '$fullname', userName = '$username', area = '$area', email = 'email', Ccnumber = '$cnum' where userID = $userID";
                 
                $sql = "UPDATE $db_table2 SET fullname = '$fullname', userName = '$username', area = '$area', email = 'email', Ccnumber = '$cnum' where userID = $userID";
                
                if (mysqli_query($conn, $sql)) {
                   // if (mysqli_query($conn, $sql))
                    echo "New record created successfully";
              } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              mysqli_close($conn);
              //                 if($conn->query($sql) === true){
//                     echo "Records inserted successfully.";
//                 } 
//                 else{
//                     echo "ERROR: Could not insert records";
//                 }

                           

?>