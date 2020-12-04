<?php 

error_reporting(0);

function utf8_strlen($s) {
    
	$c = strlen($s); 
	$l = 0;
	for ($i = 0; $i < $c; ++$i) {
		if ((ord($s[$i]) & 0xC0) !== 0x80) {
			$l++;
		}
	}
	return $l;

}

$get = $_POST;
$resultTracking = array();

if (isset($get['TrackingName'])) {

	$nameList = array();

	$nameList = [
		'test' => 'ฮั่นแน่~~',
		'พี่จ่วงคุง' => 'รักนีนี่มากๆ',
		'วุฒิภัทร_เกรียงเกร็ด' => 'ED422374093TH',
		'ธนันต์_พีระพัฒนพงษ์' => 'ED422374164TH',
		'นายสุภาณุพัฒน์_ทีบุตร' => 'ED422374252TH',
		'กฤษณะ_มาบุญลือ' => 'ED422374270TH',
		'กันตณัฐ_สว่างแจ้ง' => 'ED422374080TH',
		'ณัฐพล_วงค์แก้วตา' => 'ED422374181TH',
		'กฤษฎา_ศักดิ์สยามกุล' => 'ED422374204TH',
		'ช่อเพชร_ยืนบุญ' => 'ED422374076TH',
		'Nutthamet_Sriprachayanun' => 'ED422374195TH',
		'Jesadagorn_Yoteintr' => 'ED422374028TH',
		'วิชญ์รินธร_วงศ์วิทูไท' => 'ED422374178TH',
		'สรรชัย_มะลิทอง' => 'ED422373929TH',
		'รวิณ_พิบูลสุรการ' => 'ED422373950TH',
		'เจ_ธีรภัทธ์_ประสมทรัพย์' => 'ED422374031TH',
		'นายพงศกร_หงษ์นารี' => 'ED422374120TH',
		'นายอนุชิต_ดำสุข_' => 'ED422374283TH',
		'สิขรินทร์_พฤฒปภพ' => 'ED422374116TH',
		'Aphicha_Assawarangkul' => 'ED422374133TH',
		'นนท์ณริฐ_ภูษา' => 'ED422374218TH',
		'ชโณทัย_กระแจ่ม' => 'ED422373932TH',
		'มีนา_บุญปราการ' => 'ED422373946TH',
		'อิศรา_แก้วพลอย' => 'ED422374102TH',
		'อนุพงษ์_ใจเทพ' => 'ED422374249TH',
		'กานต์รวี_กาญจน์จรัญวงศ์' => 'ED422373994TH',
		'นาคะพันธ์_คลีจักร' => 'ED422373985TH',
		'ภูมิพัฒน์_กำทอง' => 'ED422374221TH',
		'ลลิตา_รัตนรุ่งศรี' => 'ED422373963TH',
		'กฤตพล_อิทธิธรรมสกุล' => 'ED422374235TH',
		'รัชนีกร_เส็งชา' => 'ED422374059TH',
		'ศุภชัย_ปฐมกาลบุตร' => 'ED422374062TH',
		'ธิติสรร_ทิพย์ทอง' => 'ED422374155TH',
		'ชญานนท์_อรรถปักษ์' => 'ED422373977TH',
		'สราวุธ_พิชนนาค' => 'ED422374014TH',
		'Sutarut_Riwtong' => 'ED422374147TH',
		'สมปรารถนา_พูลทรัพย์' => 'ED422374266TH',
		'ธัญลักษณ์​_เพียรชำนาญ' => 'ED422374297TH',
		'กฤติภาส_อ่อนสำลี' => 'ED422374005TH',
		'อภิรักษ์_คิมนารักษ์' => 'ED422374045TH',
		'พงศธร_จันทร์สว่าง' => 'RU957894265TH',
		'ธนัญชัย_นามมาลี ' => 'RP926717671TH',
		

	];

	if(utf8_strlen($get['TrackingName']) >= 3){
		
		foreach ($nameList as $keyName => $valueTracking) {

			$NameWithSpace = str_replace("_", " ", $keyName);
			if (strpos($NameWithSpace, $get['TrackingName']) !== false) {
				$resultTracking[$keyName] = $valueTracking;
			}
		}

	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kaning Tracking</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: #6ac3ae;
		color: #000000;
		text-align: center;
	}
</style>

<body style="width:80%;margin: auto;">

	<h3 class="text-center">❄️🌱 𝗗𝗲𝗮𝗿 𝗞𝗮𝗻𝗶𝗻𝗴 𝗠𝗮𝘀𝗸 and 𝗕𝘂𝗰𝗸𝗲𝘁 𝗛𝗮𝘁 Tracking  🌱🦊</h3>

	<form action="" method="POST">
		<label> - ค้นหาชื่อ - </label>
		<input class="form-control" style="display:inline-block" type="text" name="TrackingName" value="<?= $get['TrackingName'] ?>">
		<p></p>
		<button class="form-control btn btn-sm btn-success" style="display:inline-block;"><span class="glyphicon glyphicon-search"></span> ค้นหา</button>

	</form>
	
	<?php if (count($_POST) > 0): ?>
		
		<div class="text-center">
			
			<?php if (count($resultTracking) > 0) { ?>

			<br>
			<table class="table table-hover table-condensed" align="center" style="width:100%;">
				<tr>
					<th style="text-align:center;">ชื่อผู้รับ</th>
					<th style="text-align:center;">Tracking</th>
					<th style="text-align:center;">รายละเอียด</th>
				</tr>

				<?php foreach ($resultTracking as $keyName => $valueTracking) : ?>
					<tr>
						<td astyle="text-align:center;"><?= str_replace("_", " ", $keyName); ?></td>
						<td astyle="text-align:center;"><?= $valueTracking; ?></td>

						<?php $link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking; ?>
						<td astyle="text-align:center;"><a href='<?= $link ?>' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a></td>
					</tr>
				<?php endforeach; ?>

			</table>

			<?php } else { 
				
					if(utf8_strlen($get['TrackingName']) >= 3){
						echo "<br><h4>ไม่พบข้อมูล กรุณาติดต่อทางเพจ</h4>";
					} else {
						echo "<br><h4>ข้อมูลไม่เพียงพอ กรุณาลองใหม่อีกครั้ง</h4>";
					}	
				}
			?>
		</div>

	<?php endif ?>

	<?php if($get['TrackingName'] === "kaningall"){ ?>

			<br>
			<table class="table table-hover table-condensed" align="center" style="width:100%;">
				<tr>
					<th style="text-align:center;">ชื่อผู้รับ</th>
					<th style="text-align:center;">Tracking</th>
					<th style="text-align:center;">รายละเอียด</th>
				</tr>

				<?php foreach ($nameList as $keyName => $valueTracking): ?>
					<tr>
						<td style="text-align:center;"><?= str_replace("_", " ", $keyName); ?></td>
						<td style="text-align:center;"><?= $valueTracking; ?></td>

						<?php $link = "https://track.thailandpost.co.th/?trackNumber=".$valueTracking; ?>
						<td style="text-align:center;"><a href='<?= $link ?>' class='btn btn-xs btn-info' style='color:white;' target='_blank'> <span class='glyphicon glyphicon-send'></span> รายละเอียด</a></td>
					</tr>
				<?php endforeach; ?>

			</table>
	<?php } ?>

	<br><br><br>

	<div class="footer">
		<p></p>
		<b>Kaning CGM48 Thailand Fanclub</b> <br>
		<a href="https://facebook.com/kaningcgm48thailandfanclub" target="_blank" style="color:#000000"><i class="fa fa-facebook-square"></i> Facebook</a> | 
		<a href="https://twitter.com/kaningcgm48thfc" target="_blank" style="color:#000000"><i class="fa fa-twitter-square"></i> Twitter </a> | 
		<a href="https://www.instagram.com/kaningcgm48thfc/" target="_blank" style="color:#000000"><i class="fa fa-instagram"></i> Instagram</a>
		<p></p>
	</div>

</body>
</html>