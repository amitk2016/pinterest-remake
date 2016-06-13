<?php 


//Make everything int he vendor folder avaliable to you 
require 'vendor/autoload.php';




// Load Apporopriate Page

// Has the user requested the page ?
 if ( isset($_GET['page']) ){
 	//Requested Page
 	$page = $_GET['page'];


 } else {

 	//Homepage
 	 $page = 'landing';
 }

//Load the Apporopriate file based on page

 switch ($page) {

 	//Homepage
 	case 'landing':
 	case 'register';	
 	 require 'app/controllers/LandingController.php';
 	 $controller = new LandingController();
 		break;
 	
 	// About Page
 	case 'about':
 		
 	echo $plates-> render('about');

 		break;
 	// Contact Page
 	case 'contact':
 	
 	echo $plates-> render('contact');
 		break;
 	
 	case 'login':
 	
 	echo $plates-> render('login');
 		break;

 	case 'stream':
 	
 	echo $plates-> render('stream');
 		break;
 	

 	default:
 	echo $plates-> render('error404');
 		break;
 	
 }


 $controller->buildHTML();