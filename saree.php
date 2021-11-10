<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>punjabi</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/punjabi/css/lehenga.css">
                                                                                           <!--font-awesome---------------->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="    sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
<!----bootstrap------------>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>                                                                     <!--------bootstrap---------->
    
</head>
<body> 
  <!-- <section class="top">  -->                                                 <!------------------navbar-------------------------->
<div class="navbar navbar-expand-md" id="f1">
  <a class="nav-link" href="#"><i class="far fa-envelope"></i>&nbsp;&nbsp;namratauniversal@gmail.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
  
    <ul class="navbar-nav mb-3" id="ul1">
         <li class="nav-item d-flex justify-content-between">
          <a class="nav-link " href="#"  data-toggle="modal" data-target="#modalRegisterForm" >Sign Up</a>
              
                   <form action="http://localhost/punjabi/main_insert.php" method="post">  
  <!--------------------Sign up---------------------->
                        <div class="modal fade" id="modalRegisterForm"  role="dialog" aria-labelledby="myModalLabel"
                                  aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                   <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                         <div class="modal-body mx-3">
                         <div class="md-form mb-5">
                                <i class="fas fa-user prefix grey-text">&nbsp;&nbsp;Your name</i>
                                <input type="text" id="orangeForm-name" class="form-control validate" name="name" placeholder="Your name.....">
          
                        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text">&nbsp;&nbsp;Your email</i>
          <input type="email" id="orangeForm-email" class="form-control validate" name="email" placeholder="Your email">
         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text">&nbsp;&nbsp;Your password</i>
          <input type="password" name="password" id="orangeForm-pass" class="form-control validate" placeholder="Your password....">
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
</div>

</form>
</li>

       <li class="nav-item d-flex justify-content-between ">
          <a  class="nav-link "  data-toggle="modal" data-target="#modalLoginForm">Sign in</a>

    <form action="http://localhost/punjabi/login.php" method="post" id="form">
      <div class="modal fade " id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" id="sign_in">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
      <div class="row">             
            <div class="col-md-4">
                  <div class="row" id="login_h"><div class="col-lg-12" id="imgl">
                      <img src="http://localhost/punjabi/images/logo.png" width="100%;">

                    </div>
            </div>
        <div class="row">
           <div class="col-lg-12" id="imgl">
                <img src="https://i.imgur.com/uNGdWHi.png"  class="ml-4" width="90%;">
           </div>
       </div>
      
    </div>
              <!-------------------------------------------->
         <div class="col-md-8">
                <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                 </div>
               <div class="modal-body mx-3">
                 <div class="md-form mb-5">
                   <i class="fas fa-envelope prefix grey-text">&nbsp;&nbsp;Your email</i>
                   <input type="email" name="email" id="defaultForm-email" placeholder="enter your email.." class="form-control validate px-5 w-60">
                   
                 </div>

                 <div class="md-form mb-4">
                  <i class="fas fa-lock prefix grey-text">&nbsp;&nbsp;Your password</i>
                  <input type="password" name="password" placeholder="Enter password..." id="defaultForm-pass" class="form-control validate px-5 w-60">
                 
                </div>

              </div>
                 <div class="modal-footer d-flex justify-content-center" id="login">
                  <button type="submit" class="btn btn-default px-5 ">Login</button>
                </div>
           

            </div>
        </div>


      </div>
      </div>
  </div>
</div>
  </form>
  
</li>
      
    </ul>
  </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="f2">
  <div class="container-fluid">

  <a class="navbar-brand" href="http://localhost/punjabi/index.php">
    <img src="http://localhost/punjabi\images/mainlogo.png" class="logo"></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-white"></span>
  </button>
  <div class="collapse navbar-collapse ml-md-5" id="navbarNav">
    <ul class="navbar-nav " >
      <li class="nav-item "><a class="nav-link active" href="http://localhost/punjabi/index.php" id="navi_a">Designer Suits</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi\Bridal.php" id="navi_a">Bridal Gowns</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi\lehenga.php" id="navi_a">Lehengas</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi/saree.php" id="navi_a">Sarees</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi/western.php" id="navi_a">Western Dresses</a></li>
        
        <li class="nav-item"><a class="nav-link" href="#" id="navi_a"><i class="fas fa-shopping-cart" 
          style="color:#ef5777;"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-search"></i></a></li>
    </ul>
  </div>
  </div>
