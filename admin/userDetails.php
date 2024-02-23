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
        <h1 class="text-center text-warning">All Users Details</h1>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No.</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>User Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $obj = mysqli_query($conn, "select * from tbl_signup");
                while ($data = mysqli_fetch_array($obj)) {
                ?>
                <tr>
                    <td><?php echo $data['fname']; ?></td>
                    <td><?php echo $data['lname']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>