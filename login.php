<?php session_start(); 

if(isset($_POST)){
	$invalidLogin = false;
	if(isset($_POST['Email']) && isset($_POST['Password'])){
		//validate
		$arr = json_decode(file_get_contents('data_file'),true);
		$email = $_POST['Email'];
		
		if(isset($arr[$email]) && $arr[$email]['Password'] === $_POST['Password']){
			
			$_SESSION['Email'] = $_POST['Email'];			
			$_SESSION['ContactPerson'] = $arr[$email]['ContactPerson'];
			header("Location: v4vtermsheet.php");
		}
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<link href="./css/login.css" rel="stylesheet" type="text/css">
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

<body>
<!-- Header content -->
<header>
<div class="container">
<div class="container-fluid">
<div align="center" class="newaccount" >Want to Start your Crowd based funding process?
  <button> Create a New account</button>
</div>

</div>
            <form method='POST' action='' class="form-horizontal" role="form" >
                
                <div class="form-group">
                <h2 align="left">Login</h2>
                     <label for="email" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" name="Email" class="form-control" required>
                  </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                     <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Password" name="Password" class="form-control" required>
                  </div>
                </div>                                                 
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </div>
              </form> <!-- /form -->
              <div align="center" class="container-fluid">
              <div >Forgot your Password? Click here </div> 
             <div> Once you send the 1-pager,you and Vision4Value will online sign a NDA so you will be sure the information  will be treated confidentially.</div>
              Before the funding partners receive the  1-pager,they also have to sign a NDA 	
              </div>
              
</div>
</header>
</body>
</html>

