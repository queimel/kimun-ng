<?php
 
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)) {
    $_POST = json_decode(file_get_contents('php://input'), true);    
    echo $data->whatever;
  }
 
$errors = '';
 
if(empty($errors))
{
 
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
 
	$from_email = $request->email;
	$message = $request->message;
    $from_name = $request->name;
    $from_subject = $request->subject

 
	$to_email = "ccampos.aviles@gmail.com";
 
	$contact = "<p><strong>Nombre:</strong> $from_name</p>
                <p><strong>Email:</strong> $from_email</p>";
	$content = "<p>$message</p>";
 
	$website = 'Kimunhuertas.cl';
	$email_subject = "$website: $from_subject";
 
	$email_body = '<html><body>';
	$email_body .= "$contact $content";
	$email_body .= '</body></html>';
 
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "From: $from_email\n";
	$headers .= "Reply-To: $from_email";
 
	mail($to_email,$email_subject,$email_body,$headers);
 
	$response_array['status'] = 'success';
	$response_array['from'] = $from_email;
	echo json_encode($response_array);
	echo json_encode($from_email);
	header($response_array);
	return $from_email;
} else {
	$response_array['status'] = 'error';
	echo json_encode($response_array);
	header('Location: /error.html');
}
?>