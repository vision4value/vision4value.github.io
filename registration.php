<?php session_start();
 $_POST['use'] = '';
ini_set('display_errors', 1);
//var_dump($_POST);
if(isset($_POST['CompanyName'])){
	$_SESSION['use'] = $_POST['CompanyName'];
	//$_POST['KvkNo'], $_POST['ContactPerson'], $_POST['Email'], $_POST['Password'], $_POSR['FundingPartner'], $_POST['Customeradvisingpartner']
	$arr = array();
	$email = $_POST['Email'];
	$arr[$email]['ContactPerson'] = $_POST['ContactPerson'];
	$arr[$email]['Email'] = $_POST['KvkNo'];
	$arr[$email]['Password'] = $_POST['Password'];
	if(isset($_POST['MemberType'])){
		$arr[$email]['MemberType'] = 1;  //funding partner if client_type = 1
	}
	if(isset($_POST['Customeradvisingpartner'])){
		$arr[$email]['MemberType'] = 0;
	}
	$data_json = @file_get_contents("data_file");
	if(!empty($data_json)){
		$data = json_decode($data_json, true);
				if(array_key_exists($email,$data)){
			$msg = "User Exists. Please login";
			header("Location: login.php");
		}else {
			//var_dump($data);var_dump($arr);
			$data[$email] = $arr[$email];
			file_put_contents("data_file",json_encode($data));
			header("Location: login.php");
			//var_dump($data);
		}
		
		
	}else {
		
		file_put_contents("data_file",json_encode($arr));
		header("Location: login.php");
	}
	
	//var_dump(json_encode($arr));
}
 ?>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Registration</title>
<link href="./css/registration.css" rel="stylesheet" type="text/css">
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
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
<header></header>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Vision4Value</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Introduction</a></li>
        <li><a href="#">How it works</a></li>
        <li><a href="#">Funding Partners</a></li>
        <li><a href="#">Advising Partners</a></li>
        <li><a href="#">Costs</a></li>
        <li><a href="#">FAQ's</a></li>
         </ul>
       <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
              </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
            <form method="POST" action="" class="form-horizontal" role="form" >
                <h2>Registration Form</h2>
                <div class="form-group"> 
                  <label for="companyName"  class="col-sm-3 control-label text-left ">Company Name </label>
                  <div class="col-sm-9">
                    <input type="text" id="companyName2" placeholder="CompanyName" name ="CompanyName" class="form-control" autofocus required>
                  </div>
                </div>
             
                <div class="form-group">
                 
                    <label for="kvkNo" class="col-sm-3 control-label">KvK no </label>
                    <div class="col-sm-9">
                    <input type="text" id="kvkNo" placeholder="KvkNo" name="KvkNo" class="form-control" autofocus required>
                 </div>
                </div>
                <div class="form-group">
                 
                    <label for="contactPerson" class="col-sm-3 control-label">Contact Person</label>
                    <div class="col-sm-9">
                    <input type="text" id="contactPerson" placeholder="ContactPerson" name="ContactPerson" class="form-control" autofocus required>
                 </div>
                </div>
                <div class="form-group">
                 
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" name="Email" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
               
                    <label for="password" class="col-sm-3 control-label">Password</label>
                     <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" name="Password" class="form-control" required>
                  </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Member Type</label>
                    <div class="col-sm-9">
                        <div class="row">
                             <select name="MemberType">
		<option value="" selected="selected">Select</option>
		<option value="1">Customer Advising Partner </option>
		<option value="2">Funding Partner</option>
			</select>
                            </div>	
                           </div>
                </div> <!-- /.form-group -->
                               
              
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
</div>
</body>
</html>

