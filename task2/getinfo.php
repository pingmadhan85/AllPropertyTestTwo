
<?php
require_once("data.php");

$ArrayURL = explode('/', $_SERVER['REQUEST_URI'] );

$id = $ArrayURL[6];
$data = new propertyData();
//$data->table = 'Property';

if ( is_object($data)) $status = '200 OK';
$status_header = 'HTTP/1.1 $status';
//header($status_header);
$result = $data->getAll($id);
echo json_encode( $result );
?>
<br />
<br />
<br />
<br />
<table  align="centre" width="50%" border="1">

<tr >
	<td width="30%" align=left>Property Id :</td>
	<td><?php echo $result['ID'] ?></td>
</tr>	

<tr >
	<td width="30%" align=left>Type :</td>
	<td><?php echo $result['Type'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Title :</td>
	<td><?php echo $result['Title'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Address :</td>
	<td><?php echo $result['Address'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Bedroom :</td>
	<td><?php echo $result['Bedroom'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Living Room :</td>
	<td><?php echo $result['Living_room'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Diningroom :</td>
	<td><?php echo $result['Diningroom'] ?></td>
</tr>

<tr >
	<td width="30%" align=left>Size :</td>
	<td><?php echo $result['Size'] ?></td>
</tr>

</table>