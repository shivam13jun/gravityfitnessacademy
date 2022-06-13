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
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="Email">Your Email (required)</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="Email">Contact No (required)</label>
    <input type="text" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="form-group">
    <label for="Email">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" required>
  </div>
  <div class="form-group">
    <label for="YourMessage">Your Message</label>
    <textarea class="form-control" id="message" rows="3"  name="message" required></textarea>
  </div>
  <div class="form-group">
    <label for="YourMessage">Please Verify You Are Human</label>
    <div id="checkbox" name="checkbox" class="g-recaptcha"  aria-required="true" data-sitekey="6LeZOvseAAAAALjCdP6nQAw2OmY9hRZd_A2-6yIH" required></div>
    
   
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
        $subject =$_POST['subject'] ;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
       
      
        $txt="\r\n Subkject:".$subject."\r\n Full Name:".$name."\r\n Email:".$email."\r\n Contact No:".$phone."\r\n Message:".$message;
        $from = $_POST['email']; 
        $headers = "From: $from";
        mail($to ,$subject,$txt,$headers);
        
        $sql="INSERT INTO contact_us( name, email, phone, message, subject) VALUES( '$name', '$email', '$phone', '$message', '$subject')";
        
       $result=mysqli_query($conn,$sql);
       
      
        if($result){
        echo  "<script>
        
        alert('Thank You For Contacting Us! our executive team will call you soon!');
        window.location='contact.php' ;
       </script>";
        }
        else{
            echo "failed";
        }
}
     
    }
   
       
  
 ?>

<?php include("footer-1.php");?>