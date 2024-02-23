<?php include "../db_connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-primary text-light">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <br>
            <h2 class="text-center text-warning">Update Questions Here</h2>
            <br>
            <?php
            if (isset($_GET['qid2'])) {
                $data = mysqli_query($conn, "select * from tbl_questions where qid=" . $_GET['qid2']);
                while ($dt = mysqli_fetch_array($data)) {
            ?>

            <form method="post">

                <input type="hidden" name="qid" class="form-control" value="<?php echo $dt['qid'] ?>" readonly>

                <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="qu" class="form-control" value="<?php echo $dt['question'] ?>">
                </div>
                <div class="form-group">
                    <label>Option A</label>
                    <input type="text" name="a" class="form-control" value="<?php echo $dt['qA'] ?>">
                </div>
                <div class="form-group">
                    <label>Option B</label>
                    <input type="text" name="b" class="form-control" value="<?php echo $dt['qB'] ?>">
                </div>
                <div class="form-group">
                    <label>Option C</label>
                    <input type="text" name="c" class="form-control" value="<?php echo $dt['qC'] ?>">
                </div>
                <div class="form-group">
                    <label>Option D</label>
                    <input type="text" name="d" class="form-control" value="<?php echo $dt['qD'] ?>">
                </div>
                <div class="form-group">
                    <label>Answer</label>
                    <input type="text" name="ans" class="form-control" value="<?php echo $dt['ans'] ?>">
                </div>
                <input type="submit" value="Update" name="update" class="btn btn-warning">
            </form>





            <?php
                }
            }
            if (isset($_POST['update'])) {
                $qr1 = "UPDATE `tbl_questions` SET `question`='" . $_POST['qu'] . "',`qA`='" . $_POST['a'] . "',
                `qB`='" . $_POST['b'] . "',`qC`='" . $_POST['c'] . "',
                `qD`='" . $_POST['d'] . "',`ans`='" . $_POST['ans'] . "' WHERE qid=" . $_POST['qid'];
                if (mysqli_query($conn, $qr1)) {
                    echo "<script> window.location='addQuestions.php';</script>";
                } else {
                    echo "Error: " . $qr1 . "<br>" . mysqli_error($conn);
                }
            }
            ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
</body>

</html>