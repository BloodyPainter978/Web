<?
abstract class UserAbstract{
    abstract function showInfo();
}

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

class SuperUser extends User{
    public $role;
    static public $countSuperUser=0;

    function __construct($name,$login,$password, $role){
        $this->role=$role;
	++self::$countSuperUser;
        echo "" .self::$countSuperUser. " Класс '".__CLASS__."'.
      role: '{$this->role}';
      <br>\n";
    }
    function showInfo(){
        echo "Объект класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      role: '{$this->role}';
      <br>\n";
}

$user1 = new User("men","men_01","123456");
$user2 = new User("men","men_02", "654321");
$user3 = new User("men","men_03","123321");
$user = new SuperUser("men","men_04","321123","Killer");
$user->showInfo();

echo "<br>\n";

echo "Создано ".User::$countUser." объектов класса User_be<br>\n";
echo "Создано ".SuperUser::$countSuperUser." объектов класса SuperUser_be<br>\n";

unset($user1,$user2,$user3,$user);
?>