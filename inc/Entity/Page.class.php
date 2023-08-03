<?php

class Page  {
   
    static function displayHeader($currentPageStyles) {
        ?>
                  <!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Advitify</title>
              <!-- Add Bootstrap CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <link href="css/<?=$currentPageStyles?>" rel="stylesheet">

            </head>
            <body>
              <!-- Navbar -->
              <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="TeamNumber11.php">
                  Advitify</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                  <?PHP
                    if(isset($_SESSION['loggedUserName'])){
                      ?>
                      <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="listConsultants.php">Search consultants</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">My meetings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="userProfile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-info" href="userLogout.php">Log Out</a>
                    </li>
                  </ul>

                      <?PHP
                    }else{
                      ?>
                      
                        <ul class="navbar-nav ml-auto">
                        <form class="navbar-nav ml-auto" method="post">
                  <li class="nav-item">
                      <a class="nav-link" href="MainController.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                    <a type="submit" name="loginBtn" class="btn btn-info" href="userLogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                    <a type="submit" name="registerBtn" class="btn btn-outline-info" href="register.php">Sign Up</a>
                    </li>
                    </form>
                  </ul>
                      

                      <?php
                    }
                  ?>
                </div>
              </nav>
        <?php
        
     }

    static function displayFooter()    {
        ?>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

        <?php  
        }

//Home page
      static function displayHomePage()    {
          ?>
          <main class="p-5">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossOrigin="anonymous"></link>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossOrigin="anonymous"></script>
      <section id="hero" class='bg-body-tertiary'>

        <div class="container bg-body-tertiary">
          <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
              <div>
                <h1 class="display-10 fw-bold">Advitify is an IT consulting platform that connects people with professionals</h1>
                <div>
                  <div class='container'>
                    <div class='row justify-content-md-center'>
                      <div class='col-sm'>
                        <h6 class="fw-normal text-muted mb-3">Find an IT specialist with the correct expertise to help you accomplish the project you're working on. Advitify gives you the ability to find the correct professional from the comfort of your office</h6>
                        <a href="" class="btn-get-started scrollto">Get Started </a>
                      </div>
                      <div class='col-sm col-md-auto'>
                        <img width={120} src='./images/main_image2.png' class="img-fluid" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
              <img src='./images/main_image1.png' class="img-fluid" alt="" />
            </div>
          </div>
        </div>
        <div class="text-center">
        </div>
      </section>
      <div class="container-fluid">
        <div class="row flex-nowrap bg-light">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light ms-5">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
              <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">Categories</span>
              </a>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                  <a href="#" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Software</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Cybersecurity</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Cloud computing</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Database</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Automation</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Artificial intelligence</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Computing</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Data visualization</span> </a>
                </li>
                <li>
                  <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Embedded systems</span> </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col py-3">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
              <h1 class="display-4">Consultants</h1>
              <p class="lead">Find the expert that best adapts to your project</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 text-center">
              <div class="col">
                <div class="card" >
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Expert Name</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted">Expertise Area</small></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" >
                  <img class="card-img-top embed-responsive-item" src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Expert Name</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted">Expertise Area</small></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img class="card-img-top embed-responsive-item" src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=389&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Expert Name</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted">Expertise Area</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
              <h1 class="display-4">Categories</h1>
              <p class="lead">Search for different IT categories consultants</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 text-center">
              <div class="col">
                <div class="card" >
                  <img class="card-img-top" src="https://images.unsplash.com/photo-1604403428907-673e7f4cd341?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Category</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted"># of consultants</small></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" >
                  <img class="card-img-top embed-responsive-item" src="https://images.unsplash.com/photo-1562408590-e32931084e23?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Category</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted"># of consultants</small></p>
                  </div>

                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img class="card-img-top embed-responsive-item" src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" style={{ width: "100%", height: "40vh", objectFit: "cover" }} alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Category</h5>
                    <p class="card-text">Short Description</p>
                    <p class="card-text"><small class="text-muted"># of consultants</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  
          <?php  
          }

