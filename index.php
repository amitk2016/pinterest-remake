<?php 


//Make everything int he vendor folder avaliable to you 
require 'vendor/autoload.php';


// Create new Plates instance
$plates = new League\Plates\Engine('app/templates');

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
 	echo $plates-> render('landing');
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