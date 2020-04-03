<!DOCTYPE html>
<html>
<head>
	<title>Sending Email testing</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>

			<div class="col-md-4 border mt-5">
				<h5 class="text-primaryp p-3 text-center">Send Email Using SMTP</h5>

				<!-- Success Flash message  -->

				<?php if($error = $this->session->flashdata('msg')){ ?>
       				<p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
  				<?php } ?>

  				<!-- End Flash message -->

				<form action="<?php echo base_url(); ?>index.php/email_send/send" method="post">
					<input type="email" name="input_email" class="form-control p-3 mt-2 mb-2" placeholder="Enter Email here..." required>

					<textarea name="message" placeholder="Enter your message here..."class="form-control  p-3 mt-2 mb-2">
						
					</textarea>
					<div class="text-center">
						<input type="submit" name="submit" value="Send" class="btn btn-success mt-2 mb-2">
					</div>
					
					
				</form>
			</div>

			<div class="col-md-4">
				
			</div>
		</div>
	</div>
	


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>