

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
                        <h3>Return Books</h3>
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
                                                <select name="enr" class="form-control">
                               
                                       <?php 

                                            $res=mysqli_query($con,"SELECT rollno from issue_book where retdate ='' ");
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
                                                        <input type="submit" name="submit1" class="btn btn-default" value="Search">
                                                    </td>
                                                </tr>
                                        </table>

                                    </form>

                                    <?php 
                                    if(isset($_POST['submit1'])){

                                      $res=mysqli_query($con,"SELECT * from issue_book where rollno ='$_POST[enr]' AND retdate='' "); 
                                      
                                      ?>

                                      <table class="table table-bordered">
                                          <tr>
                                              <th>Student Roll NO</th>
                                              <th>Student Name</th>
                                              <th>Student Sem</th>
                                              <th>Student Contact</th>
                                              <th>Student Email</th>
                                              <th>Book Name</th>
                                              <th>Book Issue Date</th>
                                              <th>Return Books</th>
                                          </tr>

                                          

                                      <?php

                                        /*echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>"; echo "Student Roll NO"; echo "</th>";
                                        echo "<th>"; echo "Student Name"; echo "</th>";
                                        echo "<th>"; echo "Student Sem"; echo "</th>";
                                        echo "<th>"; echo "Student Contact"; echo "</th>";
                                        echo "<th>"; echo "Student Email"; echo "</th>";
                                        echo "<th>"; echo "Book Name"; echo "</th>";
                                        echo "<th>"; echo "Book Issue Date"; echo "</th>";
                                        echo "</tr";

                                        echo"<tr> <td>  </td></tr>";*/

                                        while($row = mysqli_fetch_array($res)){
                                            ?>
                                            <tr>
                                                <?php
                                              echo "<td>"; echo $row['rollno']; echo "</td>";
                                              echo "<td>"; echo $row['name']; echo "</td>";
                                              echo "<td>"; echo $row['ssem']; echo "</td>";
                                              echo "<td>"; echo $row['scontact']; echo "</td>";
                                              echo "<td>"; echo $row['semail']; echo "</td>";
                                              echo "<td>"; echo $row['bname']; echo "</td>";
                                              echo "<td>"; echo $row['idate']; echo "</td>";

                                              echo "<td>"?><a href="return.php?id=<?php echo $row['id']; ?>">Return Book</a><?php echo "</td>";
                                          }
                                              ?>

                                          </tr>
                                      </table>

                                            <?php
                                            /*echo "<tr>";
                                            echo "<td> hai </td>";
                                            echo "<td> helo </td>";

                                            echo "</tr>";*/

                                      

                                      /*echo "</table>";*/
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


        