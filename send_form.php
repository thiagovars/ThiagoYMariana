<?php 
//Add here the email where you want to recieve data sent from the form.
$your_email="your_email@site.com";

$result = '<img src="img/form-icon-error.png"/><br/><span class="title error">Sorry!</span><br/>Your data has not been sent. Please try again.<br /><strong>Error: #AJ002</strong><br /><br /><button class="btn btn-default BtnCloseResult" type="button">Close</button>';
if(!empty($_POST)){
    
    $events = '';
    if(isset($_POST['events']) && $_POST['events'] != ''){
        foreach($_POST['events'] as $value){
            $events .= ''.$value.', ';
        }
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to      = $your_email;
    $subject = 'New RSVP Form: '.$name;
    $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
    $message = 'New RSVP data sent from your website:'."\r\n".'Name: '.$name."\r\n".'Email: '.$email."\r\n".'Will attend: '.$events."\r\n".'Message: '.$message;
    
    if(mail($to, $subject, $message, $headers)){
        $result = '<img src="img/form-icon-ok.png"/><br /><span class="title success">Thanks!</span><br>Your info has been sent!<br /><br /><button class="btn btn-default BtnCloseResult" type="button">Close</button>';
    }
}

echo $result;
?>