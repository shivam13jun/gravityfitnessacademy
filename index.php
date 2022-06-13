<?php include ("header-1.php");?>

   <div class="owl-carousel home-slider owl-theme">
<?php 

$sql="select * from image";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  

?>
    <div class="item">
        <a href="<?php echo $row['link']?>">
        <img src="img/<?php echo $row['image']?>" class="slider-carousel">
            </a>
        </div>
   

    <?php } ?>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-4">
          <img src="about-1.jpg" class="w-100"  id="index-about">
      </div>
      <div class="col-md-8">
          <div class="upper-title">
<h1>GRAVITY <br> <span class="fitnes"> FITNESS</span> <br> <span class="academy">ACADEMY </span>  </h1>
</div>
              <p><strong>Our Mision:</strong></p>
<p>To give the best in fitness education for 
individuals looking for best in fitness education
for learning and even to take fitness as a 
career. Our courses are offered at very reasonable
fees in order to make it affordable to all. But
still keeping our course contents and concepts
on the basis of international fitness standards..
</p>
<p>Our entire course module is based on scientific facts,
observed and accepted internationally. our education
on fitness training is based on the guidelines of
International Fitness authorities and are one of the
most respected and preferred sports and fitness
authorities in the world.
</p>

<div class="action">
         <a class="btn btn-sm btn-danger" href="about.php">
            Read More
        </a>
      </div>
      </div>
      
  



  </div>
    
</div>
<section class="blog-section">
    <div class="container">
            <h2 class="blog-heading" >Our Blogs</h2>
        <div class="row">
            <div class="col-lg-4">
              <a href="blog-1.php">
                <div class="item-image">
                    <img src="blog/blog-1.jpg" class="img-fluid" alt="image">
                </div>
                <div class="blog-content">
                    <strong class="text-danger">Trends That Will Change The Face Of The Fitness Industry In 2022</strong>
                    <p>Fitness Trends can influence people who work-out and those involved in the fitness business. According to a recent survey, the wellness industry...</p>
                </div>
            
            </div>
            <div class="col-lg-4">
            <a href="blog-2.php">
                <div class="item-image">
                    <img src="blog/blog-2.jpg" class="img-fluid" alt="image">
                </div>
                <div class="blog-content">
                   <strong class="text-danger">Major Reasons Why The Indian Fitness Industry Is Booming</strong>
                    <p>The Indian fitness sector in India has evolved drastically from the days of local ‘Akhadas’ to modern day wrestling which is a part of the Internationa....</p>
                </div> 
            </a>
            </div>
            <div class="col-lg-4">
            <a href="blog-3.php">
                <div class="item-image">
                    <img src="blog/blog-3.jpg" class="img-fluid" alt="image">
                </div>
                 <div class="blog-content">
                   <strong class="text-danger">3 Fitness Start-Ups Generating Great Revenue In The Fitness Industry</strong>
                    <p>Providing effective health & fitness products and services is surely considered one of the important facets for brands today. Apart from the big...</p>
                </div> 
            </a>
            </div>
    </div>

</section>

    
 <?php include ("footer-1.php");?>