</nav>

                                                                                <!!-----------------------carousel----------------------->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="http://localhost/punjabi/images/Khatri_Sarees_banner_2_1.jpg" height="400px"alt="First slide">
      </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="http://localhost/punjabi/images/Khatri_Sarees_banner1.jpg" height="400px" alt="Second slide">
       </div>
     
  </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
    </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                                                                      <!------------carousel end----------------->
                                                                      <!------------section start---------------->
<section class="services py-5 text-center">
  <h3 class="text-center " id="h12">Sarees</h3>
  <hr id="hr1">
          <div class="container">
              <div class="row">
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                          <i class="fas fa-globe fa-2x"></i>                            
                      </span>
                     <h5 class="font-weight-bold text-uppercase">
                            Worldwide Shipping
                      </h5>
                     <p class="text-capitalize">
                            Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Ducimus, dicta!
                      </p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-stamp fa-2x"></i>                            
                    </span>
                    <h5 class="font-weight-bold text-uppercase">Certified by Gurus</h5>

                    <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur 
                             adipisicing elit. Ducimus, dicta!
                           </p>
                  </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">

                    <span class="service-icon">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>                            
                    </span>

                     <h5 class="font-weight-bold text-uppercase">30 Days Money Back</h5>
                        <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur 
                              adipisicing elit. Ducimus, dicta!</p>

                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!-- </section> --> 
       
<!-----------------------product------------------------------------------>
<div class="container mt-3">

  <div class="row">
 
    
    
  <!-----------------1 card and modal--------->
 
    <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
         <div class="card box-shadow" >
                                                    <!-----------modal start-------->
            <!-- Button trigger modal -->

          
          
<a data-toggle="modal" data-target="#exampleModa2">
 <img class="card-img-top" src="http://localhost/punjabi/images/saree_use.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kedar Fab   </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf1" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/saree_use.jpeg"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz1" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/saree_use_side1.jpeg" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references1" role="tab" data-toggle="tab" >
                                                           <img src="http://localhost/punjabi/images/saree_use_side2.jpeg" height="123px" width="40%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur1" role="tab" data-toggle="tab" >
                                                           <img src="http://localhost/punjabi/images/saree_use_side3.jpeg" height="123px" width="40%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf1">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/saree_use.jpeg" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Embroidered Bollywood Silk Blend Saree  (Pink, Grey)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">989</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz1">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/saree_use_side1.jpeg" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Embroidered Bollywood Silk Blend Saree  (Pink, Grey)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">1,253</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="http://localhost/punjabi/images/saree_use_side2.jpeg"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Embroidered Bollywood Silk Blend Saree  (Pink, Grey)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">989</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         <div role="tabpanel" class="tab-pane fade" id="imgur1">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                          <img src="http://localhost/punjabi/images/saree_use_side3.jpeg" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                             
                                                              <h5>Embroidered Bollywood Silk Blend Saree  (Pink, Grey)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">989</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                 <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                        
                                                          </div>

                                                     </div>
                                                </div>
                                         </div>
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">Kedar Fab  </h5>
    <p class="card-text">Embroidered Bollywood Silk Blend Saree  (Pink, Grey)</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">989</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>

    </div>

    <!----------card closed--------------->
        <!-----2 card--------->
           <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
           <div class="card box-shadow" >
                                                  
                                                                        <!-- Button trigger modal -->

                            
    
      <!-----------modal start-------->
          <a data-toggle="modal" data-target="#exampleModa3">
 <img class="card-img-top" src="http://localhost/punjabi/images/Polka.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anand SAREES </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf3" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/Polka.jpeg"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz3" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/Polka_side1.jpeg" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                
                                               
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf3">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/Polka.jpeg" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Polka Print Daily Wear Georgette Saree  (Yellow)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">266</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz3">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/Polka_side1.jpeg" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Polka Print Daily Wear Georgette Saree  (Yellow)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">266</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">Anand SAREES 
  </h5>
    <p class="card-text">Polka Print Daily Wear Georgette Saree  (Yellow).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,66</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>
    </div>

    <!------2 col end---->

    <!-------------------------------------3rd card-- start----------------->
     <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
           <div class="card box-shadow" >
                                                  
                                                                        <!-- Button trigger modal -->

                                     
  
      <!-----------modal start-------->
          <a data-toggle="modal" data-target="#exampleModa4">
 <img class="card-img-top" src="http://localhost/punjabi/images/pari.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shoppershopee 
                                                                      </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf4" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/pari.jpeg"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz4" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/pari_side.jpeg" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf4">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/pari.jpeg" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Self Design Kanjivaram Poly Silk Saree  (Maroon)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">599</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz4">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/pari_side.jpeg" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Self Design Kanjivaram Poly Silk Saree  (Maroon)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">599</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">Shoppershopee </h5>
    <p class="card-text">Self Design Kanjivaram Poly Silk Saree  (Maroon).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">599</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>
    </div>

    <!-----------------------------3 card end----------------------------->
  </div>

                                                           <!-------------------2 row started--------------------------------->
     <div class="row">
  
    
    
  <!-----------------1 card and modal--------->
 
    <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
         <div class="card box-shadow" >
                                                    <!-----------modal start-------->
            <!-- Button trigger modal -->

          
          
