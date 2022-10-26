<link rel="stylesheet" href="../css/admin.css"/>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$query = "SELECT * FROM identifiant";
$d = $pdo->query($query);

?>

<table class="table"  border="3" cellpadding="5" cellspacing="5" align="center">
<tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>telephone</th>
    <th>message</th>
    <th>date</th>
</tr>
<?php
foreach($d as $data)
{
?>
<tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['nom']; ?></td>
    <td><?php echo $data['prenom']; ?></td>
    <td><?php echo $data['email']; ?></td> 
    <td><?php echo $data['telephone']; ?></td>
    <td><?php echo $data['message']; ?></td>
    <td><?php echo $data['date']; ?></td>
</tr>

<?php
}
?>
</table>