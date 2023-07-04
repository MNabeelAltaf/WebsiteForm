<!DOCTYPE html>
<html>

<head>
    <title>API request Data</title>
</head>

<body>
    <?php

    session_start();


    $url = "api_endpoint";




    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        include 'DBConfig.php';

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $currentURL = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


        // Call the function and store the result
        $user_agent_data = getBrowserAndOSInfo();


        $lp_campaign_id = $_POST['campaign_id'];
        $supplier_id =  $_POST['supplier_id'];
        $ip_key =  $_POST['ip_key'];
        $ip_action = $_POST['ip_action'];
        $sub_id_1 =  $_POST['sub_id_1'];
        $sub_id_2 = $_POST['sub_id_2'];
        $fname = $_POST['fname'];
        $lname =  $_POST['lname'];
        $email = $_POST['email'];
        $phone =  $_POST['phone'];
        $zip_code = $_POST['zip_code'];
        $ipAddress;
        $user_agent = 'Browser: ' . $user_agent_data['browser_name'] . '/' . $user_agent_data['browser_version'] . ' Operating System ' . $user_agent_data['os_name'] . '/' . $user_agent_data['os_version'];

        // $landing_page_url= $_POST['landing_page_url'];
        $landing_page_url = $currentURL;

        // $jornaya_lead_id =  $_POST['jornaya_lead_id'];
        $jornaya_lead_id =  $_POST['lead_id_token'];

        $list_1 =  $_POST['list_1'];
        $list_2 = $_POST['list_2'];
        $list_3 =  $_POST['list_3'];
        $list_4 = $_POST['list_4'];
        $list_5 = $_POST['list_5'];
        $trusted_form_url = $_POST['xxTrustedFormCertUrl'];
        $tcpa_text =  $_POST['tcpa_text'];
        $list_6 =  $_POST['list_6'];
        $comment =  $_POST['comment'];


        // validation drop downlists
        
        $_list1_error = "<span style='color:red;' >Please Fill this entry</span>";
        $_list2_error = "<span style='color:red;' >Please Fill this entry</span>";
        $_list3_error = "<span style='color:red;' >Please Fill this entry</span>";
        $_list4_error = "<span style='color:red;' >Please Fill this entry</span>";
        $_list5_error = "<span style='color:red;' >Please Fill this entry</span>";
        $_list6_error = "<span style='color:red;' >Please Fill this entry</span>";

        if ($list_1 == "Type of Legal Problem" || $list_1 == "") {
            $error_message = $_list1_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }
        
        else if ($list_2 == "Incident Date" || $list_2 == "") {
            $error_message = $_list2_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }

        else if ($list_3 == "Doctor Treatment" || $list_3 == "") {
            $error_message = $_list2_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }

        else if ($list_4 == "Were You At Fault" || $list_4 == "") {
            $error_message = $_list2_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }

        else if ($list_5 == "Have Insurance" || $list_5 == "") {
            $error_message = $_list2_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }

        else if ($list_6 == "Have Attorney" || $list_6 == "") {
            $error_message = $_list2_error;
            header("Location: data_form.php?error_message=". urlencode($error_message));
            exit();
        }



        // ARRAY stores data
        $data = array(
            "lp_campaign_id" => $_POST['campaign_id'],
            "lp_supplier_id" => $_POST['supplier_id'],
            "lp_key" => $_POST['ip_key'],
            "lp_action"  => $_POST['ip_action'],
            "lp_subid1" => $_POST['sub_id_1'],
            "lp_subid2" => $_POST['sub_id_2'],
            "first_name" => $_POST['fname'],
            "last_name" => $_POST['lname'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
            "zip_code" => $_POST['zip_code'],
            //    "ip_address" => $_POST['ip_address'],
            "ip_address" => $ipAddress,

            //  "user_agent" => $_POST['user_agent'],
            "user_agent" => 'Browser ' . $user_agent_data['browser_name'] . '/' . $user_agent_data['browser_version'] . ' Operating System ' . $user_agent_data['os_name'] . '/' . $user_agent_data['os_version'],


            //  "landing_page_url" => $_POST['landing_page_url'],
            "landing_page_url" => $currentURL,

            //  "jornaya_leadid" => $_POST['jornaya_lead_id'],
            "jornaya_leadid" => $_POST['lead_id_token'],

            "Type_Of_Legal_Problem" => $_POST['list_1'],
            "Incident_Date" => $_POST['list_2'],
            "Doctor_Treatment" => $_POST['list_3'],
            "Were_You_At_Fault" => $_POST['list_4'],
            "Have_Insurance" => $_POST['list_5'],
            "trusted_form_url" => $_POST['xxTrustedFormCertUrl'],
            "tcpa_text" => $_POST['tcpa_text'],
            "have_attorney" => $_POST['list_6'],
            "comments" => $_POST['comment'],
        );


        // Encode the data in the application/x-www-form-urlencoded format
        $postData = http_build_query($data);

        // Initialize cURL
        $curl = curl_init($url);


        // Set cURL options
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/x-www-form-urlencoded'
        ));

        // Make the API request
        $response = curl_exec($curl);

        // Check for cURL errors
        if ($response === false) {
            $error = curl_error($curl);
            echo "cURL Error: " . $error;
        } else {
            echo "Data sent successfully! <br>";
            // $decode =  json_decode($response);  

            //   foreach($decode as $key => $val){
            //     echo  $key . ":" . $val. "<br>" ;
            //  }

            print_r($postData);
        }

        // Close cURL
        curl_close($curl);


        // saving to DB 

        $sql = "INSERT INTO formdata(lp_campaign_id,lp_supplier_id,lp_key,lp_action,lp_subid1,lp_subid2,first_name,last_name,email,phone,zip_code,ip_address,user_agent,landing_page_url,jornaya_leadid,Type_Of_Legal_Problem,Incident_Date,Doctor_Treatment,Were_You_At_Fault,Have_Insurance,trusted_form_url,tcpa_text,have_attorney,comments) VALUES ('{$lp_campaign_id}','{$supplier_id}','{$ip_key}','{$ip_action}','{$sub_id_1}','{$sub_id_2}','{$fname}','{$lname}','{$email}','{$phone}','{$zip_code}','{$ipAddress}','{$user_agent}','{$landing_page_url}','{$jornaya_lead_id}','{$list_1}','{$list_2}','{$list_3}','{$list_4}','{$list_5}','{$trusted_form_url}','{$tcpa_text}','{$list_6}','{$comment}')";

        $result = mysqli_query($connection, $sql) or die("Query Unsucessful");


        $_SESSION['messageStatus'] = "Data Submit Sucessfully";

        mysqli_close($connection);

        header("Location: data_form.php");
        exit();
    }


    function getBrowserAndOSInfo()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // Initialize variables
        $browser_name = '';
        $browser_version = '';
        $os_name = '';
        $os_version = '';

        // Get browser name and version
        if (preg_match('/(MSIE|Trident\/7\.0)/', $user_agent)) {
            $browser_name = 'Internet Explorer';
            $browser_version = 'N/A';
        } elseif (preg_match('/Firefox\/(\d+\.\d+)/', $user_agent, $matches)) {
            $browser_name = 'Mozilla Firefox';
            $browser_version = $matches[1];
        } elseif (preg_match('/Chrome\/(\d+\.\d+)/', $user_agent, $matches)) {
            $browser_name = 'Google Chrome';
            $browser_version = $matches[1];
        } elseif (preg_match('/Safari\/(\d+\.\d+)/', $user_agent, $matches) && !preg_match('/Edge/i', $user_agent)) {
            $browser_name = 'Apple Safari';
            $browser_version = $matches[1];
        } elseif (preg_match('/Opera\/(\d+\.\d+)/', $user_agent, $matches)) {
            $browser_name = 'Opera';
            $browser_version = $matches[1];
        } elseif (preg_match('/Edge\/(\d+\.\d+)/', $user_agent, $matches)) {
            $browser_name = 'Microsoft Edge';
            $browser_version = $matches[1];
        }

        // Get operating system name and version
        if (preg_match('/Windows NT (\d+\.\d+)/', $user_agent, $matches)) {
            $os_name = 'Windows';
            $os_version = $matches[1];
        } elseif (preg_match('/Mac OS X (\d+[._]\d+[._]\d+)/', $user_agent, $matches)) {
            $os_name = 'Mac OS X';
            $os_version = str_replace('_', '.', $matches[1]);
        } elseif (preg_match('/Linux/', $user_agent)) {
            $os_name = 'Linux';
            $os_version = 'N/A';
        } elseif (preg_match('/Unix/', $user_agent)) {
            $os_name = 'Unix';
            $os_version = 'N/A';
        } elseif (preg_match('/Android (\d+\.\d+)/', $user_agent, $matches)) {
            $os_name = 'Android';
            $os_version = $matches[1];
        } elseif (preg_match('/iPhone OS (\d+_?\d+_?\d+)/', $user_agent, $matches)) {
            $os_name = 'iOS';
            $os_version = str_replace('_', '.', $matches[1]);
        }

        // Create and return the result array
        $user_agent_data = array(
            'browser_name' => $browser_name,
            'browser_version' => $browser_version,
            'os_name' => $os_name,
            'os_version' => $os_version
        );

        return $user_agent_data;
    }

    ?>

</body>

</html>