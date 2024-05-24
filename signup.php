<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if (!empty($username) && !empty($email) && !empty($password)){
        $xml = simplexml_load_file("xml/userData.xml") ?: new SimpleXMLElement('<data/>');

        $user = $xml->addChild('user');
        $user->addChild('username', $username);
        $user->addChild('email', $email);
        $user->addChild('password', $password);

        if ($xml->asXML("xml/userData.xml")){
            header("Location: signup.html?status=success");
        } else{
            header("Location: signup.html?status=error&message=Failed+to+write+XML+file.");
        }
    } else{
        header("Location: signup.html?status=error&message=Invalid+form+data.");
    }
    exit;
} else{
    header("Location: signup.html");
    exit;

}
?>