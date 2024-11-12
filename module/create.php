<?php

include 'connection.php';


if(isset($_POST['submit'])){

    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $sex = $_POST['sex'];

    $Sqlinsert = "INSERT INTO `student` VALUE (null, '$f_name', '$m_name', '$l_name', '$email', '$age', '$course', '$sex')";
    $Queryinsert = mysqli_query($connection, $Sqlinsert);

}
echo '<script>alert("Successfully Added!")</script>';
echo '<script>window.location.href="student_form.php"</script>';


?>