<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>
<a class="navbar-brand" href="../index.html"><img src="../images/1.PNG"></a>
<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="reg.php" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="number" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div><br>
                    <div>
                        <input type="number" class="form-control" placeholder="SEM" name="sem" required="" min="1" max="8"  />
                    </div>
                    <br>
                    <div>
                        <input type="number" class="form-control" placeholder="Enrollment No" name="enrollmentno" required="" size="10"  />
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
            <?php
            include('../dbcon.php');
            
            
            if(isset($_POST['submit1']))
                {
                 

                 $fname=$_POST['firstname'];
                 $lname=$_POST['lastname'];
                 $user=$_POST['username'];
                 $pass=$_POST['password'];
                 $email=$_POST['email'];
                 $contact=$_POST['contact'];
                 $sem=$_POST['sem'];
                 $rollno=$_POST['enrollmentno'];


                 $sql = "INSERT INTO `student_reg`(`fname`, `lname`, `username`, `password`, `email`, `contact`, `sem`, `rollno`,`status`) VALUES ('$fname','$lname','$user','$pass','$email','$contact','$sem','$rollno','NO')";

                 $run = mysqli_query($con,$sql);

                 if($run == true){
                    
                    ?>
                     <div class="alert alert-success col-lg-12 col-lg-push-0">
                        Registration successfully, You will get email when your account is approved
                    </div>

                    <?php
                 }

                 else 
                    echo "Error!!!!!";
            }


            ?>
</div>
</body>
</html>