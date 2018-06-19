<?php
include_once "config/Db.php";
class Station
{
    public static function getStationList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT name, architect, date, short_content, full_content,x,y FROM station ORDER BY  name ASC');

        // Получение и возврат результатов
        $i = 0;
        $stationList = array();
        while ($row = $result->fetch()) {
            $stationList[$i]['name'] = $row['name'];
            $stationList[$i]['architect'] = $row['architect'];
            $stationList[$i]['date'] = $row['date'];
            $stationList[$i]['short_content'] = $row['short_content'];
            $stationList[$i]['full_content'] = $row['full_content'];
            $stationList[$i]['x'] = $row['x'];
            $stationList[$i]['y'] = $row['y'];
            $i++;
        }
        return $stationList;
    }

}