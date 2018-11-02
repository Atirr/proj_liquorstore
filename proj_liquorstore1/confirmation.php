<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
   
<?php
if(isset($_POST['submit']))
{
$inputName=$_POST['inputName'];
$inputEmail=$_POST['inputEmail'];
$inputMessage=$_POST['inputMessage'];

echo  "form submitted successfully <br>";
}
else
{
echo "form not submitted";
}


// define variables and set to empty values
$inputname = array ("");
$inputemail = array ("");
$inputmessage = array ("");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $inputname = test_input($_POST["inputName"]);
  $inputemail = test_input($_POST["inputEmail"]);
  //$website = test_input($_POST["website"]);
  $inputmessage = test_input($_POST["inputMessage"]);
  //$gender = test_input($_POST["gender"]);
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

Name: <?php echo $_POST["inputName"]; ?><br>
Email address: <?php echo $_POST["inputEmail"]; ?><br>
Message: <?php echo $_POST["inputMessage"]; ?>

</body>
</html>















