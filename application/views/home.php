<html>
<head>
	<title>Google authentication library for codeigniter</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
          
</head>
<body>
	
	<div align="center">
		<h2>Google authentication library for Codeigniter</h2>
		
	</div>
	<div class="container">
		<div class="row">
	<a class="waves-effect waves-light btn-large">By:-Bhargav</a>
			<div class="col s12 m6 offset-m3 l6 offset-l3">

				<?php 
				if($this->session->userdata('sess_logged_in')==0){?>
					<a href="<?=$google_login_url?>"class="waves-effect waves-light btn red"><i class="fa fa-google left"></i>Google login</a>
				<?php }else{?>
					<a href="<?=base_url()?>auth/logout" class="waves-effect waves-light btn red"><i class="fa fa-google left"></i>Google logout</a>
				<?php }
				?>
	
			</div>
		</div>
		<div class="row">	

			<?php if(isset($_SESSION['name'])){?>
				<div class="col s12 m6 l4 offset-l3 " >
					<div class="card ">
			            <div class="card-image waves-effect waves-block waves-light">
			              <img class="activator" src="<?=$_SESSION['profile_pic']?>">
			            </div>
			            <div class="card-content">
			             <span class="card-title activator grey-text text-darken-4"> <i class="material-icons"><?=$_SESSION['name']?></i></span>
			            </div>
						 <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?=$_SESSION['name']?><i class="material-icons right">close</i></span>
      <p>Email Id: <?=$_SESSION['email']?></p>
    </div>
			        </div>
				</div>
			<?php }?>
		</div>
	</div>

</body>
</html>