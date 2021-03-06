<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      @font-face { font-family: Sukhumvit; src: url('SukhumvitSet.ttc'); } 
      Sukhumvit {
          font-family: Sukhumvit
      }
  </style>
    <style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
  <a name="top"></a>
  <meta charset="utf-8">
  <title>Perdtye - Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="js/form-validator/jquery.form-validator.min.js"></script>
</head>

<body>
<!-- Header -->
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-default-top navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Perdtye</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        
						<li>
                            <a><b><Sukhumvit>"ประดินันทน์ เพชรเรืองรอง"</Sukhumvit></b></a>
                        </li>
                    </ul>

					<ul class="nav navbar-nav navbar-right">

                        <li>
							<a href="login1.html">Login</a>
						</li>
                        <li>
							<a href="signup1.html">Signup</a>
						</li>
						<li>
							<a href="#">Sell</a>
						</li>
                        <li>
							<a href="account.php">Account</a>
						</li>
                        <li>
							<a href="#">Logout</a>
						</li>
                        <li>
                            <a></a>
                        </li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!-- Header -->
<!-- Search -->
	<div class="row clearfix bgsearchtop">
		<div class="col-md-1 column">
		</div>
		<div class="col-md-10 column bgsearch">
			<div class="row clearfix">
                    <div class="col-md-3 column">
                        <div class="row clearfix">
                    <a href="index.php"><img src="img/logo.png" width="100%"/></a>
		          </div></div>

                <div class="col-md-9 column search" >
                	<form method="get" action="search.php">
                    <div class="row clearfix" style="vertical-align:middle">
                    <div class="col-md-2 column">

					<select class="form-control" id="select" name="category">
                        <option value="all">All Listing</option>
                        <option value="auc">Auction</option>
                        <option value="buy">Buy it now</option>
                      </select>
				</div>
				<div class="col-md-9 column">
                    <div class="form-group">
                  <input type="text" data-validation="required" class="form-control" id="inputDefault" placeholder="Search" name="search">
                </div>
				</div>
				<div class="col-md-1 column">
					 <button type="submit" class="btn btn-info">Search</button>
				</div>
                        </div>
                        </form>
		          </div>
			</div>
		</div>
		<div class="col-md-1 column">
		 
		</div>
	</div>
	<!-- Search -->
 <!--  zone profile-->
	<div class="container" style="margin-top:30px">
		
    <div class="row clearfix" style="height:200px">
    	<div class="col-md-1 column">
		 
		</div>
		
		<div class="col-md-3 column">
			<img alt="200x200" class="img-thumbnail" src="img/mhoo.jpg" />
		
	    </div>
	    
		<div class="col-md-4 column">
			<div class="well-shadow">
				<h4 style="text-align:top"> Name : John Test </h4>
			<p>&nbsp;</p>
			<h5 style="text-align:center">
				Feeding Ratings
			</h5>
				 <table class="table table-bordered" style="border-spacing: 2px">
				 	<thread>
				 		<th style="text-align:center">
				 			<text style="font-size:110%">(+)5,555</text>
				 			<text style="font-size:110%">Positive</text>
				 		</th>
				 		<th style="text-align:center">
				 			<text style="font-size:110%">(o)35</text>
				 			<text style="font-size:110%">Neutral</text>
				 		</th>
				 		<th style="text-align:center">
				 			<text style="font-size:110%">(-)345</text>
				 			<text style="font-size:110%">Negative</text>
				 		</th>
				 	</thread>
				 </table>
				

		</div>
	</div>
		<div class="col-md-1 column">
			
			<p>&nbsp;</p>
			 <button type="button" class="btn btn-default" style="width:300%">Edit Profile</button> 
				<p>&nbsp;</p>


			 <button type="button" class="btn btn-default"  style="width:300%">Report</button> 
			 	<p>&nbsp;</p>
			 <button type="button" class="btn btn-default"  style="width:300%">Sell Register</button>
		</div>
		<div class="col-md-3 column">
		</div>
	</div>

</div>


<!--  Zone summary-->

<div class="container" style="margin-top:30px">
	
	<div class="row clearfix">
		<div class="col-md-1 column">
		</div>

		<div class="col-md-8 column">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" aria-expanded="true">Summary</a></li>
  
    
  
</ul>
   <div class="container">

		<div class="col-md-12 column">

			
				
				<div class="col-md-2 column">
					<h4>
						My Profile : No Win
					</h4> 
					<!-- <button type="button" class="btn btn-default" style="width:100%">Buy</button>  -->
					<a href="account.php" class="btn btn-default"style="width:100%">Bidding</a> 
					<a href="accountdidntwin.php" class="btn btn-default disabled"style="width:100%">Didn't Win</a> 
					
						<a href="accounthistory.php" class="btn btn-default"style="width:100%">History</a>
					
						 <a href="accountsell.php" class="btn btn-default" style="width:100%">Sell</a>
						 <a href="accountQA.php" class="btn btn-default" style="width:100%">QA</a>
				</div>
				<p>&nbsp;</p>
				<div class="col-md-8 column">
					<h4>
						Didn't Win
					</h4>
					<table class="table" style="table-layout: fixed; width: 100%">
						<thead>
							<tr>
								<th width="5%">
									#
								</th>
								<th width="25%">
									Product
								</th>
								<th width="17%">
									Shop
								</th>
								<th width="17%">
									Time
								</th>
								<th width="18%">
									Price
								</th>
								<th width="18%">
									Last Price
								</th>
							</tr>
						</thead>

						<tbody>
							<?php for($x=1;$x<=10;$x++){?>
							<tr class="active">
								<td>
									<?php echo $x ?>
								</td>
								<td>
									<img src="img/iphone6 icon.jpg" width="100%"/>
									<p style="margin-top:15px;"><center>Iphone6</center></p>
								</td>
								<td>
									<text>Shop1</text>
									<text>(feedback)</text>
								</td>
								<td>
									<text>4h 42m left</text>
								</td>
								<td>
									<p style="color:red">THB 14,532</p>
									<p>21 bids</p>
								</td>
								<td>
									<p style="color:#33AA00">THB 32,532</p>
								</td>
							</tr>
							<?php
						}
						?>
							
							
						</tbody>
					</table>
				</div>
 
  				</div>
 				 </div>
 				</div>
 				
		</div>
	</div>
</div>
  
   <div class="row clearfix">
    <div class="col-md-12 column">
    </div>
  </div>
       
    <!--BOTTOM-->
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-default navbar-bottom2" role="navigation">
                
                    <ul class="nav navbar-nav">
                        <li><a></a></li>
            <li>
              <a href="#">FAQ</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
                        <li>
              <a href="#">Report</a>
            </li>
                        <li>
              <a href="#">Privacy</a>
            </li>
                        <li>
              <a href="#">Term of use</a>
            </li>
                        
          </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <li>
                            <a  href="#top">Back to top</a>
                        </li>
                        <li>
                            <a></a>
                        </li>
                    </ul></nav>
    </div>
  </div>


  <!--BOTTOM-->
    <script>
/* important to locate this script AFTER the closing form element, so form object is loaded in DOM before setup is called */
    $.validate({
        modules : 'date, security, sweden'
        
    });
   
</script>

</body>
</html>