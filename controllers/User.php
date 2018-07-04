<?php
class User
{
    public function show()
    {
        print_r($_SESSION);
        die();
    }

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

    public function checkAdmin ($userName,$password)

    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE name =:name ';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $userName, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();
        $check =  $result->fetch();

        if ($check) {
            if ($password == $check['password'] && $check['admin'])  {
                $_SESSION['admin']['name'] = $check['name'];
                $_SESSION['admin']['admin'] = 'admin';

                return true;
            }
        }


    }

}