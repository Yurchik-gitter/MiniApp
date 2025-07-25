<main><?php
        $title = "Главная страница";
        $href = "CSS/main.css";
        require_once 'blocks/header.php';
        require_once 'blocks/footer.php';

//        const MY_AGE = 16;
//        echo "Мой возраст: ". MY_AGE."<br>";
//
//        echo "Hello World!<br>";
//        $num = 0;
//        echo "Переменная: ".$num."<br>";
//
//        $pass_md5 = md5("qwerty");
//        echo "Pass: ".$pass_md5."<br>";
//
//        $valu2e = 0;
//        echo "<input type='text' name='$valu2e' >"."<br>";
//        switch ($valu2e) {
//            case md5("qwerty"):
//                echo "Пароль верный";
//                break;
//            case 5:
//                echo "Не то";
//                break;
//            case md5("qwertgty"):
//                echo "Пароль неверный";
//                break;
//        }
//
//        $list = ["name"=>"Bob","age"=>16,"tel" => 8989877];
//        foreach ($list as $item => $value) {
//            echo $item.": ".$value."<br>";
//        }

//        echo "<pre>".print_r($_GET)."</pre>";
        if($_GET != []){
        $link = explode("?_ijt", $_SERVER["REQUEST_URI"]);
        $redirect = $link[0];
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$redirect);
        exit();}




        ?></main>


<div id="div_AR"  ><a href="auth.php"><button id="auth_reg" > Авторизация/Регистрация</button></a></div>






