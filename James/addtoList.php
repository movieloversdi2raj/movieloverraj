<?php
    // $x = $_REQUEST['mid']
    $movieid = $_REQUEST['mid'];
    $userid = $_REQUEST['uid'];
    // $movieid = $_SESSION['movieId'];

    include 'connection.php';

    $addtolist_sql = "INSERT INTO watchlist (userID, movieID) 
                    VALUES ($userid, $movieid)";
    if ($conn->query($addtolist_sql) === TRUE) {
        echo "Y";
    } else {
        echo "Error: " . $release_sql . "<br>" . $conn->error;
    }

?>


