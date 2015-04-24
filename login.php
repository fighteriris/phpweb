<?php

$postdata = file_get_contents("php://input");
$request  = json_decode($postdata);

@$email = $request->email;
@$pass = $request->pass;
header('Content-Type: application/json');
echo $email; //this will go back under "data" of angular call.



?>
