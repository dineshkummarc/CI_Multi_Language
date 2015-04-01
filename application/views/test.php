<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		.heading {
			text-align:center;
			font-size: 1.5em;
		}
		.container {
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 50px;
		}
		.container .container-head {
			height: 20px;
			background-color: #777;
		}
		.lang {
			margin-left: 80%;
		}
	</style>
	  
	  
</head>
<body>
	<div class="heading">
	 					Multi Language In Codeigniter <br/>
	 					<sub>By Cookie</sub>
	 </div>
	 	
	 	<div class="container">
	 			<form method="POST" action="" >
	 				<?php echo $this->lang->line('enter_your_name');?>
	 				<select name="lang">
	 									<option value="en">English</option>
	 									<option value="ben">Bengali</option>
	 							</select>

	 				<input type="submit">			
	 			</form>

	 	</div>
</body>
</html>




