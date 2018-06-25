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


    public function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}