<!DOCTYPE html>
<html>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<script>
function myFunction(arg1,arg2,arg3) {
  alert(arg1 + " " + arg2+ " " + arg3);
}
</script>
<table>
  <tr>
    <th>name</th>
    <th>email</th>
    <th>button</th>
  </tr>

<?php
$age =  [
	['id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'],
	['id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'],
	['id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'],
	['id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'],
	['id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com'],
];
echo $age[0]
?>

<?php foreach($age as $element) { ?>
	<tr>
      <td><?php echo $element['first_name'] . " " .$element['last_name']  ?></td>
      <td><?php echo $element['email'] ?></td>
      <td><button onclick="myFunction('<?php echo $element['first_name'] ;?>','<?php echo $element['last_name'];?>','<?php echo $element['email'];?>')">button</button></td>
  	</tr>
<?php }  ?>

</table>

</body>
</html>
