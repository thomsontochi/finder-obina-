
<!DOCTYPE html>
<html lang="en">
<head>

     <title><?php echo TITLE; ?></title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="author" content="opiaaustin">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <!-- MEDIA QUERY -->
     <link rel="stylesheet" type="text/css" href="assets/css/mediaquries.css">
     

</head>
<body>
    
      
    <!-- HOME -->
     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <h1>Finder, the new best thing!</h1>
                              <!-- You can change the date time in init.js file -->
                              <ul class="countdown">
                                  <?php
                                   $currentyear= date("Y");
                                   $currentmonth= date("M");
                                   $currentday= date("D");
                                   $currenttime= date("H:i:s");
                                  ?>
                                   <li>
                                        <span class="year"><?php echo $currentyear; ?></span>
                                        <h3>Year</h3>
                                   </li>
                                   <li>
                                        <span class="month"><?php echo $currentmonth; ?></span>
                                        <h3>Month</h3>
                                   </li>
                                   <li>
                                        <span class="day"><?php echo $currentday; ?></span>
                                        <h3>Day</h3>
                                   </li>
                                   <li>
                                        <span class="time"><?php echo $currenttime; ?></span>
                                        <h3>Time</h3>
                                   </li>     
                              </ul>
                             
                              <div class="subscribe-form">
                                <form action="assets/includes/result.php" method="get">
                                  <input type="text" name="user_query" class="form-control" placeholder="Search the web" required="">
                                  <button type="submit" name="search" class="form-control"><i class="fa fa-globe"></i></button>
                                </form>
                              </div>
                            
                         </div>
                    </div>

               </div>
          </div>
     </section>
     
</body>
        <script type="text/javascript" src="/../finder/assets/js/bootstrap.min.js?hash=2&b=NTdhZmI3"></script>
        <script type="text/javascript" src="/../finder/assets/js/jquery.js?hash=2&b=NTdhZmI3"></script>
        <script type="text/javascript" src="/../finder/assets/js/vegas.min.js?hash=2&b=NTdhZmI3"></script>
        <script type="text/javascript" src="/../finder/assets/js/countdown.js?hash=2&b=NTdhZmI3"></script>
        <script type="text/javascript" src="/../finder/assets/js/init.js?hash=2&b=NTdhZmI3"></script>
        <script type="text/javascript" src="/../finder/assets/js/custom.js?hash=2&b=NTdhZmI3"></script>
</html>