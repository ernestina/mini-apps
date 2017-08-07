<html>
<head>
	<title>My Tittle</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'; ?>"/>
</head>
<body>
	<table class='table-striped'>
		<th>
			<td>KODE User</td>
		</th>
		<?php foreach($record as $item): ?>
			<tr>
				<td><?php echo $item->kd_d_user; ?></td>
				<td><?php echo $item->nama_org; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>