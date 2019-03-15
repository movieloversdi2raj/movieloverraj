<?php
    include 'connection.php';

    $movieid = $_REQUEST['mid'];
    $userid = $_REQUEST['uid'];

    $removefromlist_sql = "DELETE FROM watchlist 
                        WHERE userID = $userid and movieID = $movieid";

    if ($conn->query($addtolist_sql) === TRUE) {
        echo "Y";
    } else {
        echo "Error: " . $release_sql . "<br>" . $conn->error;
    }
?>