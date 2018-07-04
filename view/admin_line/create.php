<section>
    <div class="container">
        <div class="row">

            <br/>

<!--            <div class="breadcrumbs">-->
<!--                <ol class="breadcrumb">-->
<!--                    <li><a href="">Админпанель</a></li>-->
<!--<!--                    <li><a href="/admin/order">Управление категориями</a></li>-->
<!--                    <li class="active">Добавить линию</li>-->
<!--                </ol>-->
<!--            </div>-->


            <h4>Добавить новую линию</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Номер</p>
                        <input type="text" class="form-control" name="number" placeholder="" value="">

                        <p>Название</p>
                        <input type="text" class="form-control" name="name" placeholder="" value="">

                        <p>Стиль</p>
                        <input type="text" class="form-control" name="stail" placeholder="" value="">

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-success" value="Сохранить">
                    </form>
                </div>
            </div>
            <?php
            $number = $_POST['number'];
            $name = $_POST['name'];
            $stail = $_POST['stail'];
            ?>
            <?php if($_POST['submit']) $line->createLine($number,$name,$stail); ?>
        </div>
    </div>
</section>



