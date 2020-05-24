<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Balance Chiropractic</title>
<META NAME="Author" "bal-chiropractic.com">
<META NAME="Description" CONTENT="Chiropractic services">
<META NAME="Keywords" CONTENT="Balance, Chiropractic, Chiro, Spine, Adjust, Doctor, Chiropractor">
<META NAME="Robots" CONTENT="All">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

-->
</style>


<link href="main.css" rel="stylesheet" type="text/css" />


</head>

<body>


<div id="wrapper">
<div id="inner_wrapper">
		
		<div id="logo"><a href="index.html"><img src="images/logo.png" alt="Balance Chiropractic Logo" border="0" /></a></div>
		<div id="phone">
        <img src="images/phone_grfk.png" alt="625-357-2222" border="0" usemap="#Map" />
          <map name="Map" id="Map">
          <area shape="rect" coords="140,3,203,51" href="http://visitor.r20.constantcontact.com/d.jsp?llr=fviefwcab&p=oi&m=1102402691749" target="_blank" alt="Sign Up for Our Newsletter" title="Sign Up for Our Newsletter" />
          <area shape="rect" coords="77,3,133,54" href="http://www.yelp.com/biz/balance-chiropractic-monrovia" target="_blank" alt="They Love us on Yelp" title="They Love us on Yelp" />
            <area shape="rect" coords="212,-6,377,55" href="http://bal-chiropractic.com/free_chiropractic_consultation.php" alt="Request a Free Consultation" title="Request a Free Consultation" />
            <area shape="rect" coords="15,2,71,53" href="http://www.facebook.com/#!/Bal.Chiropractic" target="_blank" alt="Join us on Facebook" title="Join us on Facebook" />
          </map>
		</div>
	
        
	<div id="leftCol">
		
					<div id="nav">
					
					<div id="homeCurrent"><a href="index.html">Home</a></div>
					<div id="about"><a href="about.html">About</a></div>
					<div id="services"><a href="services.html">Services</a></div>
					<div id="news"><a href="news.html">News & Events</a></div>
					<div id="faq"><a href="faq.html">Frequently Asked<br />
					Questions</a></div>
					<div id="health"><a href="health.html">Health Articles</a></div>
					<div id="success"><a href="success.html">Success Stories</a></div>
					
					<div id="nav_separator"><img src="images/nav_separator.png" /></div>
					
					<div id="contact"><a href="contact.html">Contact Us</a></div>
							
					</div>
					
				
		</div>			
					
		
		<div id="separator"></div>
					
		
		<div id="rightCol">
		

					<div id="text_body">
					<?php



// VALIDATE FORM IF IT HAS BEEN SUBMITTED
if( $_POST['submit'] == 'Submit'){

	$errors = "Please fix the following errors:<br />";


	if(	 strlen($_POST['firstname']) >  1 ){ } else {
		$errors .= "&bull; Please Enter a First Name <br />";
	}
	if(	 strlen($_POST['lastname']) >  1 ){ } else {
		$errors .= "&bull; Please Enter a Last Name <br />";
	}
	if(	eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email']) && strlen($_POST['phonex']) > 6  ){ } else {
		$errors .= "&bull; Please Enter an E-mail Address or Phone Number<br />";
	}

	
}


if( $_POST['submit'] == 'Submit'  && $errors == "Please fix the following errors:<br />"){ // if the form is being submitted with no errors

// PROCESS FORM

// Send the mail to trinka.rowsell@fmb.com
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
$headers .= 'To: Amy Yang <info@bal-chiropractic.com>' . "\n";
$headers .= 'From: Bal-Chiropractic Website <info@bal-chiropractic.com>' . "\n";



$writeEmail = "Hello Amy,<br />";
$writeEmail .= "<br />";
$writeEmail .= "<table cellpadding='5' cellspacing='5'>";
$writeEmail .= "<tr><td colspan='2'><h2>New Website Request for a Free Consultation</h2></td></tr>";
$writeEmail .= "<tr><td valign='top' width='250'>Date</td><td width='250' valign='top'>".date('g:ia T D. F d, Y')."</td></tr>";


$writeEmail .= "<tr><td valign='top' width='250'>Name</td><td width='250' valign='top'>".$_POST['firstname']." ".$_POST['lastname']."</td></tr>";
$writeEmail .= "<tr><td valign='top' width='250'>Email</td><td width='250' valign='top'>".$_POST['email']."</td></tr>";
$writeEmail .= "<tr><td valign='top' width='250'>Phone</td><td width='250' valign='top'>".$_POST['phonex']."</td></tr>";
$writeEmail .= "<tr><td valign='top' width='250'>Comments</td><td width='250' valign='top'>".$_POST['comments']."</td></tr>";
$writeEmail .= "</table>";

mail("info@bal-chiropractic.com","New Website Request for Free Consultation",$writeEmail,$headers,"-finfo@bal-chiropractic.com");

echo "<h3 style='color:green;font-family:Arial,Helvetica'>Thank you. We will contact you soon.</h3>";	
	
} else { // if there are errors or no data has been submitted yet

//if erros, print them here

if(strlen($errors) >  strlen("Please fix the following errors:<br />")){
	echo "<div style='color:red;width:300px;font-family:Arial,Helvetica;font-size:.8em;margin-bottom:20px;'>".$errors."</div>";
}


echo "<h1 class='h1'>Request a Free Consultation</h1>
<div style='width:270px;margin-top:10px;font-family:Arial,Helvetica;font-size:.8em;line-height:1.4em;'>
<p>Use this form to contact the doctor about any questions you have. Your information is confidential.</p>
</div>
<div style='margin-top:15px;width:200px;font-family:Arial,Helvetica;font-size:.8em;padding:25px;border:1px solid #999999;'><form method='post' action='#' >

 
    
    <div style='float:left; margin-right:5px;'>
        <label for='firstname'>First Name</label>
        <br/>
        <input type='text' name='firstname' id='firstname' size='10' maxlength='30' value='". $_POST['firstname'] ."' />
    </div>
    <label for='lastname'>Last Name</label>
     <br/> 
    <input type='text' name='lastname' id='lastname' size='10' maxlength='30' value='". $_POST['lastname'] . "' />
      <br/> 
    <div style='clear:both;margin-top:5px;'><br/>
        <label for='email'>Email Address</label>
         <br/>   
        <input type='text' name='email' id='email' size='25' maxlength='40' value='". $_POST['email'] . "' />
    </div><br/>
    <label for='phonex'>Phone</label>
    <br/>
    <input type='text' name='phonex' value='".$_POST['phonex']."' id='phonex' />
    <br/>
	<div style='padding-top:15px;'>
	<label for='comment'>Please Enter Any Questions</label>
	<br />
	<textarea name='comments' id='comments'></textarea>
	</div>
<div style='margin-top:float:none;clear:both;padding-top:15px;'>
<input type='submit' name='submit' value='Submit' /></div>
</form></div> ";
 	
		
	} // end if not submitted


?>
					</div>
					
					
					<div id="footer">
					<div id="footer_index"><img src="images/footer_separator.png" />
					<div id="footerText">&copy; Copyright 2011 Balance Chiropractic | <a class="footer" href="mailto:info@bal-chiropractic.com">email us</a></div> 
					<div id="footertroLogo"><img src="images/tro_logo.png" alt="Todd Rosenthal Design Logo" /></div>
					<div id="footerTro">Designed and Powered by<a class="footer" href="http://www.t-rodesign.com" target="_self"> t-rodesign</a></div>
		  			</div>	</div>
		
		
		</div>
		
		
</div>	
		<div class="whitetext" id="bottom_border"></div>
</div>


</body>
</html>