          //list consultants
    static function displayConsultantsTable(Array $consultantsInfo, $action="") {
        ?>
  
    <!-- Consultants table -->
    <br>
  
      <div class="p-5">
  
      <div class="container">
    <div class="row">
      <div class="col">
      <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <input type="text" name="activeDrug" class="searchInput" placeholder="Search active drugs">
        <div class="d-flex justify-content-around">
          <input type="hidden" name="state" value="<?=$action?>">
          <?php ?>
          <input type="hidden" name="preOrderId" value="<?php ?>">
        <input type="hidden" name="action" value="searchConsultants">
          <button class="btn btn-primary" type="submit" value="Search consultants">Search Consultants</button>
          </div>
      </form>
      </div>
      <div class="col">
      <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
      <input type="text" name="category" class="searchInput" placeholder="Search Category">
      <div class="d-flex justify-content-around">
      <input type="hidden" name="state" value="<?=$action?>">
          
          <input type="hidden" name="preOrderId" value="<?php ?>">
        <input type="hidden" name="action" value="searchCategory">
          <button class="btn btn-primary" type="submit" value="Search Category">Search Category</button>
          </div>
      </form>
      </div>
    </div>
        <br>
          <table class="table table-striped table-bordered table-hover table-responsive-lg">
              <thead>
              <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Description</th>
                  <th scope="col">Joined Date</th>
                  <th scope="col">Details</th>
              </tr>
              </thead>
              <tbody>
                <?php
            
                //List the consultants
                foreach($consultantsInfo as $consultant){
                        echo "<tr>";
                        echo "<form action=\"{$_SERVER["PHP_SELF"]}\" method=\"post\">";
                        echo "<th scope=\"row\">{$consultant->getFirstName()}</th>";
                        echo "<td>{$consultant->getCategory()}</td>";
                        echo "<td>{$consultant->getDescription()}</td>";
                        echo "<td>{$consultant->getJoinedDate()}</td>";  
                  echo "<input type=\"hidden\" name=\"action\" value=\"{$action}\">";
                  echo "<td><input class=\"btn-info btn-sm\" type=\"submit\" value=\"See Details\"></td>";
                  //echo "<td><a href=\"?action=add&id={$medicine->getMedicineId()}\">Add to order</a></td>";
                  echo "</form>";
                  echo "</tr>";
                
                }
  
                ?>
              </tbody>
          </table>
  
      </div>
     <?php
      }
     

    static function displaySuccessMessage(){
      ?>
      <div class="p-5">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Order Created Succesfully!</h4>
        <hr>
        <p class="mb-0">Thank you for placing an order, you can see your previous order in your profile</p>
      </div>
      </div>
      <?php
    }

    static function displayErrorMessage(){
      ?>
      <div class="p-5">
        <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Order Cancelled</h4>
        <hr>
        <p class="mb-0">The order was not created!</p>
      </div>
      </div>
      <?php
    }

//Login page
static function displayLoginForm() {
  ?>
  <!-- LogIn Form -->
  <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-info text-white" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">
                          <div class="mb-md-5 mt-md-4 pb-5">
                              <h2 class="fw-bold mb-2 text-uppercase">Log In</h2>
                              <p class="text-white-50 mb-5">Please enter your username and password!</p>

                              <!-- Add the form element -->
                              <form method="POST">
                                  <div class="form-outline form-white mb-4">
                                      <!-- Use the correct name attributes -->
                                      <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                      <label class="form-label" for="username">Username</label>
                                  </div>

                                  <div class="form-outline form-white mb-4">
                                      <!-- Use the correct name attributes -->
                                      <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                      <label class="form-label" for="password">Password</label>
                                  </div>

                                  <!-- Use a submit button -->
                                  <input type="hidden" name="action" value="logIn">
                                  <button class="btn btn-outline-light btn-lg px-5" type="submit" value="log">Login</button>
                              </form>
                          </div>

                          <div>
                              <p class="mb-0 font-weight-bold">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Register</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php
}

static function diplayLoginErrorMessage(){
  ?>
             <!-- Mascot Errors -->
             <div class="p-5">
            <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Login Failed!</h4>
            <hr>
            <p class="mb-0">Username and password do not match! Please try again.
            </p>
            <ul>
             
          </ul>
          </div>
          </div>
  <?php
}

