<?php
include 'read.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/table-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DATA VIEW</title>
</head>
<body>  
<table class="table table-striped" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Middlname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Course</th>
            <th>Age</th>
            <th>Sex</th>
            <th class="action">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($result = mysqli_fetch_assoc($Queryread)){ ?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['Firstname']; ?></td>
                <td><?php echo $result['Middlename']; ?></td>
                <td><?php echo $result['Lastname']; ?></td>
                <td><?php echo $result['Email']; ?></td>
                <td><?php echo $result['Age']; ?></td>
                <td><?php echo $result['Course']; ?></td>
                <td><?php echo $result['Sex']; ?></td>
                <td>
                    <form action="delete.php" method="post" onsubmit="return confirmDelete()" class="del_form">
                        <button name="delete" class="del_btn"><i class="fa-regular fa-trash-can"></i></button>
                        <input type="hidden" name="del_id" value="<?php echo $result['id'] ?>">
                    </form>

                    <form action="update.php" method="post" class="update_form" onsubmit="return confirmEdit()">
                        <button name="update" class="update_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-regular fa-pen-to-square" id="edit"></i>
                        </button>
                        <!-- <button name="update" class="update_btn"><i class="fa-regular fa-pen-to-square" id="edit"></i></button> -->
                        <input type="hidden" name="update_id" value="<?php echo $result['id'];?>">
                        <input type="hidden" name="update_fname" value="<?php echo $result['Firstname'];?>">
                        <input type="hidden" name="update_mname" value="<?php echo $result['Middlename'];?>">
                        <input type="hidden" name="update_lname" value="<?php echo $result['Lastname'];?>">
                        <input type="hidden" name="update_email" value="<?php echo $result['Email'];?>">
                        <input type="hidden" name="update_age" value="<?php echo $result['Age'];?>">
                        <input type="hidden" name="update_course" value="<?php echo $result['Course'];?>">
                        <input type="hidden" name="update_sex" value="<?php echo $result['Sex'];?>">
                    </form>
                </td>
            </tr>
            <?php } ?>
    </tbody>
</table>
    <div class="add-btn">
       <form action="student_form.php" method="post" class="last">
            <button class="add" >ADD <i class="fa-regular fa-plus" style="color: #ffffff;"></i></button>
       </form>
    </div>
</body>
<script>
    function confirmEdit(){
    return confirm("Are you sure you want to edit?");
}
</script>
    <script src="../js/view_table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>