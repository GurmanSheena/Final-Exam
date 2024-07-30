<?php
session_start();

    
?>

<?php
include './header.php';
?>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final_Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        
        
        <form class="p-5 rounded shadow" action="recieve.php" method="POST" style="width:30rem">
            <h1 class="text-center pb-5 display-4">Send a Message</h1>
            <?php if (isset($_GET['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php  echo $_GET['error']; ?>
                   
                </div>
    <?php  } ?>
           
    <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="5" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>

       <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="showAll.php" class="ca" style="text-align:right">Show All Records</a>
        </form>
    </div>
   


   <script src="./js/bootstrap.bundle.js"></script>
</body> 
<?php include 'includes/footer.php';
?>




   