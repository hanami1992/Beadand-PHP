<fieldset class="add-fieldset">
    <legend>Add file</legend>
    <main class="main">
        <form name="upload" method="POST" action="index.php?page=upload">
        Thumbnail:<br>
        <input type="text" name="image"><br>
        <br>
        Author: <br>
        <input type="text" name="author"><br>
        <input type="submit" name="btnsubmit" values="Feltölt"><br>
    </main>
</form>
</fieldset>

<?php
if(isset($_POST["btnsubmit"]))
{
    $image = $_POST["image"];
    $author = $_POST["author"];
    echo $image." ".$author."<br>"; 
}
$marks = array("imag"=>$imag, "author"=>$author);
$h = fopen("data.json","r+");
fseek($h, -1, SEEK_END);
fwrite($h,",".json_encode($marks)."]");  
?>