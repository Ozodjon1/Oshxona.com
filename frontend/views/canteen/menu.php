<!-- ======= Menu section ========== -->
<?php $ismi="name_". Yii::$app->language; ?>
<?php $turi="how_". Yii::$app->language; ?>
<section class="menu section bd-container" id="menu">
            <h2 class="section-title">Taomlar ro'yhati</h2>

            <div class="menu__container bd-grid">
                <?php foreach($meals as $food)
                { 
                    ?>
                <di class="menu__content">
                    <img src="/rasmlar/<?=$food->rasmi;?>" alt="" class="menu__img">
                    <h3 class="menu__name"><?php echo $food->$ismi;?></h3>
                    <span class="menu__detail"><?php echo $food->$turi;?></span> 
                    <span class="menu__prici"><?php echo $food->narxi;?></span>
                    <a href="#" class="button menu__button">
                        <i class="bx bxs-cart"></i>
                    </a>
                </di>
                
                <?php }  ?>


            </div>
            <?php 

            echo \yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
            'maxButtonCount'=>3,
            ]);
            ?>
        </section>
