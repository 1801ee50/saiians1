 <?php

$conn =mysqli_connect('localhost','root');
mysqli_select_db($conn,'logins');

if(isset($_POST['submit'])){
    $user_name= $_POST['user_name'];
    $user_address=$_POST['user_address'];
    $files=$_FILES['file'];
   //print_r($files);
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
  //  print_r($fileerror);
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){
    $destinationfile='img/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
    $q="INSERT INTO `water`(`user_name`, `user_address`, `image`) VALUES ('$user_name','$user_address','$destinationfile')";
    $query=mysqli_query($conn,$q);
}



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message | Upload | Water</title>
    <link rel="stylesheet" href="uplood.css">
</head>
<body>
<body class = "back">
    <h1 class = "head">Message for you</h1>
    <br><br><br><br><br><br><br><br><br>
    <P class = "msg">
        Every year in India 50% of water is wasted due to leakage and <br>inefficiency in water management system. This project is an <br>attempt to make most of the available resources provided by <br>our mother earth.
        Your small step can make a huge difference.<br>
        We thank you for contributing.
    </P>
 

</body>
</html>