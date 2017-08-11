<!DOCTYPE html>
<html>
<head>
	<title>Mini-Apps</title>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
		<table cellspacing="30" class='table table-striped' border="1">
			<td align="center" >Kode Satker</td>
			<td align="center" >Nama Satker</td>
			<td align="center" >Kode Akun</td>
			<td align="center" >Nama Akun</td>
			<td align="center" >Pagu Akun</td>
			<td align="center" >Realisasi Akun</td>
			<?php foreach ($record as $item): ?>
				<tr>
					<td><?php echo $item->kd_satker; ?></td>
					<td><?php echo $item->nm_satker; ?></td>
					<td><?php echo $item->kd_akun; ?></td>
					<td><?php echo $item->nm_akun; ?></td>
					<td><?php echo $item->pagu_akun; ?></td>
					<td><?php echo $item->realisasi_akun; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
</body>
</html>