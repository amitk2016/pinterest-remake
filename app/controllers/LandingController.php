<?php 

class LandingController {
	//Properties 



	//Constructor



	//Methods (Functions)

	public function registerAccount(){

		// Validation the user's data 


		//Check the database if email is in use 


		// Check the strength of the password 


		//Register the account or show error messages


		// if sucessful, log user in and redirect to their brand new stream page (account)



	}

	public function buildHTML(){

		// Create new Plates instance
		$plates = new League\Plates\Engine('app/templates');

		echo $plates-> render('landing');
	}



}