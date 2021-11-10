<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <title>punjabi</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/punjabi/css/Suit.css">
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
  
    <ul class="navbar-nav " id="ul1">
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

       <li class="nav-item d-flex justify-content-between">
          <a  class="nav-link "  data-toggle="modal" data-target="#modalLoginForm">
            <?php echo($_SESSION['username']); ?>&nbsp;&nbsp;<i class="fas fa-user-shield text-info"></i></a>

    <form action="http://localhost/punjabi/login.php" method="post" id="form">
      <div class="modal fade " id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" id="sign_in">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
      <div class="row">             
            <div class="col-md-4">
                  <div class="row" id="login_h"><div class="col-lg-12" id="imgl">
                      <img src="http://localhost/ram/images/logo.png" width="100%;">

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

  <a class="navbar-brand" href="http://localhost/punjabi/html/index.php">
    <img src="http://localhost/punjabi\images/mainlogo.png" class="logo"></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-white"></span>
  </button>
  <div class="collapse navbar-collapse ml-md-5" id="navbarNav">
    <ul class="navbar-nav " >
      <li class="nav-item "><a class="nav-link active" href="http://localhost/punjabi/index.php" id="navi_a">Designer Suits</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi/Bridal.php" id="navi_a">Bridal Gowns</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/punjabi\lehenga.php" id="navi_a">Lehengas</a></li>
        <li class="nav-item"><a class="nav-link" href="sharee.html" id="navi_a">Sarees</a></li>
        <li class="nav-item"><a class="nav-link" href="#" id="navi_a">Western Dresses</a></li>
        
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
         <img class="d-block w-100" src="http://localhost/punjabi\images\ban1.jpg" alt="First slide">
      </div>
       <div class="carousel-item">
         <img class="d-block w-100" src="http://localhost/punjabi\images\banws.jpg" alt="Second slide">
       </div>
       <div class="carousel-item">
          <img class="d-block w-100" src="http://localhost/punjabi\images\ban3.jpg" alt="Third slide">
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/580/696/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg2zpdhcu9shn.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Design Willa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf1" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/580/696/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg2zpdhcu9shn.jpeg?q=50"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz1" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg35dqhqzgzjw.jpeg?q=50" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references1" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg2zzhefyam6f.jpeg?q=50" height="123px" width="40%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur1" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg36a4y2spbbq.jpeg?q=50" height="123px" width="40%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf1">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg2zpdhcu9shn.jpeg?q=50" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg35dqhqzgzjw.jpeg?q=50" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
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
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg2zzhefyam6f.jpeg?q=50"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/jyoq93k0/fabric/y/y/e/gtsas1168-design-willa-original-imafg36a4y2spbbq.jpeg?q=50" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                             
                                                              <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
    <h5 class="card-title">Design Willa </h5>
    <p class="card-text">Crepe Printed Salwar Suit Material  (Unstitched).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br><br>
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/xxl-suit-sp-4841-jevi-prints-original-imafv86pdnuyuggy.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Design Willa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf3" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/xxl-suit-sp-4841-jevi-prints-original-imafv86pdnuyuggy.jpeg?q=50"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz3" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/l-suit-sp-4841-jevi-prints-original-imafv86p9vhnrc4z.jpeg?q=50" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references3" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/xxl-suit-sp-4841-jevi-prints-original-imafv86p82sjpy6z.jpeg?q=50" height="123px" width="45%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur3" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/l-suit-sp-4841-jevi-prints-original-imafv86phqyeab5z.jpeg?q=50" height="123px" width="45%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf3">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/xxl-suit-sp-4841-jevi-prints-original-imafv86pdnuyuggy.jpeg?q=50" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/l-suit-sp-4841-jevi-prints-original-imafv86p9vhnrc4z.jpeg?q=50" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
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
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/xxl-suit-sp-4841-jevi-prints-original-imafv86p82sjpy6z.jpeg?q=50"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         <div role="tabpanel" class="tab-pane fade" id="imgur3">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/kekadu80/salwar-kurta-dupatta/8/h/8/l-suit-sp-4841-jevi-prints-original-imafv86phqyeab5z.jpeg?q=50" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                             
                                                              <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
    <h5 class="card-title">Design Willa </h5>
    <p class="card-text">Crepe Printed Salwar Suit Material  (Unstitched).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br><br>
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/580/696/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8juz5hxpmve.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Design Willa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf4" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/580/696/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8juz5hxpmve.jpeg?q=50"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz4" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8ju7wdz6z4s.jpeg?q=50" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references4" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8jukdfjxqzx.jpeg?q=50" height="123px" width="45%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur4" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8juz2katagb.jpeg?q=50" height="123px" width="45%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf4">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/580/696/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8juz5hxpmve.jpeg?q=50" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8ju7wdz6z4s.jpeg?q=50" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Crepe Printed Salwar Suit Material  (Unstitched)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">2,99</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references4">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8jukdfjxqzx.jpeg?q=50"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Crepe Printed Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         <div role="tabpanel" class="tab-pane fade" id="imgur4">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/k30h8y80/fabric/b/z/w/gau191r28-design-willa-original-imafm8juz2katagb.jpeg?q=50" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                              <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                              <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">1,253</span></i><br>
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
    <h5 class="card-title">Design Willa </h5>
    <p class="card-text">Crepe Printed Salwar Suit Material  (Unstitched).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br><br>
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/580/696/kqidx8w0/fabric/f/m/a/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7kzxruzyg.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GIFTSNFRIENDS  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf7" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/580/696/kqidx8w0/fabric/f/m/a/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7kzxruzyg.jpeg?q=50"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz7" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/0/v/b/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7zsq2mmrd.jpeg?q=50" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references7" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/a/q/d/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7zxyfgy6f.jpeg?q=50" height="123px" width="40%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur7" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/e/s/v/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7xjbjwztk.jpeg?q=50" height="123px" width="40%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf7">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/580/696/kqidx8w0/fabric/f/m/a/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7kzxruzyg.jpeg?q=50" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Crepe Floral Print Salwar Suit Material  (Unstitched)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">4,12</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/0/v/b/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7zsq2mmrd.jpeg?q=50" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Crepe Floral Print Salwar Suit Material  (Unstitched)</h5><br>
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
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references7">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/a/q/d/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7zxyfgy6f.jpeg?q=50"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Crepe Floral Print Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">4,12</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         <div role="tabpanel" class="tab-pane fade" id="imgur7">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/kqidx8w0/fabric/e/s/v/yes-unstitched-gsrenuka6059-a-giftsnfriends-original-imag4gf7xjbjwztk.jpeg?q=50" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                             
                                                              <h5>Crepe Floral Print Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">4,12</span></i><br>
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
    <h5 class="card-title">GIFTSNFRIENDS  </h5>
    <p class="card-text">Crepe Printed Salwar Suit Material  (Unstitched).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">4,12</span></i><br><br>
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/580/696/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vchzyjtqwc.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MANIKARNIKA  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf6" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/580/696/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vchzyjtqwc.jpeg?q=50"  height="123px" width="45%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz6" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vcyygvezwd.jpeg?q=50" height="123px" width="45%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references6" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vd29xtbn9e.jpeg?q=50" height="123px" width="45%">
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                       <a class="nav-link" href="#imgur6" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vdrpqxpqsb.jpeg?q=50" height="123px" width="45%">
                                                       </a>
                                                 </li>
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf6">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/580/696/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vchzyjtqwc.jpeg?q=50" height="373px" width="60%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Brocade Self Design, Solid Salwar Suit Material  (Unstitched)</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">5,25</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vcyygvezwd.jpeg?q=50" height="373px" width="69%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Brocade Self Design, Solid Salwar Suit Material  (Unstitched)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">4,12</span></i><br>
                                                                            <br>
                                                                         <h4>Available offers</h4>
                                                                        <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                       <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                      <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                                </div>

                                                        </div>
                                              </div>
                                          </div>
                                                      
                                          <div role="tabpanel" class="tab-pane fade" id="references6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vd29xtbn9e.jpeg?q=50"  height="373px" width="69%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Brocade Self Design, Solid Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">5,25</span></i><br>
                                                                          <br>
                                                                 <h4>Available offers</h4>
                                                                 <p class="justify-content-left" ><i class="fas fa-tag"></i>&nbsp;&nbsp;Special PriceGet extra 25% off (price inclusive of discount)T&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp;Bank Offer15% Instant discount on first Flipkart Pay Later order of 500 and aboveT&C</p>
                                                                <p class="justify-content-left"><i class="fas fa-tag"></i>&nbsp;&nbsp; Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C<br></p>
                          
                                                         </div>
                                                      </div>
                                                </div>
                                         </div>

                                         <div role="tabpanel" class="tab-pane fade" id="imgur6">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/k5vcya80pkrrdj/fabric/c/g/n/grey-and-red-lotus-dress-material-grey-red-manikarnika-lotus-original-imafh4vdrpqxpqsb.jpeg?q=50" height="373px" width="69%">
                                                    </div>

                                                     <div class="col-md-8">
                      
                                                          <div class="container py-3">
                                                             
                                                              <h5>Brocade Self Design, Solid Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">5,25</span></i><br>
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
    <h5 class="card-title">MANIKARNIKA  </h5>
    <p class="card-text">Crepe Floral Print Salwar Suit Material  (Unstitched)</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">5,25</span></i><br><br>
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
 <img class="card-img-top" src="https://rukminim1.flixcart.com/image/580/696/kfikya80-0/fabric/g/l/k/yes-unstitched-bbd002-design-willa-original-imafvyhxbkm3yykd.jpeg?q=50" alt="Card image cap">
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModa5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Design Willa </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!------------------------tabs started------------------------------>
                                              <ul class="nav nav-tabs" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#pf5" role="tab" data-toggle="tab">
                                                            <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/g/l/k/yes-unstitched-bbd002-design-willa-original-imafvyhxbkm3yykd.jpeg?q=50"  height="123px" width="40%">
                                                    </a>
                                              </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#buzz5" role="tab" data-toggle="tab">
                                                         <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/a/b/3/yes-unstitched-bbd002-design-willa-original-imafvyhxmaz373sg.jpeg?q=50" height="123px" width="40%">
                                                     </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" href="#references5" role="tab" data-toggle="tab" >
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/s/8/o/yes-unstitched-bbd002-design-willa-original-imafvyhxkm3xw3pf.jpeg?q=50" height="123px" width="40%">
                                                      </a>
                                                </li>
                                                
                                            </ul>


                                       <div class="tab-content modal-lg">
                                           <div role="tabpanel" class="tab-pane fade show active" id="pf5">
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/g/l/k/yes-unstitched-bbd002-design-willa-original-imafvyhxbkm3yykd.jpeg?q=50" height="373px" width="70%">
                                                      </div>
                                                      <div class="col-md-8">
                                                            <div class="container py-3">
                                                                     <h5>Floral Print Kurta, Patiala & Dupatta Set</h5><br>
                                                                      <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br>
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
                                                           <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/a/b/3/yes-unstitched-bbd002-design-willa-original-imafvyhxmaz373sg.jpeg?q=50" height="373px" width="70%">
                                                      </div>
                                                  
                                                       <div class="col-md-8">
                      
                                                               <div class="container py-3">
                                                                        <h5>Crepe Printed Salwar Suit Material  (Unstitched)</h5><br>
                                                                        <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;
                                                                        <span style="color:black;">2,99</span></i><br>
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
                                                          <img src="https://rukminim1.flixcart.com/image/880/1056/kfikya80-0/fabric/s/8/o/yes-unstitched-bbd002-design-willa-original-imafvyhxkm3xw3pf.jpeg?q=50"  height="373px" width="70%">
                                                     </div>
                                                     <div class="col-md-8">
                                                          <div class="container py-3">
                                                                <h5>Crepe Printed Salwar Suit Material  (Unstitched)</h5><br>
                                                                 <i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br>
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
    <h5 class="card-title">Design Willa </h5>
    <p class="card-text">Crepe Printed Salwar Suit Material  (Unstitched).</p>
     <p><i class="fas fa-rupee-sign text-center">&nbsp;&nbsp;<span style="color:black;">2,99</span></i><br><br>
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
    <li class="page-item"><a class="page-link" href="http://localhost/punjabi/index.php">1</a></li>
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