    static function displayLogoutForm(User $m){?>
    <!-- logout section -->
    <section class="logout">
            <h2>Login Details</h2>
            <div class="form-group row">
                <div class="col-md-6">
                    <span>Hi <?php echo $m->getUserName();?></span>
                    <a class="btn btn-primary" href="userLogout.php" role="button">Logout</a>
                </div>                                
    </div>
        </section>
    <?php }



static function displayRegisterForm($valid_status){?>
      <!--Register form-->
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-info text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please enter the information to create an account!</p>


              <form method="POST">
              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="firstName" id="firstName" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"firstName\" id=\"firstName\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"firstName\" id=\"firstName\" class=\"form-control form-control-sm\" value=\"{$_POST["firstName"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="firstName">First Name</label>
              </div>

              
              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="lastName" id="lastName" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"lastName\" id=\"lastName\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"lastName\" id=\"lastName\" class=\"form-control form-control-sm\" value=\"{$_POST["lastName"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="lastName">Last Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="address" id="address" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"address\" id=\"address\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"address\" id=\"address\" class=\"form-control form-control-sm\" value=\"{$_POST["address"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="address">Address</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="city" id="city" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"city\" id=\"city\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"city\" id=\"city\" class=\"form-control form-control-sm\" value=\"{$_POST["city"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="city">City</label>
              </div>

              <div class="form-outline form-white mb-4">
                <select class="form-control form-control-sm" name="province" id="province">
                  <option value="AB">AB</option>
                  <option value="BC">BC</option>
                  <option value="MB">MB</option>
                  <option value="NB">NB</option>
                  <option value="NL">NL</option>
                  <option value="NT">NT</option>
                  <option value="NS">NS</option>
                  <option value="NU">NU</option>
                  <option value="ON">ON</option>
                  <option value="PE">PE</option>
                  <option value="QC">QC</option>
                  <option value="SK">SK</option>
                  <option value="YT">YT</option>
                </select>
                <label class="form-label" for="province">Province</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="postalCode" id="postalCode" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"postalCode\" id=\"postalCode\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"postalCode\" id=\"postalCode\" class=\"form-control form-control-sm\" value=\"{$_POST["postalCode"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="postalCode">Postal Code</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="email" name="email" id="email" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control form-control-sm\" value=\"{$_POST["email"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="email">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="phone" id="phone" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"phone\" id=\"phone\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"phone\" id=\"phone\" class=\"form-control form-control-sm\" value=\"{$_POST["phone"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="phone">Phone Number</label>
              </div>

              <div class="form-outline form-white mb-4">
                <!--<input type="text" name="usernameRegister" id="usernameRegister" class="form-control form-control-sm" />-->
                <?php
                    $formNameTag="<input type=\"text\" name=\"usernameRegister\" id=\"usernameRegister\" class=\"form-control form-control-sm\" >";
                    if(!empty($_POST) && $valid_status["status"]==false)
                      $formNameTag="<input type=\"text\" name=\"usernameRegister\" id=\"usernameRegister\" class=\"form-control form-control-sm\" value=\"{$_POST["usernameRegister"]}\">";
                    echo $formNameTag;
                  ?>
                <label class="form-label" for="usernameRegister">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="passwordRegister" id="passwordRegister" class="form-control form-control-sm" />
                <label class="form-label" for="passwordRegister">Password</label>
              </div>
              <input type="hidden" name="action" value="register">
              <button class="btn btn-outline-light btn-lg px-5" type="submit" value="createAccount">Create Account</button>
              </form>
            </div>

            <div>
              <p class="mb-0 font-weight-bold">Already have an account? <a href="TeamNumber11.php" class="text-white-50 fw-bold">Log In</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
    <?php }

    static function showRegisterFormNotifications(array $notifications){
      ?>
              <!-- Mascot Errors -->
          <div class="p-5">
            <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Register Failed!</h4>
            <hr>
            <p class="mb-0">Please fix the following errors:</p>
            <ul>
              <?php
              foreach($notifications as $key => $val){
                if($key=="status" || $val=="Correct")
                    continue;
                echo "<li>{$val}</li>";
            }
              ?>
          </ul>
          </div>
          </div>
      <?php 
    }

    static function showSuccesfulRegistration(){
      ?>
      <div class="p-5">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">User created succesfully!</h4>
        <hr>
        <p class="mb-0">Thank you for registering, now you can log in with your username and password</p>
      </div>
      </div>
      <?php
    }

    static function showUserDetails(Client $client){
      ?>
      <div class="p-5 text-center">
    <h1>Welcome, <?php echo $client->getFirstName(); ?>!</h1>
</div>
<div class="p-5 card">
  <div class="card-body border border-info rounded">
<h2>Your Details:</h2>
<div class="row">
            <div class="col">
              First Name: <strong><?=$client->getFirstName()?></strong><br>
              Last Name: <strong><?=$client->getLastName()?></strong><br>
              Email: <strong><?=$client->getEmail()?></strong><br>
              Phone: <strong><?=$client->getPhone()?></strong><br>
            </div>
            <div class="col text-right">
            </div>
          </div> 
          </div>
</div>
<?php
    }

}