

<?php
include('check_session.php');
include('header.php');
include('../dbcon.php');
$d="";
$f = "";
$r="";$l = "";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        
                    </div>

                    <!--<div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>-->
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form name="f1" action="issue_book.php" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                <select name="roll" class="form-control ">
                                                    <?php 
                                                    $res=mysqli_query($con,"SELECT rollno from student_reg");
                                                    while($row = mysqli_fetch_array($res))
                                                    {
                                                        echo "<option>";
                                                        echo $row['rollno'];
                                                        echo "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" name="submit1" class="form-control btn btn-default" value="Search">
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </form>


                                <form action="issue_book.php" method="post">
                                    <?php
                                    if(isset($_POST['submit1'])){
                                        $r = $_POST['roll'];

                                        $qry1 ="SELECT * FROM `student_reg` WHERE rollno = $r; ";
                                       $run = mysqli_query($con,$qry1);
                                       
                                       $d = mysqli_fetch_array($run);
                                       $f = $d['fname'];
                                       $l = $d['lname'];

                                       

                                     
                                   ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                    <label>Name</label>

                                <input class="form-control" type="text" name="name" value="<?php echo $f." ".$l; ?>" >
                            </td>
                            </tr>

                            <tr>
                                <td>
                                <label>Roll NO</label>
                                <input class="form-control" type="text" name="rollno" value="<?php echo $r; ?>" >
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Sem</label>
                                <input class="form-control" type="number" name="s_sem" value="<?php echo $d['sem'];  ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Student_Contact</label>
                                <input class="form-control" type="text" name="conct" value="<?php echo $d['contact'];  ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Student_Mail</label>
                                <input class="form-control" type="email" name="semail" value="<?php echo $d['email'];  ?>">
                            </td>
                        </tr>

                        

                        <tr>
                            <td>
                                <label>Book Name</label>
                                <select name="bname" class="form-control">
                                    <?php
                                                    $res = mysqli_query($con,"SELECT bname from add_book");
                                                    while($row = mysqli_fetch_array($res)){
                                                        echo "<option>";
                                                        echo $row['bname'];
                                                        echo "</option>";

                                                    }

                                                     ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Issue Date</label>
                                                <input type="text" class="form-control" name="bissuedate" value="<?php echo date('d-M-Y'); ?>" >
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Student_Username</label>
                                <input class="form-control" type="text" name="suser" value="<?php echo $d['username'];  ?>" >
                            </td>
                        </tr>

                            <tr>
                                <td>
                                <input class="form-control" type="submit" name="submit" style="background-color: green; color: #fff;" value="Issue Book">
                            </td>
                        </tr>
                                </table>
                            </form>
                            <?php
                        }
                        ?>

                            <?php
                            if(isset($_POST['submit'])){
                                $n = $_POST['name'];
                                $rol = $_POST['rollno'];
                                $u = $_POST['suser'];
                                $s = $_POST['s_sem'];
                                $em = $_POST['semail'];
                                $cn =$_POST['conct'];
                                $bn = $_POST['bname'];
                                $idate = $_POST['bissuedate'];
                                $rd = ""; $flag = 0;

                                $sql1 = "SELECT bname FROM `issue_book` WHERE rollno = $rol AND retdate ='$rd' ";
                                $run1 = mysqli_query($con,$sql1);
                                

                                while ($d = mysqli_fetch_array($run1)) {
                                    
                                    if($bn == $d['bname'])
                                    {
                                        $flag = 1;
                                        break;
                                    }
                                }

                                if($flag == 1)
                                {
                                    ?>
                                    <script type="text/javascript">
                                        alert("This Book is Already Issued to You!");
                                    </script>
                                    <?php
                                }else
                                {


                                $qryy ="UPDATE add_book SET aqty=aqty-1 WHERE bname = '$bn' ";
                                $ress =mysqli_query($con,$qryy) ;

                                

                                $qry = "INSERT INTO issue_book (`name`, `rollno`, `ssem`, `scontact`, `semail`, `bname`, `idate`, `retdate`, `suser`) VALUES ('$n','$rol','s','$cn','$em','$bn','$idate','$rd','$u')";
                                $res =mysqli_query($con,$qry);
                                if($res){
                                   echo "<script> alert('Book issued Successfully') </script>";
                                }
                            }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php
        include('footer.php');
    

        ?>