<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Users</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">

		.users{

			padding-top: 30px;
			margin-bottom: 20px;

		}

	</style>

</head>
<body>

<div class="container">

	<h1 class="text-center users">All Users</h1>

	<?php

		if (isset($records)){

	?>

	<table class="table">
	  <thead>
	    <tr>
	        <th>ID</th>
	        <th>NAME</th>
	        <th>EMAIL</th>
			<th>MOBILE</th>
	    </tr>
	  </thead>
	  <tbody>

	  <?php

	  	foreach ($records as $record) {

			?>

			<tr>
				<td><?php echo $record->id ?></td>
				<td><?php echo $record->name ?></td>
				<td><?php echo $record->email ?></td>
				<td><?php echo $record->mobile ?></td>
			</tr>


			<?php

		}
		?>

	  </tbody>
	</table>

			<?php

		}else {

			?>

			<h1 class="text-center">No Users Found</h1>

			<?php

		}

		if (isset($links)) {



			echo $links ;
		}


	?>


</div>

</body>
</html>
