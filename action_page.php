<?php

if(isset($_GET)){
       $password= $_GET["psw"];
       $email= $_GET["email"];
}

$pass_hash = password_hash($password, PASSWORD_DEFAULT);



if (strpbrk($email, '@')) {
	$html = htmlspecialchars($email);

	echo "Регистрация проведена успешно\n";

	$file = 'emails.txt';

	$current = file_get_contents($file);

	$current .= $email."   ".$pass_hash."\n";

	$current .= "---\n";

	file_put_contents ($file, $current);

	$link = mysqli_connect("localhost", "root", "", "user_information");

	if (!$link) {
		echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . 'ошибка: ' . mysqli_connect_error();
	}

	$sql_inf = "INSERT INTO `user` (`e-mail`, `password`) VALUES ('$email', '$password')";

	if (mysqli_query($link, $sql_inf)){
		echo "Записи успешно вставлены\n";
	} else{
		echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
	}

	$information = mysqli_query($link, 'SELECT `e-mail`, `password` FROM `user`');

	while ($result = mysqli_fetch_array($information)){
		echo "<br>E-mail: " . $result['e-mail'] . "Password: " . $result['password'] . "</br>";
	}

} else{
	echo "Неправильно введен E-mail, повторите попытку.";
}

?>