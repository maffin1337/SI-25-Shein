<?php

if(isset($_GET)){
       $password= $_GET["psw"];
       $email= $_GET["email"];
}



if (strpbrk($email, '@')) {
	$html = htmlspecialchars($email);

	echo "Регистрация проведена успешно";

	$file = 'emails.txt';

	$current = file_get_contents($file);

	$current .= $email."   ".password_hash($password, PASSWORD_DEFAULT)."\n";

	$current .= "---\n";

	file_put_contents ($file, $current);

} else {
	echo "E-mail введен неверно";
}

?>