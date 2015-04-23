<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookiee</title>
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
 									<option value="en" <?php echo get_cookie('languageCi')==="en"?'selected':'';?> >English</option>
 									<option value="ben" <?php echo get_cookie('languageCi')==="ben"?'selected="selected"':'';?> >Bengali</option>
 							</select>

 				<input type="submit">			
 			</form>

 	</div>

 	 <div class="heading" style="margin-top:50px;">
			<sub>Cookie change by Javascript</sub>
	 </div>
	 <div class="container">
	 	        <div style="margin-left:250px;">
	 	        	<a href="" onclick="bengali();">Bengali</a>
	 	        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	 	        	<a href="" onclick="english();">English</a>
	 	        </div>
	 </div>

	 <script type="text/javascript">
	 	var base = "<?php echo base_url();?>";
		function bengali() {
		    document.cookie = "languageCi=ben;path=/";
		    window.location= base + "welcome/bycookie";
		}

		function english() {
		    document.cookie = "languageCi=eng;path=/";
		    window.location= base + "welcome/bycookie";
		}
	</script>

</body>
</html>




