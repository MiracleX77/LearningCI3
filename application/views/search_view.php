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
						<h4> Search Member<h4>
						<form method="post" action="<?php echo site_url('auth/getMemberById');?>" class="form-horizontal">
							<div class="form-group row">
								<div class="col-sm-2 control-label">ID</div>
								<div class = "col-sm-7">
								<input type = "text" name="m_id" class="form-control">
								</div>

							</div>
							<div class="form-group row">
								<div class = "col-sm-4">
									<button type="submit" class="btn btn-primary">Search</button>
								</div>
							</div>
						</form>
				</div>
				<div class="col-md-7">
					<h4> Result :<h4>
					<?php if ($query && $query!='404' ) : ?>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>id</th>
									<th>name</th>
									<th>username</th>
									<th>password</th>
									<th>datesave</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $query->m_id;?></td>
									<td><?php echo $query->m_name;?></td>
									<td><?php echo $query->m_username;?></td>
									<td><?php echo $query->m_password;?></td>
									<td><?php echo $query->m_datesave;?></td>
								</tr>
							</tbody>
						</table>
					<?php elseif ($query == '404') : ?>
        			    <h4> Not Found </h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
</body>
</html>
