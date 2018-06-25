<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление категориями</a></li>
                    <li class="active">Редактировать линию</li>
                </ol>
            </div>


            <?php $station = $line->getLineByNumber($_GET['edit']); ?>
            <h4>Редактировать линию "<?php echo $station['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="number" placeholder="" value="<?php echo $station['number']; ?>">

                        <p>Порядковый номер</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $station['name']; ?>">

                        <p>Статус</p>
                        <input type="text" name="stail" placeholder="" value="<?php echo $station['stail']; ?>">


                        <br><br>

                        <input type="submit" name="update" class="btn btn-default" value="Обновить">

                    </form>
                    <?php
                    if (isset($_POST['update'])) {$line->updateLineById($_GET['edit']);}
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



