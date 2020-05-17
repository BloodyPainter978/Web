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
    static public $countSuperUser;

    function __construct($name,$login,$password,$role){
        parent::__construct($name,$login,$password);
        $this->role = $role;
        ++self::$countSuperUser;
        
        echo "".self::$countSuperUser." класса '".__CLASS__."'.
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
}

$user1 = new User("men_1","men_01","123456");
$user2 = new User("men_2","men_02", "654321");
$user3 = new User("men_3","men_03","123321");
echo "<br>\n";
$user4 = new SuperUser("men_4","men_04","321123","Killer");
$user4->showInfo();

echo "<br>\n";

echo "".User::$countUser." объект(а) класса User<br>\n";
echo "".SuperUser::$countSuperUser." объект(а) класса SuperUser<br>\n";

echo "<br>\n";

unset($user1,$user2,$user3,$user4);
?>