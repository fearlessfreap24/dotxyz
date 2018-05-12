<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Page</title>
</head>
<body>
<?php echo "Today is " . date("1") . ".\n"; ?>
<?php echo "Hello World\n" ?>
<br><hr>
Example 3-4:<br>
<?php
    $username = "Dylan Perez";
    echo $username . "<br>";
    $current_user = $username;
    echo $current_user;
?>

<br><hr>
File constants __line__ and __dir__:<br>
<?php
    echo "This is line " . __LINE__ . " of file " . __FILE__ . ".<br>";
?>
</body>
</html>