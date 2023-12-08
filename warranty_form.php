<!DOCTYPE html>
<html>

<head>
<title>Garanti formu - OG Tech</title>
<?php include "header.php";?>

<style>
	.text {
		font-size:18px;
		color:white;
	}
	
	.textbox {
		margin-left:200px;
		margin-right:200px;
	}
	
	textarea {
		resize:none;
		outline:none;
		background-color:transparent;
		width:100%;
		height:120px;
		overflow:auto;
	}
	
	textarea:focus {
		outline:solid #44a69b;
	}
	
	.button {
		font-size:18px;
		border:3px solid white;
		cursor:pointer;
		width:140px;
		height:40px;
		background-color:transparent;
		color:white;
		box-shadow:5px 5px 3px 0px;
	}
	
	.button:hover {
		box-shadow:5px 5px 3px 0px green;
	}
	
</style>
</head>

<body>

<div class="page-title background-overlay" style="text-align:center;padding-top: 140px;padding-bottom: 140px">
<h1 style="font-weight:bold">Garanti Formu</h1>
<p class="text">OG Tech / Garanti Formu</p>
</div>

<div class="textbox">
	<p class="text"> Ne felaket! Bilgisayarınız arızalandı ve tamir ettirmek için onu dükkana götüremeyecek kadar meşgulsünüz. Senin için şanslı, 
		OG teknik Teslim Alma ve İade Hizmeti kapsamındasınız! Bilgisayarınızı veya donanımınızı alacağız veya değiştireceğiz ve istediğiniz zaman size geri getireceğiz, size zaman ve para tasarrufu sağlayacağız .</p>
	<br><br>
	<form method="post">
	<table class="text">
		<tr>
			<td>Email:</td>
		</tr>
		<tr>
			<td><input class="text" type="email" name="email" required="required" placeholder="Example : john123@mail.com"></input></td>
		</tr>
		<tr>
			<td>Full name:</td>
		</tr>
		<tr>
			<td><input class="text" name="name" required="required" placeholder="Example : Kristof John"></input></td>
		</tr>
		<tr>
			<td>Address:</td>
		</tr>
		<tr>
			<td><textarea class="text" name="address" required="required" placeholder="Example : 13, Jalan Kuching 5, Taman Suhana Emas, 53100, Cheras, Kuala Lumpur"></textarea></td>
		</tr>
		<tr>
			<td>İletişim Numarası</td>
		</tr>
		<tr>
			<td><input class="text" type="tel" name="contact" required="required" placeholder="Example : 019 876 5432"></input></td>
		</tr>
		<tr>
			<td>Ürün Adı:</td>
		</tr>
		<tr>
			<td><input class="text" type="text" name="product_name" required="required" placeholder="Example : Asus B85M-G"></input></td>
		</tr>
		<tr>
			<td>Karşılaştığınız sorunlar:</td>
		</tr>
		<tr>
			<td><textarea class="text" name="problem_statement" required="required" placeholder="Example : Monitor display is frame drop / not working"></textarea></td>
		</tr>
		<tr>
			<td><input class="button" type="submit" name="submit" value="Submit form"></input></td>
		</tr>
	</table>
	</form>
</div>

<?php include "footer.php";?>
</body>

</html>