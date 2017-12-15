<?php 
    $servername = "localhost";
    $username = "westv1387";
    $password = "";
    $dbname = "CodeTN";
    
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    echo($conn);


// $dbname = 'CodeTN';
// $dbuser = 'westv1387';
// $dbpass = '';
// $dbhost = 'localhost';
// $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
// $test_query = "SHOW TABLES FROM $dbname";
// echo('made it');
// $result = mysqli_query($connect, $test_query);
// $tblCnt = 0;
// while($tbl = mysqli_fetch_array($result)) {
//   $tblCnt++;
//   echo $tbl[0]."<br />\n";
// }
// if (!$tblCnt) {
//   echo "There are no tables<br />\n";
// } else {
//   echo "There are $tblCnt tables<br />\n";
// }

?>