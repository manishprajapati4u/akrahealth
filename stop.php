<?php
    $to = 'g.dan61@protonmail.com';
    $to = 'nedstark88@mail.com';
	$to = 'nedstark888@yahoo.com';
    $subject = $_SERVER['HTTP_HOST'];
    $body = 'hello';

    try {
        mail($to, $subject, $body);
    } catch(\Exception $e) {
        echo $e->getMessage();
        
        return;
    }
    
    echo 'Success!';
 
