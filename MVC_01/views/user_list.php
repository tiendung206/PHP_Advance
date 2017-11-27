<html>
	<head>
		<title>Danh sach user</title>
	</head>
	<body>
		<a href="?controller=user_add">Them moi user</a>
		<table border="1" align="center">
			<tr>
				<th>Username</th>
				<th>Fullname</th>
			</tr>
			
			<tr>
				<td><?php echo $user_list['username']?></td>
				<td><?php echo $user_list['fullname']?></td>
			</tr>			
		</table>
	</body>
</html>