<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $data = mysqli_query($conn, "select  count(*)  from tbl_questions inner join tbl_test on tbl_test.questionid=tbl_questions.qid AND tbl_test.subid='3' and tbl_test.email='khan@gmail.com' and tbl_questions.ans=tbl_test.answer
// ");
// while ($dt = mysqli_fetch_array($data)) {
//     print_r($dt);
//     // echo $dt[0];
// }