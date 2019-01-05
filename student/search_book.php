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
                        
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Serach Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="search_book.php" method="post">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="t1" placeholder="Enter Book name" required>
                                            </td>
                                            <td><input type="submit" name="submit1" value="Search Books" class="btn btn-default" style="background-color: green;color: white;"></td>
                                        </tr>
                                    </table>
                                </form>


                                <?php 

                                if(isset($_POST['submit1'])){

                                    $i = 0;
                                    $bn =$_POST['t1'];

                                $res =mysqli_query($con,"SELECT * FROM add_book WHERE bname LIKE '%$bn%' ");
                                
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                while($row =mysqli_fetch_array($res)){
                                    $i = $i + 1;
                                    echo "<td>";
                                    ?> <img src="../bookimg/<?php echo $row['bimg']; ?>" height="100" width="100">

                                    <?php
                                    
                                   echo "<br>";
                                    echo "<b>".$row['bname']."</b>";
                                    echo "<br>";
                                    echo "<b>Author:-".$row['bauthor']."</b><br>";
                                    echo "<b>"."Avaialble :".$row['aqty']."</b>";
                                    echo "</td>";

                                    if($i ==2){
                                        echo "</tr>";
                                        echo "<tr>";
                                        $i =0;
                                    }

                                    

                                }


                                } else{

                                    $i = 0;

                                $res =mysqli_query($con,"SELECT * FROM add_book");
                                
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                while($row =mysqli_fetch_array($res)){
                                    $i = $i + 1;
                                    echo "<td>";
                                    ?> <img src="../bookimg/<?php echo $row['bimg']; ?>" height="100" width="100">

                                    <?php
                                    
                                   echo "<br>";
                                    echo "<b>".$row['bname']."</b>";
                                    echo "<br>";
                                    echo "<b>Author:-".$row['bauthor']."</b><br>";
                                    echo "<b>"."Avaialble :".$row['aqty']."</b>";
                                    echo "</td>";

                                    if($i ==2){
                                        echo "</tr>";
                                        echo "<tr>";
                                        $i =0;
                                    }

                                    

                                }


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


        