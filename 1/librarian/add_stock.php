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
                <h3>Books Info</h3>
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
                        <h2>Add Stock</h2>
                        <h2 class="pull-right" style="margin-right: 130px;">Have A New Book ? &nbsp;&nbsp;<a class="btn btn-default" href="add_book.php">Add Book</a></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td><input type="text" name="bookname" class="form-control" placeholder="Book name" required="" /></td>
                                </tr>
                                
                                
                                <tr>
                                    <td> <label>Purchase date</label>
                                        <input type="date" name="purchase_date" class="form-control" placeholder="Purchase_Date" required="" /></td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="qty" class="form-control" placeholder="Book Quantity" required="" /></td>
                                </tr>
                               
                                
                                <tr>
                                    <td><input type="submit" name="submit" class="btn btn-default submit" value="Add Book" style="background: green;color: #fff;" /></td>
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
        include('footer.php');

        if(isset($_POST['submit']))
        {
            $bname=$_POST['bookname'];
             
            
            $buydate=$_POST['purchase_date'];
            $b_qty=$_POST['qty'];
            

           

             $sql1 = "SELECT * FROM `add_book`";
             $res = mysqli_query($con,$sql1);
             
             $flag = 0;$nnn=""; $v=0;
             
             while($d =mysqli_fetch_array($res))
             {
                $a = strtoupper($bname);
                if($a == strtoupper($d['bname']) )
                {
                    /**/
                    $flag = 1;
                    $nnn = strtoupper($d['bname']);
                   


                    break;
                }

             }

             if($flag == 0)
             {
                echo "<script> alert('Book Not exists.');</script> ";
             }

             else
             {
                
               
                
              $lw =  strtolower($nnn);
            $qry = "UPDATE `add_book` SET bqty = bqty +'$b_qty' , aqty = aqty + '$b_qty' WHERE bname = '$nnn' or bname= '$lw' ";

            $run=mysqli_query($con,$qry);

           

            if($run){
                ?>
<script type="text/javascript">
    alert("Book Added Successfully");

</script>
<?php
            }
            else{
                ?>
<script type="text/javascript">
    alert("Error!!!!");

</script>
<?php
            }
}


        
    }
    

        ?>
