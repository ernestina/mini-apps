<html>
<head>
	<title>My Title</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
	<table class=' table-hover table-striped'>
		<th>
			<td>KODE User</td>
		</th>
		<?php foreach($record as $item): ?>
			<tr>
				<td><?php echo $item->id; ?></td>
				<td><?php echo $item->nm_satker; ?></td>
				<td><?php echo $item->coa; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>