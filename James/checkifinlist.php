<?php
    include 'connection.php';

    $userid = $_REQUEST['uid'];
    $movieid = $_REQUEST['mid'];

    $checkifinlist_sql = "SELECT listID
                        FROM watchlist
                        WHERE EXISTS (SELECT listid from watchlist where userID = '$userid' and movieID = '$movieid')";
    $result = mysqli_query($conn, $checkifinlist_sql);

    echo $result;
?>