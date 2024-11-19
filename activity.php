<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	body {
			font-family: "system-ui";
			background-color: #F0C1E1;
		}
	table, th, td {
			border:1px solid black;
			background-color: #FDE7BB;
		}
</style>
<body>
	<a href="index.php">Back</a>
	<h1>Activity details:</h1>
	<table style="width:100%; margin-top: 10px; text-align: center;">
    <tr>
        <th style="background-color: #CDC1FF;">Added By User ID</th>
        <th style="background-color: #CDC1FF;">Date Added</th>
        <th style="background-color: #CDC1FF;">Modified By User ID</th>
        <th style="background-color: #CDC1FF;">Last Updated</th>
    </tr>
    <?php $getAppliByID = getAppliByID($pdo, $_GET['id']); ?>
    <?php foreach ($getAppliByID as $row) { ?>
    <tr>
        <td><?php echo $row['added_by']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
        <td><?php echo $row['modified_by']; ?></td>
        <td><?php echo $row['last_updated']; ?></td>
    </tr>
    <?php } ?>
</table>
	
</body>
</html>