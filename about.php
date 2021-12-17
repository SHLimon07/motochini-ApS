
<?php 

 //add database

 require_once('config.php');
 
 
       $sql = $conn->query('SELECT * FROM about ');
                      
    foreach ($sql as $sql){
    include('header.php');
    ?>


     
    <div class="site-blocks-cover overlay" style="background-image: url(images/aboutuspage.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">About Motochini Aps</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Flexibility, adjusting to the individual needs, trustworthiness</p>
                <div data-aos="fade-up" data-aos-delay="100">
                 
              </div>

            </div>
          </div>
            
        </div>
      </div>

    </div>  
  

    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay=""><?php  echo $sql['about_title'];?></h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100"><?php  echo $sql['about_title_text'];?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="100">
            <figure class="circle-bg">
            <img src="images/aboutus.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto mt-5" data-aos="fade-left" data-aos-delay="100">
            
            <p class="text-black mb-4"><?php  echo $sql['img_title'];?></p>

            <p><?php  echo $sql['img_title_text'];?></p>

           
            
          </div>
        </div>    
        
      </div>  
    </div>



    <section style='background: #EFEFEF;padding:50px 0px'>
        
        <div class='container'>
            
            <div class='row'>
                
                <div class='col-md-12'><h2 class='text-center text-black' data-aos="fade-up" data-aos-delay="100"<?php  echo $sql['crew_title'];?></h2></div>
                
                 <div class='col-md-12'><h2 class="section-title mb-3 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay=""><?php  echo $sql['crew_text'];?></h2></div>
                
                 
            </div>
            
            <div class='row'>
                <div class='card_container' data-aos="fade-up" data-aos-delay="100">
                    
                    <div class='cardAbout cardImg'><img src='images/moto-chini.jpg'  title='' alt=''/></div>
                     <div class='cardAbout cardtest'>
                         
                         <div class='title_area'>
                             
                             <div class='title_heading'><p style='font-size: 13px;' class='text-black'><?php  echo $sql['portfolio_title'];?></p></div>
                             <div class='title_text'><?php  echo $sql['portfolio_sub_title'];?></div>
                             
                         </div>
                         
                         <div class='title_text_area'>
                             
                             <p><?php  echo $sql['portfolio_text'];?></p>
                             
                         </div>
                         
                         
                     </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    



    
    

 





<?php 
include('footer.php');
}
?>