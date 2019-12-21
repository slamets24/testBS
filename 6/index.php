<?php 
 include 'koneksi.php';
 $query = mysqli_query($conn, "SELECT * FROM tb_caleg");
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Vote Caleg</title>
	
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

</heads>
<body>

<div class="conteiner">
	 <?php while ($data = mysqli_fetch_assoc($query)) { ?>
	<table border="1" width="50%">
		<tr>
			<td align="center"><?= $data['nama']; ?></td>
			<td rowspan="2" align="center"><a href="vote.php?id=<?=$data['id']?>"><button class="btn btn-success"> Pilih Salah Satu</button></a></td>
		</tr>
		<tr>
			<td style="padding-left: 30px">Perolehan suara : <?= $data['earned_vote'] ?></td>
		</tr>
		<br>
	</table>
 <?php } ?>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

