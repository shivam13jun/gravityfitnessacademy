<?php
include ('../conn.php');
include ('header.php');
session_start();
if(isset($_SESSION['admin_login']) && $_SESSION['admin_user']!=''){

}else{
   header('location:login.php');
}
// for delete images
if(isset($_GET['delete'])){
$del=mysqli_real_escape_string($conn,$_GET['delete']);
          
          $delete="delete from image where id='$del'";
          mysqli_query($conn,$delete);
}
// for update images
 
?>


         <?php
        

         $sql="select * from image order by id";
         $result=mysqli_query($conn,$sql);
         

         ?>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Slider</h4>
                           <h6><a href="add-slider.php">Add Slider</a></h6>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th >ID</th>
                                       <th>Product Image</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $count=1;
      
                                    while($row=mysqli_fetch_assoc($result)) {?>
                                     
                                    <tr>
                                       <td class="serial"><?php echo $count++ ?></td>
                                       <td><?php echo $row['id'] ?></td>
                                       <td><img class="d-block w-25" src="../img/<?php echo $row['image']?>" alt="Second slide"></td>
                                       <td><a class="d-block w-25" href="<?php echo $row['link']?>" alt="Second slide"><?php echo $row['link']?></a></td>
                                        <td><a class="btn btn-danger" href="slider.php?delete=<?php echo $row['id']; ?>">Delete</a>
                                        <a class="btn btn-primary" href="edit_slider.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
                                        
                                    </tr>
                     
                                 </tbody>
                                 <?php }
                                 ?>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         <div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; <?php echo date('Y');?> Desi Nutri
                  </div>
                  <div class="col-sm-6 text-right">
                     Designed by <a href="https://colorlib.com/">Colorlib</a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>
