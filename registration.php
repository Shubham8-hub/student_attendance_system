<?php

if (isset($_POST['Name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to database failed due to " . mysqli_connect_errno());
    }
    // echo "Sucessfully connected";

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Contact_no = $_POST['Contact_no'];
    $Address = $_POST['Address'];
    $College_Id_No = $_POST['College_Id_No'];
    $Student_Id_No = $_POST['Student_Id_No'];
    $Roll_No = $_POST['Roll_No'];


    $sql = "INSERT INTO `registration_db`.`registration` (`Name`, `Email`, `Contact_no`, `Address`, `College_Id_No`, `Student_Id_No`, `Roll_No`) VALUES ('$Name', '$Email', '$Contact_no', '$Address', '$College_Id_No', '$Student_Id_No', '$Roll_No');";

    // echo $sql;

    if ($con->query($sql) == true) {
        echo '
            <div class="modal-body">
              <p> Registered Sucessfully</p>
            </div>
            <div class="modal-footer">
              <a href="index.php">
              <button type="button" class="btn btn-primary">Back</button>
              </a>
            </div>';
    } else {
        echo "Error: $sql <br> $con->error ";
    }

    $con->close();
}
?>
