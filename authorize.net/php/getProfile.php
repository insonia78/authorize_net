<?php
 // require 'vendor/autoload.php';
 // require 'CustomerProfile/get-customer-profile.php';
 // use net\authorize\api\contract\v1 as AnetAPI;
 // use net\authorize\api\controller as AnetController;
 // define("AUTHORIZENET_LOG_FILE", "phplog");
 
  $name = $_POST[ 'txtLoginID_main' ];
  $key = $_POST[ 'txtTransactionKey_main' ];
  $profileSelected ;
  $paymentProfilesSelected ;
   /**************************************************************************************************/
 
  checkCredential($name, $key);
  
  // Retrieve an existing customer profile along with all the associated payment profiles and shipping addresses
/*
 * Need access to the inerface and the API
  $request = new AnetAPI\GetCustomerProfileRequest();
  $request->setMerchantAuthentication($merchantAuthentication);
  $request->setCustomerProfileId($profileIdRequested);
  $controller = new AnetController\GetCustomerProfileController($request);
  $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
  if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") )
  {
    echo "GetCustomerProfile SUCCESS : " .  "\n";
    $profileSelected = $response->getProfile();
    $paymentProfilesSelected = $profileSelected->getPaymentProfiles();
    echo "Profile Has " . count($paymentProfilesSelected). " Payment Profiles" . "\n";

  }
  else
  {
    echo "ERROR :  GetCustomerProfile: Invalid response\n";
    echo "Response : " . $response->getMessages()->getMessage()[0]->getCode() . "  " .$response->getMessages()->getMessage()[0]->getText() . "\n";
  } 
 */ 
//  printProfile($profileSelected);
   
 function printProfile($prof)
 {
	 try
	 {
	   echo preg_split(" ", $prof );
	 }
     catch ( Exception $e ) {
		
		echo $prof ;
	}	 
 }
 if( checkCredential($name, $key))
 {
     echo "true";
     
 } 
 else
 {
     echo "false";
 }
 
 function checkCredential($name , $key)
 {
	 $check = true;
	 
	try {
		// check for missing parameters
		if ( !isset($name) ) {
			echo("txtLoginID not provided.");
                        $check = false;
		}
		if ( !isset( $key ) ) {
			echo("txtTransactionKey provided.");
                        $check = false;
		}
		if ( !preg_match("/[a-zA-Z0-9]{12}/", $name ) ) {
			echo("the Name ' ".$name." ' is not a valid entry.");
                       $check = false;
		}
		if ( !preg_match("/[a-zA-Z0-9]{16}/", $key ) ) {
			echo("the Key ' ".$key." ' is not a valid key");
                        $check = false;
		}
	} catch ( Exception $e ) {
		error("Unknown error. Exception thrown during validation, please contact an administrator with the following bracketed information: [ ".$e." || ".substr(date(DATE_RSS, time()), 0, 25)." ]");
	}
        
        return $check;
}
	 
	 
	 
	 
	 
 
  
  
  ?>