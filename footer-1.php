</div>
<!-- Background image -->
      <!-- Footer -->
       <footer class="page-footer font-small mdb-color " style="margin-top:50px;">

<!-- Footer Links -->
<div class="container">

  <!-- Footer links -->
  <div class="row text-center">

    <!-- Grid column -->
    <div class="col-md-4  col-lg-4 col-xl-4 mx-auto mt-3 " style="line-height: 1.3;">
      <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
      <p class="s break-word">To give the best in fitness education for individuals looking for best in fitness education for learning and even to take fitness as a career. Our courses are offered at very reasonable fees in order to make it affordable to all.
      </p>
       
      <i class="fas fa-envelope mr-3"></i><a href="mailto:info@.gravityfitnessacademy.in">info@.gravityfitnessacademy.in</a>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4  col-lg-4 col-xl-4 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Our Services</h6>
      <p>
      <a class="f-link" href="cpt.php">Workshop Certification Peronal Training</a>
      </p>
      <p>
      <a class="f-link" href="kettle-bell.php">Workshop Kettle Bell & Resistance Training</a>
      </p>
      <p>
      <a class="f-link" href="Workshop Sport Ergogenic Aid.php">Workshop Sport Ergogenic Aids</a>
      </p>
      <p>
      <a class="f-link" href="Workshop On Steroids and Its Alternatives.php">Workshop On Steroids and Its Alternatives</a>            
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4  col-lg-4 col-xl-4 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
      <p>
        <a class="f-link" href="index.php">Home</a>
      </p>
      <p>
        <a class="f-link" href="about.php">About-Us</a>
      </p>
    
      <p>
        <a class="f-link" href="contact.php">Contact-Us</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    

  </div>
  <!-- Footer links -->

  <hr>

  

      <!--Copyright-->
      <p class="text-center">© 2022 Copyright:
        <a href="https://desinutri.in/">
          <strong> Desinutri</strong>
        </a>
      </p>

</div>
<!-- Footer Links -->
 <!-- Social buttons -->
 <div class="text-center text-md-right">
        <ul class="list-unstyled footer-icon">
          <li class="list-top">
           
            <i class="fa-brands fa-facebook-square social-footer-icon"></i>
            
          </li>
          <li  class="list-top">
            
              <i class="fab fa-twitter social-footer-icon"></i>
           
          </li>
          <li  class="list-top">
           
            <i class="fa-brands fa-instagram social-footer-icon"></i>
           
          </li>
        </ul>
      </div>
</footer>
<!-- Footer -->
</div>
<!-- Background image -->

    <!-- Grid column -->
  

     


<!-- <div tabindex="-1" role="dialog" id="popup" >
<div class="modal-dialog" role="document">
  <div class="modal-content popup">
    <div class="modal-header">
      <h5 class="modal-title">Modal title</h5>
      <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form id="form">
        <div class="form-group">
          <h5 class="h5">Enquiry Form</h5>
        
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://kit.fontawesome.com/e7e9e7561f.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="owl-carowsel/owl.carousel.min.js"></script>
<script>


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
$('.cpt-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
      
         0:{
            items:1
        },
        800:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


  
 document.getElementById("my_captcha_form").addEventListener("submit",function(evt)
  {
  
  var response = grecaptcha.getResponse();
  if(response.length == 0) 
  { 
    //reCaptcha not verified
    alert("please verify you are humann!"); 
    evt.preventDefault();
    return false;
  }
  //captcha verified
  //do the rest of your validations here
  
});
    
  
  




</script>
</body>
</html>