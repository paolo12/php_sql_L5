<?php
$json = file_get_contents('addressbook.json');
$data = json_decode($json, true);
?>
<html>
<head>
<title>First step</title>
<style>
    body {
        width: 65%;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
	table{
		width: 100%;
		bordercolor: #000000;
	}
	td {
		font-family: Verdana, Arial, sans-serif;
	}
</style>
</head>
<body>
<h2>Адресная книга:</h2>
<table>
  <tr>
    <td>Фамилия</td>
	<td>Имя</td>
	<td>Адрес</td>
	<td>Номер телефона</td>
  </tr>
  <?php	foreach($data as $element){?>
		<tr>
		    <td><?php echo $element['lastName']?></td>
			<td><?php echo $element['firstName']?></td>
			<td><?php foreach($element['address'] as $adres){?>
					<?php echo $adres['city'].' '.$adres['street'].' '.$adres['home']?>
				<?php } ?>
			</td>
			<td><?php foreach($element['phoneNumber'] as $pnumber){?>
					<?php echo '('.$pnumber['code'].') '.$pnumber['number']?>
				<?php } ?>
			</td>
			</tr>
  <?php } ?>
</table>
</body>
</html>