<a data-toggle="modal" data-target="#exampleModa7">
 <img class="card-img-top" src="http://localhost/punjabi/images/Anugrah.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anugrah Textile   </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf7" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/Anugrah.jpeg"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz7" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/Anugrah_side1.jpeg" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf7">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/Anugrah.jpeg" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Embroidered Banarasi Net, Velvet Saree  (White, Blue)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">399</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz7">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/Anugrah_side1.jpeg" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Embroidered Banarasi Net, Velvet Saree  (White, Blue)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">399</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                         
                                         
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">Anugrah Textile  </h5>
    <p class="card-text">Embroidered Banarasi Net, Velvet Saree  (White, Blue)</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">399</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>

    </div>

    <!----------card closed--------------->
        <!-----2 card--------->
           <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
           <div class="card box-shadow" >
                                                  
                                                                        <!-- Button trigger modal -->

                            
    
      <!-----------modal start-------->
          <a data-toggle="modal" data-target="#exampleModa6">
 <img class="card-img-top" src="http://localhost/punjabi/images/ksevencreation.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ksevencreation    </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf6" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/ksevencreation.jpeg"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz6" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/ksevencreation_side.jpeg" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                                                           </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf6">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/ksevencreation.jpeg" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Printed, Embellished Fashion Lycra Blend Saree  (Maroon)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">401</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz6">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/ksevencreation_side.jpeg" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Printed, Embellished Fashion Lycra Blend Saree  (Maroon)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">401</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">ksevencreation </h5>
    <p class="card-text">Printed, Embellished Fashion Lycra Blend Saree  (Maroon)</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">401</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>
    </div>

    <!------2 col end---->

    <!-------------------------------------3rd card-- start----------------->
     <div class="col-lg-4 col-md-12 py-0 py-sm-3">                        
           <div class="card box-shadow" >
                                                  
                                                                        <!-- Button trigger modal -->

                                     
  
      <!-----------modal start-------->
          <a data-toggle="modal" data-target="#exampleModa5">
 <img class="card-img-top" src="http://localhost/punjabi/images/ASHVMEGH.jpeg" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ASHVMEGH  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf5" role="tab" data-toggle="tab">
                                                            <img src="http://localhost/punjabi/images/ASHVMEGH.jpeg"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz5" role="tab" data-toggle="tab">
                                                         <img src="http://localhost/punjabi/images/ASHVMEGH_side1.jpeg" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references5" role="tab" data-toggle="tab" >
                                                           <img src="http://localhost/punjabi/images/ASHVMEGH_side2.jpeg">
                                                      </a>
                                                </li>
                                                
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf5">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/ASHVMEGH.jpeg">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Woven Kanjivaram Cotton Silk Saree  (Black)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">279</span></i><br>
                                                                       <br>
                                                                      <h4>Available offers</h4>
                                                                      <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag">
                                                                      </i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                                                          
                                                             </div>
                                                      </div>
                                                        
                                                        <!-----row closed------------>
                                                 </div>

                                           </div>

                                           <div role="tabpanel" class="tab-pane fade" id="buzz5">
                                              <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="http://localhost/punjabi/images/ASHVMEGH_side1.jpeg">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Woven Kanjivaram Cotton Silk Saree  (Black)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">279</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="http://localhost/punjabi/images/ASHVMEGH_side2.jpeg" width="70%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Woven Kanjivaram Cotton Silk Saree  (Black)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">279</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         
                                     </div>
         
                              </div>
                               <div class="modal-footer ">
                                   <button  type="button" class="btn btn-secondary  px-5 mr-lg-5 py-2 btnf">
                                         ADD TO CART
                                       </button>

                                    <button type="button" class="btn btn-primary  mr-lg-5 px-5 py-2 btnf">
                                         BUY
                                       </button>
     
                                 </div>
   

                            </div>
                    </div>
       </div>

 
