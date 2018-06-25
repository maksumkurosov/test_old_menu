<?php
class User
{
    public function getUserList()

    {
        $db = Db::getConnection();

        $result = $db->query('SELECT name, password, admin FROM user ');
        $productsList = array();
        //$i = 0;
        while ($row = $result->fetch()) {
            $productsList['name'] = $row['name'];
            $productsList[$row['name']]['password'] = $row['password'];
            $productsList[$row['name']]['admin'] = $row['admin'];
            //$i++;
        }
        return $productsList;


    }

    public function getAdminList()

    {
        $db = Db::getConnection();

        $result = $db->query('SELECT  name, password, admin FROM user WHERE admin =1 ');
        $productsList = [];

        while ($row = $result->fetch()) {
            $productsList[] = $row;
//            $productsList['name'] = $row['name'];
//            $productsList['password'] = $row['password'];
//            $productsList['admin'] = $row['admin'];

        }
        return $productsList;
//        $arrList = [];
//        while ($row = mysqli_fetch_array($object)) {
//            $arrList[] = $row;
//        }


    }


    public function getUserByID($id)

    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();

    }
    public function checkAdmin()

    {
        $chekedUser = $this->getAdminList();
//        echo $userName;
//         echo '</br>';
//        echo $password;
//        echo $chekedUser['name'].' ';
//        echo $chekedUser['password'];
//        print_r($chekedUser).'<br>';
        foreach ($chekedUser as $user) {

            if ($_POST['user'] == $user['name'] && $_POST['password'] == $user['password']) {
                return true;
            }
        }
        return false;

    }
    public function enter()
    {
        if ($_POST['btnpassword']) {
            if ($this->checkAdmin()) {
                $_SESSION['name'] = $_POST['user'];
                var_dump($_SESSION);
                return true;
            } else {
                echo 'no';
            }

        }
    }

}