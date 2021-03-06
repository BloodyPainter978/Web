<?
abstract class UserAbstract{
    abstract function showInfo();
}

class User extends UserAbstract{
    public $name;
    public $login;
    public $password;
    static public $count;

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

class SuperUser extends User{
    public $role;
    static public $counter;

    function __construct($name,$login,$password, $role){
        $this->role=$role;
        echo "Класс '".__CLASS__."'.
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
$user = new SuperUser("men_4","men_04","321123","Killer");

unset($user1,$user2,$user3,$user);
?>