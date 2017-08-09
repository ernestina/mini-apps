<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Title</title>
	<!--link rel="stylesheet" type="text/css" href="<?php //echo base_url().'css/style.css';?>"/-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap.min.css';?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/css/bootstrap-theme.min.css';?>"/>
</head>
<body>
    <div class="jumbotron">
    <div class="container-fluid">
      <div class="row">
        <table class= 'table table-striped'>
            <thead>
                <tr>
                    <th>KODE User</td>
                    <th>Nama User</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($record as $item): ?>
                <tr>
                    <!--ganti data sesuai tabel yang kalian bikin-->
                    <td><?php echo $item->kd_d_user; ?></td>
                    <td><?php echo $item->nama_org; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
    </div>
</body>
</html>