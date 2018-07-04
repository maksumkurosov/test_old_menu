<section>
    <div class="container">
        <div class="row">

            <br/>



            <?php $station = $stationOb->getStationById($_GET['edit']); ?>
            <h4>Редактировать станцию "<?php echo $station['name']; ?>"</h4>
            <?php print_r($station) ?>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" class="form-control" value="<?php echo $station['name'];?>">

                        <p>Архітектор</p>
                        <input type="text" name="architect" class="form-control" value="<?php echo $station['architect'];?>">

                        <p>Дата</p>
                        <input type="text" name="date" class="form-control" value="<?php echo $station['date'];?>">

                        <p>Короткий опис</p>
                        <input type="text" name="short_content" class="form-control" value="<?php echo $station['short_content'];?>">

                        <p>Повний опис</p>
                        <input type="text" name="full_content" class="form-control" value="<?php echo $station['full_content'];?>">

                        <p>Координата Х</p>
                        <input type="text" name="x" class="form-control" value="<?php echo $station['x'];?>">

                        <p>Координата У</p>
                        <input type="text" name="y" class="form-control" value="<?php echo $station['y'];?>">

                        <p>Номер линии</p>
                        <input type="text" name="number" class="form-control" value="<?php echo $station['number'];?>">

                        <br><br>

                        <input type="submit" name="update" class="btn btn-warning" value="Обновить">

                    </form>
                    <?php
                    print_r($_POST['name']);

                    if (isset($_POST['update'])) {$stationOb->updateStationById($_GET['edit']);}
                    echo $_GET['edit'];
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



