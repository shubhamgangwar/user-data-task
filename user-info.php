<?php 

$con = mysqli_connect ("localhost", "root" ,"", "task" ) ; 
$qry = "select * from user_info";
$result = mysqli_query($con,$qry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <a href="form.php">Back</a>
    <div class="container" style="overflow-x:auto;">
        <h2>User info Table</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Mobile no</th>
                    <th>Designation</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                </tr>
            </thead>

            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
                
             ?>
            <tbody>
                <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                </tr>

            </tbody>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>