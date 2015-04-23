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
	  <script src="http://code.jquery.com/jquery.js"></script>
	  <script type="text/javascript">
	  	 $(document).ready(function(){
	  	 		$("#language").on("change",function(){
	  	 			var lang = $("#language").val();
	  	 			$.post('<?php echo site_url("welcome/language_ajax");?>',{lang:lang},function(data){
				 		window.location.reload();
				 	});
	  	 		})
	  	 });
	  </script>
</head>
<body>
	<div class="heading">
	 					Multi Language In Codeigniter
	 </div>
	 	<div class="container">
	 			<div class="container-head">By URL</div>
	 			<div class="lang">
	 						<a href="<?php echo base_url().'en/'.$this->router->class.'/'.$this->router->method;?>">English</a>
	 						<a href="<?php echo base_url().'bn/'.$this->router->class.'/'.$this->router->method;?>">Bengali</a>
	 			</div>
	 		<form method="post" action="">
	 			<table>
	 				<tbody>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_your_name');?></td>
	 						<td><input type="text" size="20"></td>
	 					</tr>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_your_email');?></td>
	 						<td><input type="text" size="20"></td>
	 					</tr>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_message');?></td>
	 						<td><textarea name="" rows="5"></textarea></td>
	 					</tr>
	 					<tr>
	 						<td></td>
	 						<td><input type="submit" value="<?php echo $this->lang->line('save');?>" ></td>
	 					</tr>
	 				</tbody>
	 			</table>
	 		</form>
	 	</div>
	 	<div class="container">
	 			<?php 
	 				$lang = $this->session->userdata('language');
	 				 if($lang =='en') {
			          		$this->lang->load('en', 'english');
			          } else if($lang == 'ben'){
			          		$this->lang->load('ben', 'bengoli');
			          } else {
			          		$this->lang->load('en', 'english');
			          }
	 			?>
	 			<div class="container-head">By Session</div>
	 			<div class="lang">
	 					<label>Select Language</label>
	 					<select name="language" id="language">
	 							<option value="en" <?php if($lang =='en'){ echo "selected";}?> >English</option>
	 							<option value="ben" <?php if($lang =='ben'){ echo "selected";}?> >Bengali</option>
	 					</select>	
	 			</div>
	 		<form method="post" action="">
	 			<table>
	 				<tbody>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_your_name');?></td>
	 						<td><input type="text" size="20"></td>
	 					</tr>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_your_email');?></td>
	 						<td><input type="text" size="20"></td>
	 					</tr>
	 					<tr>
	 						<td><?php echo $this->lang->line('enter_message');?></td>
	 						<td><textarea name="" rows="5"></textarea></td>
	 					</tr>
	 					<tr>
	 						<td></td>
	 						<td><input type="submit" value="<?php echo $this->lang->line('save');?>" ></td>
	 					</tr>
	 				</tbody>
	 			</table>
	 		</form>
	 	</div>
	 	<div class="container">
	 		 <div class="container-head"> By Cookiee Example</div>
	 		 <a href="<?php echo site_url('welcome/bycookie');?>">Go</a>
	 	</div>
</body>
</html>




