<?php
include('check_session.php');
?>

<?php
    

include('header.php');
include('../dbcon.php');
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <!--<div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                            	<form  method="post" action="display_book.php" name="f1">
                                <input type="text" class="form-control" name="name" placeholder="Search book..">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name=submit >Go!</button>
                    </span>

                </form>

                
                            </div>
                        </div>
                    </div>-->
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Display Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                               
                                    

                                $res = mysqli_query($con,"SELECT * FROM add_book");
                                 echo "<table class='table table-bordered'>";
                                 echo "<tr>";
                                 echo "<th>"; echo "Book Name"; echo "</th>";
                                 echo "<th>"; echo "Image"; echo "</th>";
                                 echo "<th>"; echo "Author Name"; echo "</th>";
                                 echo "<th>"; echo "Publication"; echo "</th>";
                                 echo "<th>"; echo "Purchase Date"; echo "</th>";
                                 echo "<th>"; echo "Book price"; echo "</th>";
                                 echo "<th>"; echo "Book Quantity"; echo "</th>";
                                 echo "<th>"; echo "Available Quantity"; echo "</th>";
                                 
                                 echo "</tr>";

                                while($row=mysqli_fetch_array($res))
                                {
                                    echo "<tr>";
                                	echo "<td>"; echo $row['bname']; echo "</td>";
                                    echo "<td>"; ?> <img style="max-width:100px; height: 100px;" src="../bookimg/<?php echo $row['bimg']; ?>" >  <?php echo "</td>";
                                    echo "<td>"; echo $row['bauthor']; echo "</td>";
                                    echo "<td>"; echo $row['bpublication']; echo "</td>";
                                    echo "<td>"; echo $row['buydate']; echo "</td>";
                                    echo "<td>"; echo "₹".$row['bprice'].".00"; echo "</td>";
                                    echo "<td>"; echo $row['bqty']; echo "</td>";
                                    echo "<td>"; echo $row['aqty']; echo "</td>";
                                    
                                    echo "</tr>";
                                 
                                }

                                echo "</table>";
                            


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