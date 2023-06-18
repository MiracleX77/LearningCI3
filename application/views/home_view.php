<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div id="navbar">
	<?php include 'navbar.php';?>
</div>

<div id="container">
	<div class="row">
		<div class="col-md-7">
			<h4>:::= List Member =:::</h4>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>username</th>
						<th>password</th>
						<th>datesave</th>
						<th>edit</th>
						<th>delete</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach($query as $data_member) { ?>
					<tr>
						<td><?php echo $data_member->m_id;?></td>
						<td><?php echo $data_member->m_name;?></td>
						<td><?php echo $data_member->m_username;?></td>
						<td><?php echo $data_member->m_password;?></td>
						<td><?php echo $data_member->m_datesave;?></td>
						<td><a href="<?php echo site_url('home/viewEdit/').$data_member->m_id;?>" class="btn btn-outline-warning" role="button" >edit</a></td>
						<td><a href="<?php echo site_url('home/deleteMemberById/').$data_member->m_id;?>" class="btn btn-outline-danger" role="button" onclick="return confirm('confirm ?');">delete</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script>
	function deleteMember(m_id) {
		axios.post('<?php echo site_url('home/deleteMemberById'); ?>', {m_id})
			.then(function(response) {
				console.log(response.data);
			})
			.catch(function(error) {
				console.error(error);
			});
	}
	</script> -->

</body>
</html>
