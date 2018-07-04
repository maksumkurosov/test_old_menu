<div class="container">
    <div class="row">

        <br/>

<!--        <div class="breadcrumbs">-->
<!--            <ol class="breadcrumb">-->
<!--                <li><a href="#">Админпанель</a></li>-->
<!--            </ol>-->
<!--        </div>-->

<!--        <a href="/view/admin_line/create.php" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить линию</a>-->

        <h4>Список линий</h4>

        <br/>
        <form action="" method="post">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Название</th>
                    <th>Архитектор</th>
                    <th>Дата</th>
                    <th>Короткий опис</th>
                    <th>Повний опис</th>
                    <th>Координата х</th>
                    <th>Координата у</th>
                    <th>Номер линии</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php $station = $stationOb->getStationListByLine($_GET['line']);

                foreach ($station as $stationDirection): ?>
                    <tr>
                        <td><?php echo $stationDirection['name']; ?></td>
                        <td><?php echo $stationDirection['architect']; ?> </td>
                        <td><?php echo $stationDirection['date']; ?></td>
                        <td><?php echo $stationDirection['short_content']; ?></td>
                        <td><?php echo $stationDirection['full_content']; ?></td>
                        <td><?php echo $stationDirection['x']; ?></td>
                        <td><?php echo $stationDirection['y']; ?></td>
                        <td><?php echo $stationDirection['number']; ?></td>
                        <td><a class="text-primary" href="?edit=<?php echo $stationDirection['id'] ?>">Edit</a></td>
                        <td><a class="text-danger" href="?delete=<?php echo $stationDirection['id'] ?>">Delete</a></td>
                        <!--                        <td><input type="submit" name="edit" class="btn btn-default" value="Edit"></td>-->
                        <!--                        <td><input type="submit" name="delete" class="btn btn-default" value="Delete"></td>-->
                        <!--                        <td><a href="/view/admin_line/update.php/?number=--><?php //echo $linesDirection['number']; ?><!--" title="Редактировать">Редактировать</a></td>-->
                        <!--                        <td><a href="/admin/category/delete/--><?php //echo $linesDirection['number']; ?><!--" title="Удалить">Удалить</a></td>-->
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
        <?php
        if ($_GET['delete']) {
            $stationOb->deleteStationById($_GET['delete']);
        }
        ?>
    </div>
</div>
<?php




