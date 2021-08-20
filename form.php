<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-for input data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    body {
        background-color: skyblue;
    }

    .form {
        width: 50%;
        margin: auto;

    }

    label {
        font-weight: 500;
    }
    </style>
</head>

<body>

    <?php

$con = mysqli_connect ("localhost", "root" ,"", "task" ) ; 
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mob = $_POST['mobile'];
    $desig = $_POST['designation'];
    $gender = $_POST['gender'];
  //  $h1 = $_POST['h1'];
  //  $h2 = $_POST['h2'];
  //  $h3 = $_POST['h3'];
   // $h4 = $_POST['h4'];

    
    $sql = "INSERT INTO `user_info`(`fname`, `lname`, `email`, `dob`, `mobile`, `designation`, `gender`,`hobbies`) VALUES ('$fname','$lname','$email','$dob','$mob','$desig','$gender'";
    if(isset($_POST['h'])){
        $sql.=",'";
        foreach($_POST['h'] as $hob){
            
            $sql.="$hob ";
        }
        $sql.="'";
    }
    
    $sql.=")";
    // echo $sql;
    mysqli_query($con,$sql);
    
}


?>


    <div class="form">
        <form method="POST">
            <a href="user-info.php"> go to user data</a>
            <h3 align="center">Insert User Data</h3>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" placeholder="First Name" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" placeholder="Date of Birth" name="dob" required>
            </div>
            <div class="form-group">
                <label for="mno">Mobile:</label>
                <input type="text" class="form-control" placeholder="Mobile no" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="desig">Designation:</label>
                <input type="text" class="form-control" placeholder="Designation" name="designation" required>
            </div>

            <label for="gender">Gender: </label><br>
            <div class="form-check-inline">
                <label class="form-check-label">

                    <input type="radio" class="form-check-input" name="gender" value="Male">Male
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Female">Female
                </label>
            </div><br><br>

            <label for="gender">Hobbies: </label><br>

            <div class="form-check">
                <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" name="h[]" value="Dance">
                    Dance
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" name="h[]" value=" Travel"> Travel
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="h[]" value="Singing">Singing
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" name="h[]" value="Cricket"> Cricket
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>