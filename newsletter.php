<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Newsletter</title>
</head>
<?php include('links.php'); ?>
<body>
<?php include('nav.php'); ?>
<br>
<br>
<!--Newsletter area-->
  <div data-scroll-index='1' id="newsletter" class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Join our Newsletter</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="https://formspree.io/f/xlezwazv" class="donation_form" method="POST">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <button class="btn btn-sucess" type="submit" name="Submit" style="background:transparent;">Subscribe</button>
                                            </div>
                                       
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Email</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="email" id="blns_1" name="Email" checked style="border:none; border-bottom: 1px solid green; outline: none;">
                                            
                                        </div>
                                        
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
   
        </div>
    </div>
<!--#Newsletter area-->
<br><br><br>
<?php include 'footer.php'; ?>


</body>
</html>