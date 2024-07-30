
<?php
include './header.php';
?>
<h1 style="color:seagreen;"><i>Here are the Messages</i></h1><br>


            	

    <div class="container align-content-center">
    <?php
      include './db/conn.php';
      $sql= "select * from string_info  ";
      $output=mysqli_query($conn,$sql);
      if(mysqli_num_rows($output)>0)
      {
      while($row = mysqli_fetch_assoc($output)) {
     ?>
      <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
              <b>String_id : </b> <b><?php echo $row['string_id']; ?></b><br>
              <b>Message: </b> <?php echo $row['message']; ?><br>
             
            </p>

      </table>
<?php }} ?>

          </div>
          </div>
          <form method="POST" action="delete.php" class="row g-3">
                        
  <div class="col-md-2">
    <input type="number" class="form-control" id="pkInput" name="pkInput" placeholder="String_id" style=background-color:lightpink required>
</div>
<div class="col-md-6">
    <input type="submit" class="btn btn-info " style=background-color:blue;color:white value="Delete Record">
  </div>
      </form>
      