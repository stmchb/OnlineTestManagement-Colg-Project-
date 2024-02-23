<?php include "../db_connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Add Subject</title>
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
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <br>
                <h2 class="text-center text-warning">Add Subjects Here</h2>
                <br>
                <form method="post">
                    <div class="form-group">
                        <label>Add Subject</label>
                        <input type="text" name="subject" placeholder="Enter Subject Name" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" value="Add Subject" class="btn btn-success">
                    </div>
                </form>
                <?php
                if (isset($_POST['add'])) {
                    $sql = "insert into tbl_subject(subjectName) values('" . $_POST['subject'] . "')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('New record created successfully')</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                ?>
            </div>
            <div class="col-sm-8">
                <br>
                <h2 class="text-center text-warning">All Subject</h2>
                <table class="table table-bordered table-dark text-center text-light">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Subject</th>
                            <th colspan="2">Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $data = mysqli_query($conn, "select * from tbl_subject");
                        while ($dt = mysqli_fetch_array($data)) {
                        ?>

                        <tr>
                            <td><?php echo $dt['id'] ?></td>
                            <td><?php echo $dt['subjectName'] ?></td>

                            <td><a href="addSubject.php?id1=<?php echo $dt['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['id1'])) {
        $qu = "delete from tbl_subject where id=" . $_GET['id1'];
        if (mysqli_query($conn, $qu)) {
            header("location:addSubject.php");
        } else {
            echo "Error: " . $qu . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>