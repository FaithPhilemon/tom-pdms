<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body> 
    <main>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<!--               <a class="navbar-brand" href="#"><img src="images/MAUTECH-Post-UTME-Form-o3schools.jpeg" width="50" height="50" alt=""></a>
 -->              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
              </ul>
              <form class="form-inline my-2 my-lg-0 mr-5">
                <div class="dropdown">
                    <a href="" id="dropdownMenu2"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">Log out</button>
                    </div>
                  </div>
                  
              </form>
            </div>
          </nav>

          <header>
              <div class="container">
                <div class="MainHeading header">
                  <span>
                    <img src="images/MAUTECH-Post-UTME-Form-o3schools.jpeg" width="110" height="100">
                  </span>
                    <h4><b>welcome to the department of statistic & operations research <br> project Database management system </b></h4>
                </div>
               
                <div class="main-content">
                    <!-- Main content begin -->
                    <?php $this->load->view($main_content); ?>
                    <!-- Main content end -->
                </div>
                <!-- main content ends  -->
              </div>
          </header>
    </main>




    <footer>
        <div class="footer-content">
            <p>copyright &copy; 2019 Tomlivisky Thomas</p>
        </div>
    </footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
<script src="js/fontawesome.min.js"></script>
</body>
</html>