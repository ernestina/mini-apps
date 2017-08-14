<html>
<head>
	<title>Mini_apps</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
	<table cellspacing="30" class='table-hover table-striped' border="1" class=>
		<th>
			<td>miniAPPS</td>
		</th>
		<tr> </tr> 

		<td align="center" >Kode Satker</td>
		<td align="center" >Nama Satker</td>
		<td align="center" >Pagu Akun</td>
		<td align="center" >Realisasi Akun</td>
		<?php foreach($record as $item): ?>
		
			<tr>
				<td><?php echo $item->kd_satker; ?></td>
				<td><?php echo $item->nm_satker; ?></td>
				<td><?php echo $item->pagu; ?></td>
				<td><?php echo $item->realisasi; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>

