    <?php

	

	include 'config.php';



	$action = $_GET['action'];

	if($action == 'form_submission'){
	    $rawprice = $_POST['optional']['price'];
	   // $raw_details = explode('<div class="slimScrollBar"', $_POST['title']);
	   $raw_details = $_POST['optional']['title'];
	
		$name = $_POST['name']; 
		$email = $_POST['email']; 
		$phone = $_POST['phone'];  
		
		$lead_url = $_POST['url'];
		$domain = htmlentities($_POST['domain']);
		$source = htmlentities($_POST['subject']);
		$price = htmlentities($rawprice);
		$pkgdetails = htmlentities($raw_details);
		$pkgctgry = $_POST['optional']['pkgctgry'];
		$pkgtitle = $_POST['optional']['pkgtitle'];
		$randomNum = substr($_POST['randomnum'], 1);
		//$randomNum = uniqid();
		$ip = $get_client_ip;
		//$city = $_POST['city'];
		//$state = $_POST['state'];
		//$country = $_POST['country'];
		$message = htmlentities($_POST['message']);
		$currentdate = time();
		$optional = '';
		$number = random_int(100000, 999999);
		
		$cxmLeadUrlComponents = parse_url(urldecode($lead_url));
	 
 	    parse_str($cxmLeadUrlComponents['query'], $cxmLeadUrlParams);
 	    $keyword = $cxmLeadUrlParams['keyword'];
 	    
 	    $matchtype = $cxmLeadUrlParams['matchtype'];
 	    $msclkid = $cxmLeadUrlParams['msclkid'];
 	    $gclid = $cxmLeadUrlParams['gclid'];

		
    // 	 $return_table = insert_into_table($name, $email, $phone, $lead_url, $domain, $source, $conn, $price, $pkgdetails, $pkgctgry, $pkgtitle, $randomNum, $currentdate, $get_client_ip, $city, $state, $country);



		$return_param = send_mail_to_admin($name, null, $email, $phone, $lead_url, $domain, $source, null, $message, 'naeem4every1@gmail.com', $optional);

		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));

	}
	
	
		function insert_into_table($name, $email, $number, $lead_url, $domain, $source, $conn, $price, $pkgdetails, $pkgctgry, $pkgtitle, $randomNum, $currentdate, $get_client_ip, $city, $state, $country){
		
	    $sql = "INSERT INTO leads (id, token, name, email, phone, url, domain, subject, services, pkgctgry, pkgname, price, date, ip, city, state, country, address, zipcode)
				VALUES (0, '$randomNum', '$name', '$email', '$number', '$lead_url', '$domain', '$source', '$pkgdetails', '$pkgctgry', '$pkgtitle', '$price', '$currentdate', '$get_client_ip', '$city', '$state', '$country', '', '')";
// 			echo $sql;
// 			exit();
	 	if ($conn->query($sql)) {
	 	    
			//echo "working";
	 		
	 	} else {
	 	    
			 //echo "not working";
		}
		 
	 	return 1;
	}




	

// 	$url = 'https://crm.wordpressdesigninc.com/api/store';

//     $data = array("firstname" => $name, "email" => $email, "phone" => $phone, "lead_description" => "", "lead_title" => "Need A Quote", "lead_creatorid" => 2, "lead_categoryid"=>61, "lead_source" => $source, "lead_custom_field_1" => $sysip, "lead_custom_field_6" => $addressl);
//     $postdata = json_encode($data);


//     $ch = curl_init($url); 
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//     $result = curl_exec($ch);
//     curl_close($ch);
    
    
    // New CRM Lead Start 
    $price = substr($price,1);
    $api_url = 'https://tgcrm.net/api/store';
    
    $data = array(
            'team_key' => '139290',
            'brand_key' => '690825',
            'title' => isset($pkgtitle)?$pkgtitle: 'No Title',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'details' => isset($pkgdetails)?$pkgdetails : 'No Details',
            'source' => isset($source)?$source : 'No Source',
            'value' => isset($price)?$price : '0.00', 
            'lead_ip' => isset($ip)?$ip : '---',
            'lead_city' => isset($city)?$city : 'No City',
            'lead_state' => isset($state)?$state : 'No State',
            'lead_zip' => isset($zip)?$zip : 'No Zip',
            'lead_country' => isset($country)?$country : 'No Country',
            'lead_url' => isset($lead_url)?$lead_url : 'No URL',
            'keyword' => isset($keyword)?$keyword : '---',
            'matchtype' => isset($matchtype)?$matchtype : '---',
            'msclkid' => isset($msclkid)?$msclkid : '---',
            'gclid' => isset($gclid)?$gclid : '---',
            //'browser' => getBrowser(),
            );
    $postdata = json_encode($data);

    $ch = curl_init($api_url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);
    // New CRM Lead End    
    



	function send_mail_to_admin($f_name, $l_name, $email, $number, $lead_url, $domain, $source, $services, $param_message, $admin_email, $optional){

		$to = $admin_email;

		$subject = $source;

		$from = $email;

		$optional = json_encode($optional);

		// Always set content-type when sending HTML email

		$header = "From:abc@domain.com \r\n";

        $header .= "MIME-Version: 1.0\r\n";

        $header .= "Content-type: text/html\r\n";



		// Compose a simple HTML email message

		$message = " First Name: $f_name \n Last Name: $l_name \n Email: $email \n Number: $number \n Url: $lead_url \n Domain: $domain \n Service: $services \n Message: $param_message \n Optional: $optional";

		

		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){

	        $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	    }else{

	        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	    }

	    $url_components = parse_url($url);



	    if($url_components['host'] == 'localhost'){

	    	return true;

	    }

	    // Sending email

	    if(mail('naeem4every1@gmail.com', $subject, $message)){

			return true;

		} else{

			return false;

		}

	}

?>


