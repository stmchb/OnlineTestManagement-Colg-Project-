<?php include "../db_connection.php"; ?>

<?php


$data1 = mysqli_query($conn, "SELECT ans FROM tbl_test INNER JOIN tbl_questions ON tbl_questions.ans=tbl_test.answer where tbl_test.subid=3");
while ($dt = mysqli_fetch_array($data1)) {
    echo $dt['ans'] . "<br>";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

</body>

</html>