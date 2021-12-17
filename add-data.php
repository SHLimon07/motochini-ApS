<?php 

 //add database

 require_once('config.php');
 
 if(isset($_GET['success'])){
     echo '<div class="alert alert-success" role="alert">
Data updated successfully
</div>';
 }
 
       $sql = $conn->query('SELECT * FROM about ');
                      
               
                           
?>

<html lang="en-US">
<head>
<title>Add Contents</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="Keywords" content="">

<meta name="Description" content="">

<link rel="icon" href="" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>
<body>
<?php 
foreach ($sql as $sql){?>
   



<div class='container mt-5'>
<form action='update-data.php'>
  <div class="form-group">
    <input type="text" class="form-control" value='<?php  echo $sql['about_title'];?>' name='about_title' id="email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['about_title_text'];?>' name='about_title_text' id="">
  </div>  
  <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['img_title'];?>' name='img-title' id="">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['img_title_text'];?>' name='img_title_text' id="pwd">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['crew_title'];?>' name='crew_title' id="pwd">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['crew_text'];?>' name='crew_text' id="pwd">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['portfolio_title'];?>' name='portfolio_title' id="pwd">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['portfolio_sub_title'];?>' name='portfolio_sub_title' id="pwd">
  </div>
    <div class="form-group">
    <input type="text" class="form-control"  value='<?php  echo $sql['portfolio_text'];?>' name='portfolio_text' id="pwd">
  </div>

  <button type="submit" name='submit' class="btn btn-primary">Submit</button>

 </form> 

</div>
<?php } ?>

</body>
</html>