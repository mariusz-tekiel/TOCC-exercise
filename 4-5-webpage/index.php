<?php include("head.php"); ?>

<body >
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-lg-left text-center">
				<h3 id="main-header">www.suffolk-holidays.co.uk</h3>
			</div>                          
		</div>
		<div class="row" id="space">
			<div class="col-xs-2 col-sm-4 ">
		</div>
		<div class="col-xs-8 col-sm-4 text-center" id="form-wrap">
			<form action="show_data.php" method="POST">
				<div class="form-group">      
					<input type="text" class="form-control" id="title" placeholder="Title" name="title">
				</div>
				<div class="form-group">      
					<input type="text" class="form-control" id="surname" placeholder="Surname" name="surname">
				</div>
				<div class="form-group">      
					<input type="email" class="form-control" id="email" placeholder="Email" name="email">
				</div>
				<div class="form-group">      
					<input type="textarea" class="form-control" id="message" placeholder="Message" name="message">
				</div>							
				<button type="submit" class="btn btn-success">Enquire now</button>
			</form>
		</div>							
		<div class="row" id="bottom-banner">
				<div class="col-sm-11 text-md-right text-center">
					<h1 id="question">Want to buy this domain?</h1>
				</div>
		</div>   
	</div>    
</body>
</html>
