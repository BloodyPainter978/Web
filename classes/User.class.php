<?
class User extends UserAbstract{
    public $name;
    public $login;
    public $password;
    static public $countUser=0;

    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
	++self::$countUser;

        echo "".self::$countUser. " Класс '".__CLASS__."'.
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
?>