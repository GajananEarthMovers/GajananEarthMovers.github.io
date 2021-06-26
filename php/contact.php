 <!-- <?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

//input

if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the fields";
}
else{
    mail("preranadhotre2000@gmail.com", "Website Message", $message, "from: $name <$email>");
    echo "<script type='text/javascript'> alert('Your message sent successfully');
    window.history.log(-1);
    </script>"
}

?>  -->