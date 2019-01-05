<?php
include('check_session.php');

include('header.php');
include('../dbcon.php');
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Send Message To Student</h3>
                    </div>

                   <!-- <div class="title_right">
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
                               

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <select name="user" class="form-control select">
                                                    <?php
                                                    $res = mysqli_query($con,"SELECT * FROM student_reg");
                                                    while($row = mysqli_fetch_array($res)){
                                                        ?><option value="<?php echo $row['username'];?>">
                                                            <?php echo $row['username']."(". $row['rollno'] .")"; ?>
                                                        </option> <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" name="title" class="form-control" placeholder="Enter Title"></td>
                                        </tr>

                                        <tr>
                                            <td><textarea name="msg" class="form-control" placeholder="Message"></textarea></td>
                                        </tr>

                                        <tr>
                                            <td><input type="submit" name="submit1" value="Send Message"></td>
                                        </tr>



                                    </table>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
        if(isset($_POST['submit1']))
        {
            $suser =$_SESSION['librarian'];
            $duser =$_POST['user'];
            $title =$_POST['title'];
            $msg =$_POST['msg'];
            $s="no";

            

            $run = mysqli_query($con,"INSERT INTO `msgs`(`suser`, `duser`, `title`, `msg`, `read1`) VALUES ('$suser','$duser','$title','$msg','$s')");
            if($run){
                echo "<script> alert('Message Sent Successfully') </script>";

            }
            else{
                echo "<script> alert ('Message NOT SENT !!!!');</srcipt>";
            }
        }

        ?>


        <?php
        include('footer.php');
    

        ?>