<!---------modal closed------>
  <div class="card-body">
    <h5 class="card-title">ASHVMEGH   </h5>
    <p class="card-text">Woven Kanjivaram Cotton Silk Saree  (Black).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">279</span></i><br><br>
    <i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star-half-alt"><i class="far fa-star"></i></i></i></i></i></p>
   
    <a href="#" class="btn btn-primary">ADD TO CARD</a>
  </div>
</div>
    </div>

    <!-----------------------------3 card end----------------------------->
  </div>

<!------------2nd row closed------------------------------->





  </div>  <!---------------container closed---->
<div class="container py-5" >
  <div class="row  justify-content-end">
    <div class="col-md-4" id="pagination">
       <ul class="pagination" >
    <li class="page-item">
      <a class="page-link" href="#">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
      
    </div>
    
  </div>
   
 </div>




<!------------------------------------footer----------------------------------->
<div class="box66">

<div class="container"style="margin: 40px;">
<div class="row py-5" id="box1">
    <div class="col-md-3 col-sm-12">
      <img src="http://localhost/punjabi\images/mainlogo.png" class="logo">
        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;A1 Sector 10 Noida,
                Uttar Pradesh, India</p>
                <p class="email-id"><i class="far fa-envelope"></i>&nbsp;&nbsp;namratauniversal@gmail.com</p>
                 <h4><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;01204350224</h4>

    </div>
    <div class="col-md-3 col-sm-12"> 
      <h3>Office</h3> 
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link"href="#">Phone Consultation</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Video Consultation</a></li>
          <li class="nav-item"><a class="nav-link" href="#">clinic Consultation</a></li>
          <li class="nav-item"><a classs="nav-link" href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Export Product</a></li>
          <li class="nav-item"><a class="nav-link"href="#">Buy Product Online</a></li>
        </ul>
    </div>
    <div class="col-md-3 col-sm-12">
      <h3>Pages</h3>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">People Review</a></li>
          
        </ul>
    </div>
     <div class="col-md-3 col-sm-12">
       <h3>Newsletter</h3>
        <form>
          <i class="far fa-envelope"></i>
          <input type="email" name="email-id" placeholder="Enter your email..." required>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </form>
        <div class="social-icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-pinterest"></i>

          
        </div>
    </div>
    
  </div>
  
</div>
</div>
<!----------------------------------------footer---------------------------------------------

<!----------------------------------------------------footer end---------------------------------------->
</body>
</html>