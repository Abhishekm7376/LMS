<?php
include('check_session.php');
?>
<?php
include('header.php');
include('../dbcon.php');
$du = $_SESSION['user'];
mysqli_query($con, "UPDATE msgs SET read1='yes' WHERE duser ='$du' ");
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Messages</h3>
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
                                
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                    </tr>

                                    <?php
                                    $res = mysqli_query($con,"SELECT * FROM msgs WHERE duser = '$du' order by id desc");
                                    while($row = mysqli_fetch_array($res))
                                    {
                                        $us = $row['suser'];
                                        $run = mysqli_query($con,"SELECT * FROM librarian_reg WHERE username ='$us'");
                                    while($row1 = mysqli_fetch_array($run))
                                    {
                                        $fullname = $row1['fname']." ".$row1['lname'];
                                    }

                                        echo "<tr>";
                                        echo "<td>"; echo $fullname; echo "</td>";
                                        echo "<td>"; echo $row['title']; "</td>";
                                        echo "<td>"; echo $row['msg']; "</td>";

                                        
                                        echo "</tr>";
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