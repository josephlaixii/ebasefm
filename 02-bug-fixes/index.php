<?php

class Interview
{
	public $title = 'Interview test';
}

$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt, quasi aliquid, quod officia commodi magni eum? Provident, sed necessitatibus perferendis nisi illum quos, incidunt sit tempora quasi, pariatur natus.';

$people = [
	['id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'],
	['id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'],
	['id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'],
	['id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'],
	['id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com'],
];

$person = $_POST['person'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Interview test</title>
	<style>
		body {
			font: normal 14px/1.5 sans-serif;
		}
	</style>
</head>

<body>

	<h1><?= Interview::$title; ?></h1>

	<!-- This whole printing code need to be fix since the condition is wrong -->
	<?php
	// Print 10 times
	for ($i = 10; $i > 1; $i--) {?>
		<p><?= $lipsum ?><p>
	<?php}?>


	<hr>


	<form method="get">
		<p><label for="firstName">First name</label> <input type="text" name="person[first_name]" id="firstName"></p>
		<p><label for="lastName">Last name</label> <input type="text" name="person[last_name]" id="lastName"></p>
		<p><label for="email">Email</label> <input type="text" name="person[email]" id="email"></p>
		<p><input type="submit" value="Submit" /></p>
	</form>

	<?php if ($person) : ?>
		<p><strong>Person</strong> <?= $person['first_name']; ?>, <?= $person['last_name']; ?>, <?= $person['email']; ?></p>
	<?php endif; ?>


	<hr>


	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person) : ?>
				<tr>
					<td><?= $person->first_name; ?></td>
					<td><?= $person->last_name; ?></td>
					<td><?= $person->email; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>