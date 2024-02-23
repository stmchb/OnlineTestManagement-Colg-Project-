<?php
include("../db_connection.php");
if (isset($_POST['myid'])) {
    $id = $_POST['myid'];
    $result = mysqli_query($conn, "SELECT * FROM `tbl_questions` where subid=" . $id . " LIMIT 1");
    while ($dt = mysqli_fetch_array($result)) {
?>
<label class="font-weight-bold" style="font-size: 24px;color:green"><?php echo $dt['question'] ?></label>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qA'] ?>"> <?php echo $dt['qA'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qB'] ?>"> <?php echo $dt['qB'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qC'] ?>"> <?php echo $dt['qC'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qD'] ?>"> <?php echo $dt['qD'] ?>
<br><br>

<?php
    }
}
if (isset($_POST['myid1'])) {
    $id = $_POST['myid1'];
    if ($id >= 0) {
        $result = mysqli_query($conn, "SELECT * FROM `tbl_questions` where qid=" . $id);
        while ($dt = mysqli_fetch_array($result)) {
        ?>
<label class="font-weight-bold" style="font-size: 24px;color:green">
    <?php echo $dt['question'] ?></label>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qA'] ?>"> <?php echo $dt['qA'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qB'] ?>"> <?php echo $dt['qB'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qC'] ?>"> <?php echo $dt['qC'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qD'] ?>"> <?php echo $dt['qD'] ?>
<br><br>

<?php
        }
    }
}
if (isset($_POST['myid123'])) {
    $id = $_POST['myid123'];
    if ($id >= 0) {
        $result = mysqli_query($conn, "SELECT * FROM `tbl_questions` where qid=" . $id);
        while ($dt = mysqli_fetch_array($result)) {
        ?>
<label class="font-weight-bold" style="font-size: 24px;color:green">
    <?php echo $dt['question'] ?></label>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qA'] ?>"> <?php echo $dt['qA'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qB'] ?>"> <?php echo $dt['qB'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qC'] ?>"> <?php echo $dt['qC'] ?>
<br><br>
<input type="radio" name="a" id="answer" value="<?php echo $dt['qD'] ?>"> <?php echo $dt['qD'] ?>
<br><br>

<?php
        }
    }
}

if (isset($_POST['aid'])) {
    $aid = $_POST['aid'];
    $qid = $_POST['qid'];
    $sid = $_POST['sid'];
    mysqli_query($conn, "UPDATE tbl_test set answer='" . $aid . "' where questionid=" . $qid . " and subid=" . $sid);
}