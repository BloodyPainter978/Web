<?php

spl_autoload_register(function($class){
    include "classes/$class.class.php";
});
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