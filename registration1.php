<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="regform container">
            <form class="regform1 row g-3" method="post" action="registration.php">

                <div class="lab-name">
                    <label for="validationDefault01" class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control" id="validationDefault01"  required>
                </div>



                <!-- Email -->
                <div class="lab-email">
                    <label for="inputEmail3" class="form-label">Email</label>
                    <div class="form-email">
                        <input type="email" name="Email" class="form-control" id="inputEmail3">
                    </div>
                </div>

                <!-- Contact -->
                <div class="lab-contact">
                    <label for="inputEmail3" class="form-label">Contact No</label>
                    <div class="form-contact">
                        <input type="phone" name="Contact_no" class="form-control" id="inputnumber3">
                    </div>
                </div>

                <!-- Address -->
                <div class="lab-address">
                    <label for="inputAddress" class="form-label">Address</label>
                    <div class="form-address">
                        <textarea class="form-control" name="Address" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

                <hr>

                <div class="college-details">
                    <h5>College Details</h5>
                </div>

                <!-- College ID -->
                <div class="lab-id">
                    <label for="inputEmail3" class="form-label">College ID No</label>
                    <div class="form-id">
                        <input type="phone" name="College_Id_No" class="form-control" id="inputnumber3">
                    </div>
                </div>

                <!-- Student ID -->
                <div class="lab-student-id">
                    <label for="inputEmail3" class="form-label">Student ID No</label>
                    <div class="form-student-id">
                        <input type="phone" class="form-control" name="Student_Id_No" id="inputnumber3">
                    </div>
                </div>

                <!-- Roll No -->
                <div class="lab-student-id">
                    <label for="inputEmail3" class="form-label">Roll No</label>
                    <div class="form-student-id">
                        <input type="phone" class="form-control" name="Roll_No" id="inputnumber3">
                    </div>
                </div>

                <div class="white-space"></div>

                <div class="reg-btn">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>

                <div class="white-space"></div>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            <p>&COPY; Copyright reserved @ 2022</p>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>