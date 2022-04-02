                               <?php

if(isset($_POST['submit'])){

    $amount = $_POST['amount']; //Amount to transact 
    $phonenumber = $_POST['phone']; // Phone number paying
    
    $Account_no = 'COMRADE MARKET'; // Enter account number optional
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenumber,
        'account_no'=>$Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey: Me3s8tLM8vW' // Replace with your api key
     );
    $info = http_build_query($data);
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    $msg_resp = json_decode($resp);
    
    
    if ($msg_resp ->success == 'true') {
        echo "<center><h5>WAIT FOR  STK POP UP🔥</h5></center>";
      } else {
        echo "Transaction Failed";
       
      }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Donate 💖
	</title>
</head>

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
<body>

   <?php include('nav.php'); ?>
<br><br>
<br>
<br>
<br>

<div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                        <br>
 
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="./home.php" method="POST" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">Amount :</span>
                                            </div>
                                            <input type="text" class="form-control"  aria-label="Username" name="amount"aria-describedby="basic-addon1" required>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Enter Phone:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="text" id="blns_1" name="phone" checked style="border:none; border-bottom: 1px solid green; outline: none;" required>
                                        </div>
                                       
                                   </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <input  class="boxed-btn4" type="submit" name="submit" value="Donate with Mpesa">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>    <br>
<br>
<br>
<br>
<?php  include('footer.php'); ?>