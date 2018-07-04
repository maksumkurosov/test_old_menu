<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Добавить новую станцию</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" class="form-control" value="">

                        <p>Архітектор</p>
                        <input type="text" name="architect" class="form-control" value="">

                        <p>Дата</p>
                        <input type="text" name="date" class="form-control" value="">

                        <p>Короткий опис</p>
                        <input type="text" name="short_content" class="form-control" value="">

                        <p>Повний опис</p>
                        <input type="text" name="full_content" class="form-control" value="">

                        <p>Координата Х</p>
                        <input type="text" name="x" class="form-control" value="">

                        <p>Координата У</p>
                        <input type="text" name="y" class="form-control" value="">

                        <p>Номер линии</p>
                        <input type="text" name="number" class="form-control" value="">


                        <br><br>

                        <input type="submit" name="add" class="btn btn-success" value="Сохранить">
                    </form>
                </div>
            </div>
            <?php
            $name = $_POST['name'];
            $architect = $_POST['architect'];
            $date = $_POST['date'];
            $short_content = $_POST['short_content'];
            $full_content = $_POST['full_content'];
            $x = $_POST['x'];
            $y = $_POST['y'];
            $number = $_POST['number'];
            ?>
            <?php if($_POST['add'])
                //$stationOb->createStation('qwerty',0,'1111-11-11',0,0,0,0,8);
                $stationOb->createStation($name,$architect,$date,$short_content,$full_content,$x,$y,$number); ?>
        </div>
    </div>
</section>



