<?php


include 'connection.php';


if(isset($_POST['update'])){

    $update_id = $_POST['update_id'];
    $update_fname = $_POST['update_fname'];
    $update_mname = $_POST['update_mname'];
    $update_lname = $_POST['update_lname'];
    $update_email = $_POST['update_email'];
    $update_age = $_POST['update_age'];
    $update_course = $_POST['update_course'];
    $update_sex = $_POST['update_sex'];

}


if(isset($_POST['submit'])){

    $id = $_POST['update-id'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $sex = $_POST['sex'];

    $SqlUpdate = "UPDATE `student` SET Firstname = '$f_name', Middlename = '$m_name', Lastname = '$l_name', Email = '$email', Age = '$age', Course = '$course', Sex = '$sex' WHERE id = '$id'";
    $QueryUpdate = mysqli_query($connection, $SqlUpdate);

    echo '<script>alert("Updted Successfully!")</script>';
    echo '<script>window.location.href="view_table.php"</script>';
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Updating...</title>
</head>
<body>
    <div class="main-form">
        <form action="update.php" method="post" autocomplete="off" id="reg-form" class="reg-form" onsubmit="return confirmUpdate()">
                    <div class="name">
                        <div class="box1" id="box">
                            <label for="f_name" class="f-name">Firstname:</label><br>
                            <input type="text" name="f_name" required class="form-control" value="<?php echo $update_fname ?>"><br>
                        </div>
                        <div class="box2" id="box">
                            <label for="m_name" class="m-name">Middlename:</label><br>
                            <input type="text" name="m_name" class="form-control" required value="<?php echo $update_mname ?>"><br>
                        </div>
                        <div class="box3" id="box">
                            <label for="l_name" class="l-name">Lastname:</label><br>
                            <input type="text" name="l_name" class="form-control" required value="<?php echo $update_lname ?>"><br>
                        </div>
                    </div>
                    <div class="other">
                        <div class="box4" id="box">
                            <label for="" class="email">Email:</label><br>
                            <input type="email" name="email" class="form-control" required value="<?php echo $update_email ?>"><br>
                        </div>
                        <div class="box6" id="box">
                            <label for="" class="age">Age:</label><br>
                            <input type="number" name="age" class="form-control" required value="<?php echo $update_age ?>"><br>
                        </div>
                        <div class="box7" id="box">
                            <label for="" class="course">Course:</label><br>
                            <input type="text" name="course" class="form-control" required value="<?php echo $update_course?>"><br>
                        </div>
                    </div>
                    <div class="gender">
                        <div class="box5" id="box">
                            <label for="sex" class="sex">Sex:</label><br>
                            <select name="sex" id="sex" class="form-control" required  ><br>
                                <option value="" disabled selected><?php echo $update_sex ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    <div class="box-7">
                        <input type="hidden" name="update-id" value="<?php echo $update_id ?>">
                    </div>
                    </div>
                    <div class="submit-btn">
                        <input type="submit" name="submit" value="UPDATE" class="btn-update" >
                    </div>
        </form>
    </div>   
<script>
    function confirmUpdate(){
        return confirm("Are you sure you want to update?");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>