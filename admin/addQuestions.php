<?php include "../db_connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Add Question</title>
</head>

<body class="bg-primary text-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addSubject.php">Add Subject</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addQuestions.php">Add Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userDetails.php">All Users</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="userUploads.php">UPLOADS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutpage.php">Logout</a>
                </li>
            </ul>
            <p class="my-2 my-lg-0" style="color:aqua">Welcome Admin :)
                <i> <?php echo $_SESSION['admin'] ?></i>
            </p>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 "></div>
            <div class="col-sm-6 bg-danger">
                <br>
                <h2 class="text-center text-warning">Add Questions Here</h2>
                <br>
                <form method="post">
                    <div class="form-group">
                        <label>Choose Subject</label>
                        <select name="sub" class="form-control">
                            <option value="0">---Select---</option>
                            <?php
                            $data = mysqli_query($conn, "select * from tbl_subject");
                            while ($dt = mysqli_fetch_array($data)) {
                            ?>

                            <option value="<?php echo $dt['id'] ?>"><?php echo $dt['subjectName'] ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Add Question</label>
                        <input type="text" name="question" placeholder="Enter Subject Name" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Option A</label>
                        <input type="text" name="a" placeholder="Enter Option A" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Option B</label>
                        <input type="text" name="b" placeholder="Enter Option B" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Option C</label>
                        <input type="text" name="c" placeholder="Enter Option C" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Option D</label>
                        <input type="text" name="d" placeholder="Enter Option D" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Answer</label>
                        <input type="text" name="ans" placeholder="Enter Answer" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="addQuestion" value="Add Question" class="btn btn-primary">
                    </div>
                </form>
                <?php
                if (isset($_POST['addQuestion'])) {
                    $sql = "INSERT INTO `tbl_questions`(`question`, `qA`, `qB`, `qC`, `qD`, `ans`, `subid`) 
                    VALUES ('" . $_POST['question'] . "','" . $_POST['a'] . "','" . $_POST['b'] . "','" . $_POST['c'] . "',
                    '" . $_POST['d'] . "','" . $_POST['ans'] . "','" . $_POST['sub'] . "')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('New Question Add successfully')</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                ?>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-3">

                <form method="post">
                    <select name="sub" class="form-control">
                        <option value="0">---Select---</option>
                        <?php
                        $data = mysqli_query($conn, "select * from tbl_subject");
                        while ($dt = mysqli_fetch_array($data)) {
                        ?>

                        <option value="<?php echo $dt['id'] ?>"><?php echo $dt['subjectName'] ?>
                        </option>

                        <?php
                        }
                        ?>
                    </select>


            </div>
            <div class="col-sm-4">
                <input type="submit" name="sort" class="btn btn-info" value="Show">
                </form>
            </div>
        </div>

        <h2 class="text-center text-warning">All Questions</h2>

        <table class="table table-bordered table-dark text-center">

            <thead>

                <tr>
                    <th>Id</th>
                    <th>Question</th>
                    <th>Option A</th>
                    <th>Option B</th>
                    <th>Option C</th>
                    <th>Option D</th>
                    <th>Answer</th>
                    <th colspan="2">Action</th>

                </tr>
            </thead>
            <tbody>


                <?php
                if (isset($_POST['sort'])) {
                    $data = mysqli_query($conn, "select * from tbl_questions where subid=" . $_POST['sub']);
                    while ($dt = mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $dt['qid'] ?></td>
                    <td><?php echo $dt['question'] ?></td>
                    <td><?php echo $dt['qA'] ?></td>
                    <td><?php echo $dt['qB'] ?></td>
                    <td><?php echo $dt['qC'] ?></td>
                    <td><?php echo $dt['qD'] ?></td>
                    <td><?php echo $dt['ans'] ?></td>
                    <td><a href="updateQuestion.php?qid2=<?php echo $dt['qid'] ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="addQuestions.php?qid1=<?php echo $dt['qid'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>

                <?php
                    }
                }
                if (isset($_GET['qid1'])) {
                    $qu = "delete from tbl_questions where qid=" . $_GET['qid1'];
                    if (mysqli_query($conn, $qu)) {
                        echo "<script> window.location='addQuestions.php';</script>";
                    } else {
                        echo "Error: " . $qu . "<br>" . mysqli_error($conn);
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>