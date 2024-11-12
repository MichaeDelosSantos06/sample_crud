<?php include 'read.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="../style/form_style.css">
</head>
<body>
    <div class="main">
        <h1>REGISTRATION FORM</h1>
        <div class="logo">
            <img src="../img/new logo.png" alt="">
        </div>
        <div class="logo2">
            <img src="img/lspu-logo.png" alt="">
        </div>

        <form action="create.php" method="post" autocomplete="off" id="reg-form">
            <div class="name">
                <div class="box1" id="box">
                    <label for="f_name" class="f-name"><span>*</span>Firstname:</label><br>
                    <input type="text" name="f_name" required>
                </div>
                <div class="box2" id="box">
                    <label for="m_name" class="m-name"><span>*</span>Middlename:</label><br>
                    <input type="text" name="m_name" required>
                </div>
                <div class="box3" id="box">
                    <label for="l_name" class="l-name"><span>*</span>Lastname:</label><br>
                    <input type="text" name="l_name" required>
                </div>
            </div>
            <div class="other">
                <div class="box4" id="box">
                    <label for="" class="email"><span>*</span>Email:</label><br>
                    <input type="email" name="email" required>
                </div>
                <div class="box6" id="box">
                    <label for="" class="age"><span>*</span>Age:</label><br>
                    <input type="number" name="age" required>
                </div>
                <div class="box7" id="box">
                    <label for="" class="course"><span>*</span>Course:</label><br>
                    <input type="text" name="course" required>
                </div>
            </div>
            <div class="gender">
                <div class="box5" id="box">
                    <label for="sex" class="sex"><span>*</span>Sex:</label><br>
                    <select name="sex" id="sex" required>
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="box-btn" id="box">
                <input type="submit" name="submit" class="submit" >
            </div>
        </form>
        <div class="table">
            <a href="view_table.php">View Table >></a>
        </div>
    </div>
    <!-- <script>
        document.getElementById("reg-form").addEventListener("submit", function(){

            // event.preventDefault();
            alert("Successfully Submitted!");
        });
       
    </script> -->
</body>
</html>