<?php
/*
   only the block comment has to be removed to make it work 
 *  
 * 
 * 
 * 
    require 'vendor/autoload.php';
    require 'CustomerProfile/get-customer-profile.php';
    use net\authorize\api\contract\v1 as AnetAPI;
    use net\authorize\api\controller as AnetController;
   define("AUTHORIZENET_LOG_FILE", "phplog");
 
  $name = $_POST[ 'txtLoginID_main' ];
  $key = $_POST[ 'txtTransactionKey_main' ];
  
  
  
  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
  $merchantAuthentication->setName($name);
  $merchantAuthentication->setTransactionKey($key);
 
 
  
  
  // Retrieve an existing customer profile along with all the associated payment profiles and shipping addresses

 // Need access to the inerface and the API
  
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
  echo "GetCustomerProfile SUCCESS : " .  "<br><br><br>"
       ."Customer Profile ID:  balbalbal<br><br>"
       .       'Customer ID:  Blabalbal<br><br>'
       .             "Email:  tomsa78@hotmail.it <br><br>"
       .       "Description:  Blablablabla";
  
 
 

	 
	 
	 
	 
	 
 
  
  
  ?>