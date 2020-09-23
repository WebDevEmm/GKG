<?php 

$name = $phone = $email = $date = $time = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $phone = test_input($_POST["phone"]);
    $emailFrom = test_input($_POST["email"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]);
    $message = test_input($_POST["message"]);
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        
        // CHANGE THESE EMAIL TO THE PROPPER ONE ONCE AQUIRED
        $emailTo = "realtors@domain.com";
        $subject = "I filled up a form on you webpage!";
        $headers= "From: ".$emailFrom;
        $txt = "You have received an e-mail from ".$name.", whose phone number is ".$phone.".\n\nPlease call me on ".$date.", at ".$time.".\n\nMessage: \n".$message;
        
        mail($emailTo, $subject, $txt, $headers);

        header("Location: ./index.php?formstatus=success&date=$date&time=$time#form--top");
        
    } else {

        header("Location: ./index.php?formstatus=invalidemail&name=$name&phone=$phone&email=$emailFrom&date=$date&time=$time&message=$message#form--top");
    }

}else{

    header("Location: ./index.php?formstatus=error#form--top");
    // exit();
}

function test_input($data){
    if (($data !== $_POST['message'] && $data !== $_POST["time"]) && empty($data)) {

        header("Location: ./index.php?formstatus=emptydata&name=$name&phone=$phone&email=$email&date=$date&time=$time&message=$message#form--top");

    } else if ($data === $_POST["email"]){
        $data = filter_var($data, FILTER_SANITIZE_EMAIL);
    }
    //  else if ($data === $_POST["email"] && !filter_var($data, FILTER_VALIDATE_EMAIL)){
    //     header("Location: ../index.php?formstatus=invalidemail&name=$name&phone=$phone&email=$emailFrom&date=$date&time=$time&message=$message#form--top");

    else {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = trim(preg_replace('/\s\s+/', ' ', $data));
        return $data;
    }
}

?>