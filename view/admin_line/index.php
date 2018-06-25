    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/view/admin_line/index.php">Админпанель</a></li>
                    <li class="active">Управление </li>
                </ol>
            </div>

            <a href="/view/admin_line/create.php" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить линию</a>

            <h4>Список линий</h4>

            <br/>
            <form action="" method="post">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Номер</th>
                    <th>Название линии</th>
                    <th>Стиль</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php $lines = $line->getLineList();

                 foreach ($lines as $linesDirection): ?>

                    <tr>
                        <td><?php echo $linesDirection['number']; ?></td>
                        <td><?php echo $linesDirection['name']; ?></td>
                        <td><?php echo $linesDirection['stail']; ?></td>
                        <td><a class="edit_btn" href="?page=admin&edit=<?php echo $linesDirection['number'] ?>">Edit</a></td>
                        <td><a class="edit_btn" href="?page=admin&delete=<?php echo $linesDirection['number'] ?>">Delete</a></td>
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
                $line->deleteLineById($_GET['delete']);
            }
            ?>
    </div>
    </div>
    <?php




