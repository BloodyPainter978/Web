<?php
class User{
    public $name;
    public $login;
    public $password;
    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        echo "Класс '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
    function __clone(){
      echo "Клон Класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
    function __destruct(){
        echo "Пользователь {$this->name} удален;<br>\n";
    }
    function showInfo(){
        echo "Объект класса'".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
}
$user1 = new User("men_1","men_01","123456");
$user2 = new User("men_2","men_02", "654321");
$user3 = new User("men_3","men_03","123321");
$user = clone $user1;

unset($user1,$user2,$user3,$user4);
?>