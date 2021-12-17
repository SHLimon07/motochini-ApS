<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');


require_once('config.php');


               $about_title=$_GET['about_title'];
               $about_title_text=$_GET['about_title_text'];
               $img_title=$_GET['img-title'];
               $img_title_text=$_GET['img_title_text'];
               $crew_title=$_GET['crew_title'];
               $crew_text=$_GET['crew_text'];
               $portfolio_title=$_GET['portfolio_title'];
               $portfolio_sub_title=$_GET['portfolio_sub_title'];
               $portfolio_text=$_GET['portfolio_text'];
               
               
$update=$conn->query("UPDATE about SET about_title='$about_title',about_title_text='$about_title_text',img_title='$img_title',img_title_text='$img_title_text',crew_title='$crew_title',crew_text='$crew_text',portfolio_title='$portfolio_title',portfolio_sub_title='$portfolio_sub_title',portfolio_text='$portfolio_text' WHERE id=1 ");
               
       
             
             if($update){
             header("location:add-data.php?success");
         }else{
             header("location:add-data.php?failed");
         }



?>