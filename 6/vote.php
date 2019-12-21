<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];

	$query = mysqli_query($conn, "SELECT * FROM tb_caleg WHERE id='$id'");
	$data = mysqli_fetch_assoc($query);
	$vote = $data['earned_vote'];
	$vote2 = $vote+1;

	$update = mysqli_query($conn ,"UPDATE tb_caleg SET earned_vote='$vote2' WHERE id='".$id."' ");
	if ($update) {
		header("location:index.php?Vote=berhasil");
	}else{
		header("location:index.php?Vote=gagal");
	}
}

 ?>