<?php 
define ('result_search', 'RESULTS | FINDER');
require ('config.php');
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
                <form action="result.php" method="get">
                  <input type="text" name="user_query" class="form-control" placeholder="Search the web" required="">
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
     <?php
    
    $db = mysqli_connect('localhost', 'root', '', 'finder');
    
      if(isset($_GET['search'])){
          //to get the value of the searched query
          $get_value = $_GET['user_query'];
          // if the value is empty
          if($get_value==''){
	
	     echo "<center><b>Please go back, and write something in the search box!</b></center>";
	     exit();
	     }
         
          $result_query = "select * from sites where site_keywords like '%$get_value%'";
          
          $run_result = mysqli_query($db,$result_query);
	
	if(mysqli_num_rows($run_result)<1){
	
	echo "<center><b>Oops! sorry, nothing was found!</b></center>";
	exit();
	
	}
	
	while($row_result=mysqli_fetch_array($run_result)){
		
		$site_title=$row_result['site_title'];
		$site_link=$row_result['site_link'];
		$site_desc=$row_result['site_desc'];
		$site_image=$row_result['site_image'];
	
	echo "<div class='results'>
          <div class='row mb-2'>
           <div class='col-md-6'>
          <div class='card flex-md-row mb-4 box-shadow h-md-250'>
            <div class='card-body d-flex flex-column align-items-start'>
              <strong class='d-inline-block mb-2 text-primary'>$site_title</strong>
              <h3 class='mb-0'>
                <a class='text-dark' href='$site_link'>$site_link</a>
              </h3>
              <div class='mb-1 text-muted'>$site_desc</div>
              <p class='card-text mb-auto'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href='#'>Continue reading</a>
            </div>
            <img class='card-img-right flex-auto d-none d-md-block' data-src='holder.js/200x250?theme=thumb' src='/../finder/assets/image/$site_image' alt='Card image cap'>
          </div>
        </div>
          
          </div>
          </div>
        ";

		}
              
          
        
           
          
      }
      
    
     ?>
</html>