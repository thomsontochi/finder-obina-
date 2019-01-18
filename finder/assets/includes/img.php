<?php 
define ('result_search', 'RESULTS- IMAGES | FINDER');
require ('config.php');
  $db = mysqli_connect('localhost', 'root', '', 'finder');


    if (isset($_GET['result_img'])){
        $get_result = $_GET['result_img'];
     echo $get_result;
     $result_query = "select * from sites where site_image like '%$get_result%'";
        $run_result = mysqli_query($db,$result_query);
        if(mysqli_num_rows($run_result)<1){
	    echo "<center><b>Oops! sorry, nothing was found!</b></center>";
	    exit();
	      }
        while($row_result=mysqli_fetch_array($run_result)){
		
		
		$site_image=$row_result['site_image'];
	
	   echo "
            <img class='card-img-right flex-auto d-none d-md-block' data-src='holder.js/200x250?theme=thumb' src='/../finder/assets/image/$site_image' alt='Card image cap'>
            ";

		}
    }
  

          
         
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title><?php echo result_search; ?></title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="author" content="opiaaustin">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" type="text/css" href="/../finder/assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="/../finder/assets/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="/../finder/assets/css/vegas.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="/../finder/assets/css/style.css">
     <!-- MEDIA QUERY -->
     <link rel="stylesheet" type="text/css" href="/../finder/assets/css/mediaquries.css">
     

</head>
<body>
  
 
    <!-- RESULT -->
             
          <div class="container">
              <header class="line">
                  <div class="result-form">
                <form action="img.php" method="get">
                  <input type="text" name="user_query" class="form-control"  placeholder="Search the web" required="">
                  <button type="submit" name="search" class="form-control"><i class="fa fa-search"></i></button>
                </form>
                      <!-- top nav links -->
                        <nav class="" id="Top-Nav">
                         <a class="p-2 text-muted" href="result.php">All</a> 
                         <a class="p-2 text-muted" href="img.php">Images</a>
                        </nav>
                </div>
              </header> 
          </div>
    
    </body>
</html>
