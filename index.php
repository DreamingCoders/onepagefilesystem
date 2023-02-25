<?php
$coreName = "One page file system";
?>
<!doctype html>
<html>
<head>
<title><?=htmlentities($coreName)?> - Example</title>
</head>
<body>
<div id="main">
if(isset($_GET['index'])){
$index = true;
}else if(isset($_GET['auth'])){
$authPage = htmlentities($_GET['auth']);
if(strlen($authPage) <= 2){
// add register to default if no auth data displays
$default = "register";
}
if(isset($default)){
$authPageType = "register";
// register page here
}else if($authPage == "login"){
// login page here
}else if($authPage == "logout"){
// logout page here
}else if($authPage == "settings"){
// settings page here
}else{
if($index == true){
}
// no index and no other page shown assume its the index
}
?>
</div>
<?php
// footer
?>
