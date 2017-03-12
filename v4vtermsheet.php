<?php session_start(); 
//var_dump($_SESSION['Email']);
if(!isset($_SESSION['Email']))
	header("Location: login.php");
//var_dump($_POST);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>About Page template By Adobe Dreamweaver CC</title>
<link href="AboutPageAssets/styles/aboutPageStyle.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Header content -->
<header>
<div class="profileLogo"> 
    <!-- <img src="logoImage.png" alt="sample logo"> -->Vision4Value termsheet 1-pager
  </div>
    <!-- Identity details -->
  <section class="profileHeader">
  <div class="row">
    <div class="col-xs-12 col-lg-6">
    <div class="table-responsive">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>Company</td>
            <td><input type="text" id="companyName2"  name ="companyname" class="form-control" autofocus required></td>
            </tr>
          <tr>
            <td>Contact Person</td>
            <td><input type="text" id="contactperson" name ="contactperson" class="form-control" autofocus required></td>
            </tr>
          <tr>
            <td>Phone no</td>
            <td><input type="text" id="Phoneno"  name ="phoneno" class="form-control" autofocus required></td>
            </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" id="Email" name ="email" class="form-control" autofocus required></td>
            </tr>
          <tr>
            <td>Company Website</td>
            <td><input type="text" id="companywebsite" name ="companywebsite" class="form-control" autofocus required></td>
            </tr>
          </tbody>
        <div>
    </div>
    <div class="col-lg-6"> <form method="POST" action="upload.php"><button type="submit" class="btn btn-primary btn-block">Upload</button></form></div>
  </div>
  <div class="col-xs-12 col-lg-6">
    
         
          </div>
        </table>
      </div>
    </div>
</div>
      <div class="row">
        <div class="col-lg-6">&nbsp;</div>
        <div class="col-lg-6">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-lg-6">&nbsp;</div>
        <div class="col-lg-6">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-lg-6">&nbsp;</div>
        <div class="col-lg-6">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-lg-6">&nbsp;</div>
        <div class="col-lg-6">&nbsp;</div>
      </div>
  </section>
  <!-- Links to Social network accounts -->
  <aside class="socialNetworkNavBar">
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png" alt="sample"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="sample"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="sample"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="sample"> </div>
  </aside>
</header>
<!-- content -->
<section class="mainContent"> 
  <!-- Contact details -->
  <section class="section1">
    <h2 class="sectionTitle">Content Holder 1</h2>
    <hr class="sectionTitleRule">
    <hr class="sectionTitleRule2">
    <div class="section1Content">
      <p><span>Email :</span> johndoe@email.com</p>
      <p><span>Website :</span> johndoe.com</p>
      <p><span>Phone :</span> (123)456 - 789000</p>
      <p><span>Address :</span> Anytown, Anycountry</p>
    </div>
  </section>
  <!-- Previous experience details -->
  <section class="section2">
    <h2 class="sectionTitle">Content Holder 2</h2>
    <hr class="sectionTitleRule">
    <hr class="sectionTitleRule2">
    <!-- First Title & company details  -->
    <article class="section2Content">
      <h2 class="sectionContentTitle">Title & Company</h2>
      <h3 class="sectionContentSubTitle">Position / Date - Year</h3>
      <p class="sectionContent"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
    </article>
    <!-- Second Title & company details  -->
    <article class="section2Content">
      <h2 class="sectionContentTitle"> Title & Company</h2>
      <h3 class="sectionContentSubTitle">Position / Date - Year</h3>
      <p class="sectionContent"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
    </article>
    <!-- Replicate the above Div block to add more title and company details --> 
  </section>
  <!-- Links to expore your past projects and download your CV -->
  <aside class="externalResourcesNav">
    <div class="externalResources"> <a href="#" title="Download CV Link">DOWNLOAD CV</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="#" title="Behance Link">BEHANCE</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="#" title="Github Link">GITHUB</a> </div>
  </aside>
</section>
<footer>
  <hr>
  <p class="footerDisclaimer">2014  Copyrights - <span>All Rights Reserved</span></p>
  <p class="footerNote">John Doe - <span>Email me</span></p>
</footer>
</body>
</html>
