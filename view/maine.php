<div id="main">
    <?php $stationById = $stationOb->getStationById($_GET['id'])?>
	<div id="metro-text">
		<div id="metro-text-in">
			<a href="" id="show-all-st">показать все станции</a>

			<h1 id="metro-h1" class="h1-line-2">Станция &laquo;<?php echo $stationById['name'] ?>&raquo;</h1>
			<div id="metro-pic">
				<!-- картинка должна быть не больше 333 px в ширину -->
				<img src="i/metro-pikcha.jpg" alt="Фотография станции &laquo;Маяковская&raquo;" />
			</div>

			<p><strong>Дата открытия:</strong> <?php echo $stationById['date']; ?>
            <br/><?php echo $stationById['short_content']; ?>
			<p><strong>Архитектор:</strong> <?php echo $stationById['architect'];?>
            <br/><?php echo $stationById['full_content'];?>

			<div id="metro-tmbs">
				<!-- картинки должны быть 133 x 102 px -->
				<a href=""><img src="i/metro-tmbs-left.gif" alt="<" /></a>
				<a href=""><img src="i/metro-tmb-1.jpg" class="tmb" alt="" /></a>
				<a href=""><img src="i/metro-tmb-2.jpg" class="tmb"  alt="" /></a>
				<a href=""><img src="i/metro-tmb-3.jpg" class="tmb"  alt="" /></a>
				<a href=""><img src="i/metro-tmbs-right.gif" alt=">" /></a>
				<div class="clear"><a href="">добавить фото</a></div>
			</div>
        </div>
	</div>

	<div id="main-left">
		<a href=""><img src="i/metro-scheme.png" style="margin-top:39px;" alt="Схема метро" /></a>
		<ul id="colored-lines">
            <div id="accordion">
                <?php $lines = array();
                $lines = $line->getLineList(); ?>
                <?php foreach ($lines as $linesDirection): ?>
                    <li class="<?php echo $linesDirection['stail'] ?>"><a href=""><?php echo $linesDirection['name'] ?></a>
                    <ul>
                        <?php $station = $stationOb->getStationList(); ?>
                        <?php foreach ($station as $stationDirection):?>
                            <?php  if ($linesDirection['number']==$stationDirection['number']) :?>
                                <li ><a href="?id=<?= $stationDirection['id'] ?>"><?php echo $stationDirection['name'] ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    </li>
                <?php endforeach; ?>
            </div>
		</ul>
    </div>
		<div id="search-on-sts">
			<input type="text" value="найти в станциях" /><a href=""><img src="i/gofind.png" alt=">" /></a>
			<div class="clear"></div>
		</div>

	<div class="clear"></div>
</div>