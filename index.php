<?php
if($_POST){
    $name = $_POST['name'];
    $content = $_POST['commentContent'];
    $handle = fopen("comments.html", "a");
    fwrite($handle,"<b>". $name .  "</b>:</br>" . $comment . "</br>");
    fclose($handle);
}

?>

<html>
<body>
<form action = "" method = "POST">
    Comments : <textarea rows = "10" cols = "30" name = "commentContent">
    Name : <input type = "text" name = "name"> </br>
    <input type = "submit" value = "Post!"></br>
</form>
<?php include "comments.html"; ?>
</body>
</html>