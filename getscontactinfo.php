<!DOCTYPE html>
<html>
<!-- This allow the html web page to be accessed online -->
<head>
    <!-- The head is used for the top section of the page -->
    <meta charset="UTF-8"/>
    <title>Contact me</title>
    <!-- Here is the title used on the contact us page -->
</head>

<body>
<?php

//<!-- these are the subject that will be used on the contact form -->

$to         ="mcglind1@tcnj.edu";// this is the email which the user content will be sent to
$subject    = "Website feedback";
$forename   = $_REQUEST['forename'];
$surname    = $_REQUEST['surname'];
$from       = $_REQUEST['from'];
$question   = $_REQUEST['question'];

$rate       = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : '';
$feedback   = $_REQUEST['feedback'];


if (empty($surname)){
    echo "you didn't give me a surname";
}

else {
    echo "thank you $surname";
}
//<!-- this feed back to you surname -->
if ($rate == 'y'){
    $rate = 'yes';
}
else{
    if ($rate == 'n') {
        $rate == 'no';
//<!-- this feedback to you option on the site  -->
    }
}
mail($to, $subject, "From: $from", "Thank You $forename $surname your question type was $question Thank you for your response $feedback feel free to responed again $rate" );
//<!-- this is what send off the information to the does email address -->


//if (isset($_REQUEST['gender'])) {
//    $gender = $_REQUEST['gender'];
//}
//else {
//    $gender = '';
//}


$output = "";

$output .= "<p>Hello $forename $surname from $from";
$output .= "<p>Thank you for your question about $question <br/> and your feedback $feedback</p>";


//<!-- the output is what will appear once you have sent it-->
echo $output;
?>

</body>
</html>