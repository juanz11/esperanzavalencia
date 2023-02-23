<? 	
	//require 'Exception.php';
	require 'PHPMailer.php';
	require 'SMTP.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	
		$UserEmail = $_GET['email'];
	//	$SqlQuery = "select * from Information where UserEmail = '".$UserEmail."' ";
	/*	$SqlResult = mysqli_query($Connection, $SqlQuery);
		$SqlRow = mysqli_fetch_assoc($SqlResult);*/
		$Name = $_GET['name'];
	  	///////////////////// Send email /////////////////////
		$mail = new PHPMailer;
		$mail->SMTPAuth = true;
		$mail->Host =gethostbyname('malcacorp.com');
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'computerscience@malcacorp.com';
		$mail->Password = 'juanz11/*';
		$mail->setFrom('computerscience@malcacorp.com', 'DonorCure');
		$mail->Subject  = 'Reminder of DonorCure, the platform.';
		$mail->Body     ='<!DOCTYPE html>
		<html lang="EN">
			<head>
				<title>DonorCure Welcome Letter</title>
			</head>
			<body>
				<div style="background-color: white; width: 98%; text-align: right;">
					<table style="background: white">				                                   
						<tbody>
							<tr>
								<td>
									<div style="color: black; font-weight: bold; font-family: Arial, Helvetica, sans-serif; float:left; width:50%; text-align: justify; font-size: 100%; margin-top: 6.5%">
										<h1><em>Sr '.$Name.',</em></h1>
									</div>
		
									<div style="color: black; font-weight: bold; font-family: Arial, Helvetica, sans-serif; float:left; width:50%; text-align: justify; font-size: 100%;">
										<a style="width:100%;">
											<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="white">
												<img src="https://ci3.googleusercontent.com/proxy/xsyI_rzBEsVLQAr9-jFjMva9-v-01PnzImOodwFyEzaxnq4R_K4sxVKARJoqsSRNYqIS5zkkruxwz6MB_ao=s0-d-e1-ft#http://www.donorcure.malcacorp.com/logo.png" width="100%" alt="Image" border="0" class="CToWUd a6T" tabindex="0">
											</font>
										</a>
									</div>
								</td>
							</tr>

							<tr>
								<td>
									<div style="width: 100%; color: black; font-family: Arial, Helvetica, sans-serif; text-align: justify; font-size: 18px;">
									
									 <img id="alertExcl" class="excl" style="cursor: pointer;  z-index: 1100;" src="bloggif_5e503a7fa702d.png" />

										<p style="color: black">Thank you for your bitcoin donation  your will received another email with a tax receipt within 24 hours 
										and your interest in the South America initiative. You are receiving this email because you have  completed the donation process.</p>
						
										<p style="color: black">Again, we thank you for your intention to help through the donation application.</p>

										<p style="font-weight: bold; color: black;">Regards,</p>
						
										<p style="font-weight: bold; color: black;">the South america initiative Team.</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table> 
				</div>
			</body>
		</html>';

		$mail->IsHTML(true);
		$mail->addAddress($UserEmail, $Name);

		if(!$mail->send())
		{
			echo 'Message was not sent to '.$Name;
			echo 'Mailer error: '.$mail->ErrorInfo;
		}
		else
		{
			echo 'Thank you for your bitcoin donation';
		}
		
/*
		else
		{
			$SqlQuery = "Update Information SET Reminder = '1' WHERE UserEmail = '".$UserEmail."' ";
			$SqlRes = mysqli_query($Connection,$SqlQuery);
		}
*/	
?>