<?php


    // Enable error display
    ini_set('display_errors', 1);
    
    // Log PHP errors to a file
    ini_set('log_errors', 1);
    ini_set('error_log', 'error.log');

    // Retrieve the request's body and parse it as JSON
    
    if($_SERVER['REQUEST_METHOD']!="POST" || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ){ 

      exit();

    }


    $input = @file_get_contents("php://input");
    
        
      define('PAYSTACK_SECRET_KEY','sk_test_4f5c5e76086227da772dc471a9f25346585d08c3');
  // validate event do all at once to avoid timing attack
  if($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))
  
  exit();

    
    $headers = getallheaders();
    $header = json_encode($headers);
    
    file_put_contents('file1.html', '<pre>'. $input.'</pre>');
      file_put_contents('file2.html', '<pre>'. $header.'</pre>');

    http_response_code(200); 
    $events = json_decode($input);

    
    $conn = mysqli_connect("127.0.0.1","ishcmgcc_users","Nengimote@1234","ishcmgcc_user");
    
    if(!$conn == true){
        echo "Database not connected";
    }
    
    
    if($events->event == "charge.success"){
        
        //   $sign = $events->data->authorization->signature;
        //  $select ="SELECT * FROM `json` where `signature` = '$sign'";
        //  $query = mysqli_query($conn, $select);
        //  if($query == true){
        //      echo "signature already exist";
        //      die();
        //  }
         
        $reference_id = $events->data->reference;
        $username= $events->data->authorization->account_name;
        $amount = $events->data->amount/100;
        $reasons = "Donor";
        $payment_type = "Paystack";
        $email_address = $events->data->customer->email;
        $contact_address = "Home";
        $region_code = $events->data->ip_address;
        $country = "Nigeria";
        $status = "success";
        $date = "4 may, 2024";
        $auth_code = $events->data->authorization->authorization_code;
        $card_type = $events->data->authorization->card_type;
        $signature = $events->data->authorization->signature;
        $account_name = $events->data->authorization->account_name;
        $expiring_month = $events->data->authorization->exp_year;
        
        // `region_code`='$region_code'
        
        $update = "UPDATE `account_collections` SET `reference_id`='$reference_id',`amount` = '$amount', `payment_type` = 'PAYSTACK',`status` = '$status', `auth_code` = '$auth_code', `card_type` = '$card_type', `signature` = '$signature', `account_name` = '$account_name', `expiring_month` = '$expiring_month' WHERE `reference_id`= '$reference_id'";
        
        $query = mysqli_query($conn, $update);
        
        if($query == true){
            echo "successfully updated";
        }else{
            echo "Not updated";
        }
        
        
        // $insert = "INSERT INTO `account_collection`(
        //      `reference_id`,
        //      `username`,
        //      `amount`,`reasons`,`payment_type`,
        //      `email_address`,`contact_address`,
        //      `region_code`,`country`,
        //      `status`,`date`,`auth_code`,
        //      `card_type`,`signature`,`account_name`,`expiring_month`
        //     ) VALUES('$reference_id','$username','$amount','$reasons','$payment_type',
        //     '$email_address','$contact_address','$region_code','$country',
        //     '$status','$date','$auth_code','$card_type','$signature','$account_name','$expiring_month'
        //     )";
            // $query= mysqli_query($conn, $insert);
   
    }
    
    
    
    
    
    
    

?>