
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
 


        
                                                
                $cnum = (int)$_POST['inputccnumber']; 
                $nameoncard = $_POST['inputnameoncard'];
                $username = $_POST['inputusername'];
                $password = $_POST['inputpassword'];
                $email = $_POST['inputemail'];
                $area = $_POST['inputarea'];
               
                $sql1 = "INSERT INTO $db_table2 (userName, password, email, Ccnumber, area) VALUES ('$username', $password, '$email', $cnum, '$area')";
                 
                $sql = "UPDATE $db_table1 SET NameOnCard = '$nameoncard' where Ccnumber = $cnum";
                  
                if (mysqli_query($conn, $sql1)) {
                    if (mysqli_query($conn, $sql))
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

