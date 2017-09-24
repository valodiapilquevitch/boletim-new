<?php

// Select a single row
	$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND status=:status LIMIT 1');
	$stmt->execute(['email' => $email, 'status' => $status]);
	$user = $stmt->fetch();

//Select multiple rows
	$stmt = $pdo->query('SELECT name FROM users');
	while ($row = $stmt->fetch()) {
		echo $row['name'] . "\n";
	}

		/* or even simpler
		foreach ($stmt as $row) {
		   echo $row['name'] . "\n";
		}*/
//Insert a single row
	$row = [
		'username' => 'bob',
		'email' => 'bob@example.com'
	];
	$sql = "INSERT INTO users SET username=:username, email=:email;";
	$status = $pdo->prepare($sql)->execute($row);

	if ($status) {
		$lastId = $pdo->lastInsertId();
		echo $lastId;
	}
//Insert multiple rows
	$rows = [];
	$rows[] = [
		'username' => 'bob',
		'email' => 'bob@example.com'
	];
	$rows[] = [
		'username' => 'max',
		'email' => 'max@example.com'
	];

	$sql = "INSERT INTO users SET username=:username, email=:email;";
	$stmt = $pdo->prepare($sql);
	foreach ($rows as $row) {
		$stmt->execute($row);
	}
	
//Update a single row
	$row = [
		'id' => 1,
		'username' => 'bob',
		'email' => 'bob2@example.com'
	];
	$sql = "UPDATE users SET username=:username, email=:email WHERE id=:id;";
	$status = $pdo->prepare($sql)->execute($row);

//Update multiple rows
	$row = [
		'updated_at' => '2017-01-01 00:00:00'
	];
	$sql = "UPDATE users SET updated_at=:updated_at";
	$pdo->prepare($sql)->execute($row);

	$affected = $pdo->rowCount();

//Delete a single row	
	$where = ['id' => 1];
	$pdo->prepare("DELETE FROM users WHERE id=:id")->execute($where);

//Delete multiple rows
	$pdo->prepare("DELETE FROM users")->execute();

//PDO datatypes

		function get_pdo_type($value)
	{
		switch (true) {
			case is_bool($value):
				$dataType = PDO::PARAM_BOOL;
				break;
			case is_int($value):
				$dataType = PDO::PARAM_INT;
				break;
			case is_null($value):
				$dataType = PDO::PARAM_NULL;
				break;
			default:
				$dataType = PDO::PARAM_STR;
		}
		return $dataType;
	}

	// Usage
	$email = $_POST['email'];

	$pdo = new PDO('dsn', 'username', 'password');
	$sql = 'INSERT INTO users SET email=:email;';
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':email', $email, get_pdo_type($email));
	$stmt->execute();



	

?>