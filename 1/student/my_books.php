<?php
include('check_session.php');
?>
<?php

include('header.php');
include('../dbcon.php');

$user = $_SESSION['user'];
$d="";

$sql = "SELECT * FROM issue_book WHERE suser='$user'";
$run = mysqli_query($con,$sql);

/*$d = mysqli_fetch_array($run);*/

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
                                <h2>My Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Student Roll NO</th>
                                        <th>Issued Book Name</th>
                                        <th>Issue Date</th>
                                        <th>Return Date</th>
                                        

                                    </tr>
                                    
                                    <?php 
                                        
                                        while($row = mysqli_fetch_array($run))
                                        {
                                            ?>

                                            <tr>
                                                <td ><?php echo $row['rollno']; ?></td>
                                                <td><?php echo $row['bname']; ?></td>
                                                <td><?php echo $row['idate'] ?></td>
                                                <td><?php echo $row['retdate'] ?></td>

                                                
                                            </tr>

                                            <?php
                                        }
                                    ?>

                                </table>
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