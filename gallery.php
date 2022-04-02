<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GALLERY</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<?php include ('links.php'); ?>
<style type="text/css">
	.lightbox-gallery {
    background-image: linear-gradient(#4A148C, #E53935);
    background-repeat: no-repeat;
    color: #000;
    overflow-x: hidden
}

.lightbox-gallery p {
    color: #fff
}

.lightbox-gallery h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: #fff
}

@media (max-width:767px) {
    .lightbox-gallery h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px
    }
}

.lightbox-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px
}

.lightbox-gallery .intro p {
    margin-bottom: 0
}

.lightbox-gallery .photos {
    padding-bottom: 20px
}

.lightbox-gallery .item {
    padding-bottom: 30px
}
</style>
<body>
	<?php include('nav.php'); ?>
	<br><br><br>
	<!--GALLERY-->
	<div class="lightbox-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-family: sans-serif;">Royalpatches Gallery</h2>
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/two.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/two.jpeg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/three.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/three.jpeg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/one.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/one.jpeg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./img/4.jpg" data-lightbox="photos"><img class="img-fluid" src="./img/4.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./img/2.jpeg" data-lightbox="photos"><img class="img-fluid" src="./img/2.jpeg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./img/3.jpeg" data-lightbox="photos"><img class="img-fluid" src="./img/3.jpeg"></a></div>

            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./img/1.jpg" data-lightbox="photos"><img class="img-fluid" src="./img/1.jpg"></a></div>

            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./img/5.jpg" data-lightbox="photos"><img class="img-fluid" src="./img/5.jpg"></a></div>

            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/two.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/two.jpeg"></a></div>

            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/two.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/two.jpeg"></a></div><div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/two.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/two.jpeg"></a></div><div class="col-sm-6 col-md-4 col-lg-3 item"><a href="./images/two.jpeg" data-lightbox="photos"><img class="img-fluid" src="./images/two.jpeg"></a></div>
        </div>
    </div>
</div>
   	<!--GALLERY-->

<?php include('footer.php') ?>