<?php

class Station
{
    public function getStationList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, architect, date, short_content, full_content,x,y,number FROM station');

        // Получение и возврат результатов
        $i = 0;
        $stationList = array();
        while ($row = $result->fetch()) {
            $stationList[$i]['id'] = $row['id'];
            $stationList[$i]['name'] = $row['name'];
            $stationList[$i]['architect'] = $row['architect'];
            $stationList[$i]['date'] = $row['date'];
            $stationList[$i]['short_content'] = $row['short_content'];
            $stationList[$i]['full_content'] = $row['full_content'];
            $stationList[$i]['x'] = $row['x'];
            $stationList[$i]['y'] = $row['y'];
            $stationList[$i]['number'] = $row['number'];
            $i++;
        }
        return $stationList;
    }
    public function getStationListByLine($numberLine)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql  = 'SELECT * FROM station WHERE number=:number';

        $result = $db->prepare($sql);
        $result->bindParam(':number', $numberLine, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $stationList = array();
        while ($row = $result->fetch()) {
            $stationList[$i]['id'] = $row['id'];
            $stationList[$i]['name'] = $row['name'];
            $stationList[$i]['architect'] = $row['architect'];
            $stationList[$i]['date'] = $row['date'];
            $stationList[$i]['short_content'] = $row['short_content'];
            $stationList[$i]['full_content'] = $row['full_content'];
            $stationList[$i]['x'] = $row['x'];
            $stationList[$i]['y'] = $row['y'];
            $stationList[$i]['number'] = $row['number'];
            $i++;
        }
        return $stationList;


    }

    public function getStationById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM station WHERE id = :id';

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

    public function createStation($name,$architect,$date,$short_content,$full_content,$x,$y, $number)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO `station`(`name`, `architect`, `date`, `short_content`, `full_content`, `x`, `y`, `number`) VALUES (:name, :architect, :date, :short_content, :full_content, :x, :y, :number)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':architect', $architect, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':short_content', $short_content, PDO::PARAM_STR);
        $result->bindParam(':full_content', $full_content, PDO::PARAM_STR);
        $result->bindParam(':x', $x, PDO::PARAM_STR);
        $result->bindParam(':y', $y, PDO::PARAM_STR);
        $result->bindParam(':number', $number, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateStationById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        print_r($_POST);

        // Текст запроса к БД
        $sql = "UPDATE `station` SET `name`=:name,`architect`=:architect,`date`=:date,`short_content`=:short_content,`full_content`=:full_content,`x`=:x,`y`=:y,`number`=:number WHERE id= ".$id;


        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
        $result->bindParam(':architect', $_POST['architect'], PDO::PARAM_STR);
        $result->bindParam(':date', $_POST['date'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $_POST['short_content'], PDO::PARAM_STR);
        $result->bindParam(':full_content', $_POST['full_content'], PDO::PARAM_STR);
        $result->bindParam(':x', $_POST['x'], PDO::PARAM_STR);
        $result->bindParam(':y', $_POST['y'], PDO::PARAM_STR);
        $result->bindParam(':number', $_POST['number'], PDO::PARAM_INT);

        return $result->execute();
    }
    public function deleteStationById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM station WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}