<?php include("header-1.php");?>

<div class="container">
    <div class="row">
    

 


<div class="col-lg-12">
    <div class="contact-heading">
 <h2>Contact Us</h2>
    </div>
<form action="" id="my_captcha_form" method="post">
  <div class="form-group">
    <label for="Name">Your Name (required)</label>
    <input type="text" class="form-control" id="name" name="name" >
  </div>
  <div class="form-group">
    <label for="Email">Your Email (required)</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="Email">Contact Number (required)</label>
    <input type="text" class="form-control" id="email" name="phone">
  </div>

  <div class="form-group">
    <label for="Email">City</label>
    <input type="text" class="form-control" id="subject" name="city">
  </div>
  <div class="form-group">
    <label for="YourMessage">State</label>
    <input type="text" class="form-control" id="subject" name="state">
    
   
  </div>
  <div class="form-group">
    <label for="YourMessage">Country</label>
    <input type="text" class="form-control" id="subject" name="country">
    
   
  </div>
  <div class="form-group">
    <label for="YourMessage">Qualification</label>
    <input type="text" class="form-control" id="subject" name="qualification1">
    <input type="text" class="form-control" id="subject" name="qualification2">
    
   
  </div>
  <div class="form-group">
    <label for="YourMessage">Fitness Certifications</label>
    <input type="text" class="form-control" id="subject" name="certification1">
    <input type="text" class="form-control" id="subject" name="certification2">
    <input type="text" class="form-control" id="subject" name="certification3">
    <input type="text" class="form-control" id="subject" name="certification4">
    
   
  </div>
  <div class="form-group">
    <label for="YourMessage">Experience in Years or Months<small class="text-danger">(Please Mention)</small></label>
    <input type="text" class="form-control" id="subject" name="experience">
   
    
   
  </div>
  <div class="form-group">
    <label for="YourMessage">Fitness Certifications</label>
    <div id="checkbox" name="checkbox" class="g-recaptcha"  aria-required="true" data-sitekey="6LeZOvseAAAAALjCdP6nQAw2OmY9hRZd_A2-6yIH"></div>
    
   
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br>
<p>
     

			

	

		
    </div>
    </div>



<?php 

include ("conn.php");
if(isset($_POST['submit']))
{
    $secret = '6LeZOvseAAAAADjEeYLAubCQxeoNo7T-yCSePzed';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success){
 

        $to = "info@gravityfitnessacademy.in";
        $subject = "New Candidate ";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $qualification1 = $_POST['qualification1'];
        $qualification2 = $_POST['qualification2'];
        $certification1 = $_POST['certification1'];
        $certification2 = $_POST['certification2'];
        $certification3 = $_POST['certification3'];
        $certification4 = $_POST['certification4'];
        $experience = $_POST['experience'];
        $txt=" Full Name:".$name."\r\n Email:".$email."\r\n Contact No:".$phone."\r\n City:".$city."\r\n State:".$state."\r\n Country".$country."\r\n Qualification1:".$qualification1."\r\n Qualification2:".$qualification2."\r\n Certification1:".$certification1."\r\n Certification2:".$certification3."\r\n Certification3:".$certification3."\r\n Certification4:".$certification4;
        $from = $_POST['email']; 
        $headers = "From: $from";
        mail($to ,$subject,$txt,$headers);
        
        $sql="INSERT INTO job_placement( name, email, phone, city, state, country, qualification1, qualification2, certification1, certification2, certification3, certification4, experience ) VALUES( '$name', '$email', '$phone', '$city', '$state', '$country', '$qualification1', '$qualification2', '$certification1', '$certification2', '$certification3', '$certification4', '$experience' )";
        
       $result=mysqli_query($conn,$sql);
       
      
        if($result){
        echo  "<script>
        
        alert('Thank You For Contacting Us! our executive team will call you soon!');
        window.location='job_placement.php' ;
       </script>";
        }
        else{
            echo "failed";
        }
}
     
    }
   
       
  
 ?>


<?php include("footer-1.php");?>