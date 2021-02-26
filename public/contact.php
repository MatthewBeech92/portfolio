<?PHP
require_once '../config/mailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $contact = filter_input_array(INPUT_POST, [
        'name' => FILTER_SANITIZE_STRING,
        'email' => FILTER_SANITIZE_EMAIL,
        'message' => FILTER_SANITIZE_STRING
    ]);

    foreach($contact as $field => $value) {
        if (empty($value)) {
            $errors[$field] = "Please enter a value for the $field field.";
        }
    }

    if(empty($errors['email'])){
        if (!filter_var($contact['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Please enter a valid email address.";
        } 
    } 

    if(empty($errors)){
        try {
            $mailer = new Swift_Mailer($transport); 

            $msgBody = "Name: " . $contact['name'] . "\n";
            $msgBody .= "Email: " . $contact['email'] . "\n\n";
            $msgBody .= "Message:\n" . $contact['message'];
    
            $message = (new Swift_Message())
                ->setSubject('Contact Form Message')
                ->setFrom('no-reply@matthewbeechwebdesign.co.uk')
                ->setTo('matt@matthewbeechwebdesign.co.uk')
                ->setBody($msgBody);
            
            $message->setReplyTo($contact['email']);
            $result = $mailer->send($message);

            if ($result) {
                echo "Message sent. I will get in touch soon. Thanks";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        http_response_code(422);
        echo json_encode($errors);
    }

}
