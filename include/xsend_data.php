    <?php
	
 	include 'config.php';

	$action = $_GET['action'];
	if($action == 'form_submission' && isset($_POST['email']) && !empty($_POST['email'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		//$sysip = $_POST['sysip'];
		//$addressl = $_POST['addressl'];
		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
		// $return_table = insert_into_table($name, null, $email, $phone, $url, $domain, $subject, $conn, null, $message);
		$return_param = send_mail_to_admin($name, null, $email, $phone, $url, $domain, $subject, null, $message, 'naeem4every1@gmail.com', $optional);
		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));
		
		$url = 'https://crm.designwebsolution.com/api/store';
        $data = array("firstname" => $name, "email" => $email, "phone" => $phone, "lead_description" => "", "lead_title" => "Need A Quote", "lead_creatorid" => 2, "lead_categoryid"=>61, "lead_source" => $subject, "lead_custom_field_1" => $sysip, "lead_custom_field_6" => $addressl);
        
        $postdata = json_encode($data);
        
        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);
        
        
        // New CRM Lead Start 
    $price = substr($price,1);
    $api_url = 'https://tgcrm.net/api/store';
    
    $data = array(
            'team_key' => '139290',
            'brand_key' => '451755',
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
            'browser' => getBrowser(),
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
		
	}

	// function insert_into_table($f_name, $l_name, $email, $number, $url, $domain, $subject, $conn, $services, $message){
	// 	$sql = "INSERT INTO leads (f_name, l_name, email, phone, url, domain, subject, services, message)
	// 			VALUES ('$f_name', '$l_name', '$email', '$number', '$url', '$domain', '$subject', '$services', '$message')";
	//  	if ($conn->query($sql)) {
	//  		$last_id = $conn->insert_id;
	//  		session_start();
	//  		$_SESSION["customer_email"] = $email;
	//  		$_SESSION["customer_phone"] = $number;
	//  		$_SESSION["customer_url"] = $url;
	//  		$_SESSION["customer_id"] = $last_id;
	//  		return $last_id;
	//  	}
	//  	return 0;
	// }
	
	function send_mail_to_admin($f_name, $l_name, $email, $number, $url, $domain, $subject, $services, $param_message, $admin_email, $optional){
		$to = $admin_email;
		$subject = $subject;
		$from = $email;
		$optional = json_encode($optional);
		// Always set content-type when sending HTML email
		$header = "From:abc@domain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

		// Compose a simple HTML email message
		$message = " First Name: $f_name \n Last Name: $l_name \n Email: $email \n Number: $number \n Url: $url \n Domain: $domain \n Service: $services \n Message: $param_message \n Optional: $optional";
		
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