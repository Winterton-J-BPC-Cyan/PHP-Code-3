<html>

<body>

<?php
$username = $_post['username'];
$password = $_post['password'];
    
if ($username == "Josh" && $password == "123") {
    echo "Login successful";
else
    echo "invalid";
}
?>

</body>

</html>
