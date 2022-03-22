<?php 

if(isset($_POST['contactemail'])){
	$email=isset($_POST['contactemail'])?$_POST['contactemail']:"";
	$name=isset($_POST['contactname'])?$_POST['contactname']:"";
	$phone=isset($_POST['contactphone'])?$_POST['contactphone']:"";
	$msg=isset($_POST['contactmsg'])?$_POST['contactmsg']:"";
	
	$body ='';	
	$body .='Email : '.$email.' , ';
	$body .='Name : '.$name.' , ';
	$body .='Msg : '.$msg.' , ';
	$body .='Phone : '.$phone;
	$to = 'sujata.kumari@q3edge.com';
	$subject = 'Contact';

		$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <sujata.kumari@q3edge.com>' . "\r\n";
    
    mail($to,$subject,$body,$headers);	
}
	
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action="" method="POST">
    <div class="row">
	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 		<div class="col-md-6 col-xs-12">
 			<label>Name</label>
            <input name="contactname" type="text" class="form-control" placeholder="Name" required="required">
		</div>
				
				
		<div class="col-md-6 col-xs-12">
			<label>Email</label>
			<input name="contactemail" type="email" class="form-control" placeholder="Email" required="required">
		</div>
	
		<div class="col-md-6 col-xs-12">
			<label>Phone</label>
			<input name="contactphone" type="number" class="form-control"  placeholder="Phone">
		</div>
				
		<div class="col-md-6 col-xs-12">
 			<label>Message</label>
            <textarea name="contactmsg" placeholder="Message" class="form-control" rows="5" cols="10" required="required" ></textarea>
		</div>
			
		<div class="col-md-6 col-xs-12">
			<br>
 			<input name="submit" value="Submit" type="submit" class="btn btn-success" style="outline:none;border:0;">
		</div>
	</div>
	</div>
</form>
