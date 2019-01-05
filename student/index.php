<?php
session_start();
include('../dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/sweetalert.min.js"></script>
      <script type="text/javascript">
        function f1(){
            swal("Hai" );
        
        }
    </script>

    <title>Student Login Form | LMS </title>

<style>
    @import url('http://fonts.googleapis.com/css?family=Poppins:400,500');
body{
background-image: url(../images/pic4.jpg);
height: 100vh;
background-size: cover;
background-position: center;
}
.login-page{
    width: 360px;
    padding: 10% 0 0;
    margin: auto;
}
.form{
position: relative;
z-index: 1;
background:#000;
max-width: 360px;
margin:0 auto 100px;
padding: 45px;
text-align: center;
background: rgb(0,0,0,.5);
border-radius: ;
border:10;
}
.form input{
font-family: "Poppins", sans-serif;
outline: 1;
background:  #fff;
width: 100%;
border:0;
margin: 0 0 15px;
box-sizing: border-box;
font-size:18px;
}
.form input[type="submit"]{
font-family: "Poppinss", sans-serif;
text-transform: uppercase;
outline: 0;
background: #4CAF50;
width: 100%;
border:15px;
padding: 15px;
color: #FFFFFF;
font-size: 14px;
cursor: pointer;
}
.form button:hover,.form button:active{
background: #43A047;

}
.form .message{
margin: 15px 0 0;
color: aliceblue;
font-size: 20px;
}
.form .message a{
color: #4CAF50;
text-decoration: blink;

}
.form .register-form{
display: none;

}
h2{
    margin-left: -10px;
    margin-top: -10px;
    font-family: 'Poppins';
    color: #fff;
}


.navbar{
  background-color: #23415C;
  padding: 1% 0;
  font-size: 1.2em;

}

.navbar-brand{
  min-height: 55px;
  padding: 0 15px 5px;
}

.navbar-default .navbar-nav li a{
  color: #d5d5d5;
}

.navbar-default .navbar-nav li a:hover , .navbar-default .navbar-nav li a.active{
  color: #fff;
}




</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle nvigator</span>
          <span class ="icon-bar"></span>
          <span class ="icon-bar"></span>
          <span class ="icon-bar"></span>

        </button>

        <a class="navbar-brand" href="../index.html"><img src="../images/1.PNG"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
          <li><button type="button" class="btn btn-outline-secondary btn-lg"><a  style="color: #000; text-decoration:none;  "  href="../librarian/">Admin Login</a></button></li>
          
        </ul>
        
      </div>
    </div>
  </nav>

    
<div class="login-page">
<div class="form">
    <h2>Student Login</h2><br>
<form action="" method="post" class="register-form">
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
                    </div>
                    <div>
                        <input type="number" class="form-control" placeholder="SEM" name="sem" required="" min="1" max="8"  />
                    </div>
                    <div>
                        <input type="number" class="form-control" placeholder="Enrollment No" name="enrollmentno" required="" size="10"  />
                    </div>
<!--
<input type="text" placeholder=" First name"/>
<input type="text" placeholder=" Last name"/>
<input type="email" placeholder=" E-mail"/>
<input type="text" placeholder=" Create User Name"/>
<input type="password" placeholder=" password"/>
<input type="number" placeholder=" Contact"/>
<input type="number" placeholder=" Semester"/>
<input type="number" placeholder=" Enrollment Number"/>-->
<input type="submit" name="submit2" value="Create Account">
<p class="message">Already Registered? <a href="#">Login</a>
</p>

<?php
            include('../dbcon.php');
            
            
            if(isset($_POST['submit2']))
                {
                 

                 $fname=$_POST['firstname'];
                 $lname=$_POST['lastname'];
                 $user=$_POST['username'];
                 $pass=$_POST['password'];
                 $email=$_POST['email'];
                 $contact=$_POST['contact'];
                 $sem=$_POST['sem'];
                 $rollno=$_POST['enrollmentno'];

                 $sql1 = "SELECT * FROM `student_reg`";
                 $run1 = mysqli_query($con,$sql1); $flag = 0;

                 while($d = mysqli_fetch_array($run1))
                 {
                    if($user == $d['username'])
                    {
                        $flag = 2;
                        break;
                    }
                    if($email == $d['email'])
                    {
                        $flag = 1;
                        break;
                    }

                    if($rollno == $d['rollno'])
                    {
                        $flag = 3;
                        break;
                    }


                 }

                 if( $flag == 3 || $flag == 2 || $flag == 1)
                 {

                 if($flag == 2 )
                 {
                    ?>
                      
                    <script type="text/javascript">
                        swal("Username Already exists!!!");
                    </script>
            
                    <?php
                 }

                 if($flag == 3 )
                 {
                    ?>
                      
                    <script type="text/javascript">
                        swal("Enrollment Number Already exists!!!");
                    </script>
            
                    <?php
                 }

                 if ($flag == 1) {
                     
                     ?>
                    <script type="text/javascript">
                        swal("Email Already exists!!!");
                    </script>
                    <?php
                 }
                 }
                 else{
                 $sql = "INSERT INTO `student_reg`(`fname`, `lname`, `username`, `password`, `email`, `contact`, `sem`, `rollno`,`status`) VALUES ('$fname','$lname','$user','$pass','$email','$contact','$sem','$rollno','NO')";

                 $run = mysqli_query($con,$sql);

                 if($run == true){
                    
                    ?>
                     <script type="text/javascript">
                        swal("Registration successfully, You will able to Login After approval");
                    </script>

                    <?php
                 }

                 else 
                    echo "Error!!!!!";
            }
        }


            ?>

</form>

<!--  Login Form -->
<form name="form1" action="" method="post" class="login-form">
<input type="text" name="username" placeholder=" User name"/>
<input type="password"  name="password" placeholder=" password"/>
<input type="submit" name="submit1" value="Login">
<p class="message">Not Registered? <a href="#">Register</a>
</form>
<?php


if(isset($_POST['submit1']))
{
    $qry = "SELECT * FROM `student_reg` WHERE  username='$_POST[username]' AND password = '$_POST[password]' AND status='yes'";
    $run = mysqli_query($con,$qry);
    $count = mysqli_num_rows($run);

    if($count <= 0)
    {
        ?>

        <script type="text/javascript">
                        swal("Invalid Username or Password!!!");
                    </script>

        <?php
    }
    else{
        $_SESSION['user'] = $_POST['username'];
        ?>
        <script type="text/javascript">
            window.location= 'my_books.php?uid=<?php echo $_POST['username'] ?>';
        </script>

        <?php
    }
}

?>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" >
</script>
<script >
$('.message a').click(function (){
$('form').animate({height:"toggle", opacity: "toggle"}, "slow");    
});
</script>
</body>
</html>
