

<!DOCTYPE html>
<html>
<head>
	<title>Word Count</title>

<script type="text/javascript">
</script>

<style type="text/css">
	#comment {
		padding-right: 15px;
		width: 1250px;
		height: 150px;
		border: 5px solid;

	}
	#button {
		width: 400px;
		height: 60px;
		border-radius: 10px;
		background-color:black;
		color:white;
	}
</style>
</head>
<body>
<form action="" id="textareaform" method="POST">
  
<textarea  id ="comment" name="comment" form="textareaform">Write Here</textarea></br>
<input type="submit" id="button" name="gonder" value="Send">
</form>
<?php 

if(isset($_POST["gonder"])) {
$metin = $_POST["comment"];
$dizi = array_count_values(explode(' ',$metin));
arsort($dizi);
$yeniDizi = array();
foreach ($dizi as $key => $value) {
    if(empty($key)){continue;}
    $yeniDizi[] = array($value,$key);
}
 
foreach ($yeniDizi as $value) {

    echo '<p><b>'.$value['1'].'</b> kelimesi '.$value[0].' tane var.</p>';
}
}
?>
</body>
</html>

