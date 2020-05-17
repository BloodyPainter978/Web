<?php
class User{
    public $name;
    public $login;
    public $password;

    function showInfo(){
        echo "name: '{$this->name}'; 
	login: '{$this->login}'; 
	password: '{$this->password}';<br>\n";
    }
}

$user1 = new User;
$user1 -> name = "men_1";
$user1 -> login = "men_01";
$user1 -> password =  "123456" ;

$user2 = new User;
$user2 -> name = "men_2";
$user2 -> login = "men_02";
$user2 -> password = "654321";

$user3 = new User;
$user3 -> name = "men_3";
$user3 -> login = "men_03";
$user3 -> password = "123321";

$content.=$user1 -> showInfo();
$content.=$user2 -> showInfo();
$content.=$user3 -> showInfo();

?>