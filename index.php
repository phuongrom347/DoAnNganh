<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link href="cssStyles/style.css" rel="stylesheet" type="text/css" />
<?
	include ('config.inc');
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
 <body style="font-size:14px">
 <span class="style1"></span>
	<div id="wrap" >
		<? 
			session_start();
		?>
  		<div > 
		<? include ("header/header.html");?>
		<? include ("header.php");?>
		</div>
		<div id="main">
			<div > 
				<? 
				if( isset($_GET['action']))
				{
					$action= $_GET['action'];
				
				switch($action)
				{
					case 1:
						include ("ThucDon/Thucdon_NhaHang.php");
						break;
					case 2:
						include ("Monan/monan.php");
						break;
					case 3:
						include ("Douong/douong.php");
						break; 
					case 4: 
						include ("TinTuc_SuKien/TinTuc_Sukien.php");
						break;
					case 5:
						include ("Dathang/Dat_hang.php");
						break;
					case 6:
						if(!isset($_SESSION["makh"]))
						{
						include ("DangKy/dangky.php");
						}
						else
						{
						?>
							<script language="javascript"> window.location="index.php"</script>
						<?
						}
						break;
					case 8:
						include ("PhanHoi_YKien/PH_Ykien.php");
						break;	
				}
	
				}
				else
					include ("Main/gioithieu.php");
				?>
			</div>		
	
		</div>
	</div>
</body>
</html>
