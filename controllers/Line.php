<?php

class Line
{
    public function getLineList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT number, name, stail FROM line');

        // Получение и возврат результатов
        $i = 0;
        $lineList = array();
        while ($row = $result->fetch()) {
            $lineList[$i]['number'] = $row['number'];
            $lineList[$i]['name'] = $row['name'];
            $lineList[$i]['stail'] = $row['stail'];
            $i++;
        }
        return $lineList;
    }

    public function createLine($number, $name, $stail)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO line (number, name, stail) '
            . 'VALUES (:number, :name, :stail)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':number', $number, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_INT);
        $result->bindParam(':stail', $stail, PDO::PARAM_INT);
        return $result->execute();
    }

    public function getLineByNumber($number)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM line WHERE number = :number';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':number', $number, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    public function deleteLineById($number)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM line WHERE number = :number';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':number', $number, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateLineById($number)
    {
        // Соединение с БД
        $db = Db::getConnection();

        print_r($_POST);

        // Текст запроса к БД
        $sql = "UPDATE `line` SET `number`=:number,`name`=:name,`stail`=:stail WHERE number = ".$number;


        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':number', $_POST['number'], PDO::PARAM_INT);
        $result->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
        $result->bindParam(':stail', $_POST['stail'], PDO::PARAM_STR);

        return $result->execute();
    }
}