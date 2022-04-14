<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Student Attendance System</title>
</head>

<body>
    <div>
        <!-- Navbar section -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-auto">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Student Attendance System</a>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="stu-data container-fluid">
            <h3>Student Data</h3>

            <div class="center">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>College ID</th>
                                <th>Contact No</th>
                                <th>Address</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            $server = "localhost";
                            $username = "root";
                            $password = "";

                            $con = mysqli_connect($server, $username, $password);

                            if (!$con) {
                                die("connection to database failed due to " . mysqli_connect_errno());
                            }

                            $selectquery = " select * from registration_db.registration ";

                            $query = mysqli_query($con, $selectquery);

                            $nums = mysqli_num_rows($query);

                            while ($res = mysqli_fetch_array($query)) {
                                # code...
                            ?>
                                <tr>
                                    <td> <?php echo $res['Student_Id_No']; ?> </td>
                                    <td> <?php echo $res['Roll_No']; ?> </td>
                                    <td> <?php echo $res['Name']; ?> </td>
                                    <td> <?php echo $res['Email']; ?> </td>
                                    <td> <?php echo $res['College_Id_No']; ?> </td>
                                    <td> <?php echo $res['Contact_no']; ?> </td>
                                    <td> <?php echo $res['Address']; ?> </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>

        <!-- Footer -->
        <footer>
            <p>&COPY; Copyright reserved @ 2022</p>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>