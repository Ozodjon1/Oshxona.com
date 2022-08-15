<!-- =========== Home section =========== -->
<?php $ismi="name_". Yii::$app->language; ?>
<?php $turi="how_". Yii::$app->language; ?>
<main class="l-main">
        <section class="home" id="home">
            
            <div class="home_container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title"><?=Yii::t("app","DELISIOUS FOODS");?></h1>
                    <h2 class="home__subtitle">
                       <?=Yii::t("app","SELECT A REAL FOOD OF THE WEEK");?>
                    </h2>
                    <a href="/Canteen/menu" class="button">
                        <?=Yii::t("app","SHOW MENU");?>
                    </a>
                </div>
                <img src="rasmlar/Food-Pyramid.jpg" alt="home" class="home__img">
            </div>
        </section>

        <!-- ======= Menu section ========== -->
<section class="menu section bd-container" id="menu">
            <span class="section-subtitle">MAXSUS</span>
            <h2 class="section-title">HAFTALIK MENULAR</h2>

            <div class="menu__container bd-grid">
                <?php foreach($meals as $meal)
                { 
                    ?>
                <di class="menu__content">
                    <img src="/rasmlar/<?= $meal->rasmi;?>" alt="" class="menu__img">
                    <h3 class="menu__name"><?php echo  $meal->$ismi;?></h3>
                    <span class="menu__detail"><?php echo  $meal->$turi;?></span> 
                    <span class="menu__prici"><?php echo  $meal->narxi;?></span>
                    <a href="#" class="button menu__button">
                        <i class="bx bxs-cart"></i>
                    </a>
                </di>
                
                <?php }  ?>

            </div>
        </section>

        