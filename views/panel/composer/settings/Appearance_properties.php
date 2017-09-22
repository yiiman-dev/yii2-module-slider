<?php
/*******************************************************************************
 * Copyright (c) 2017.
 * this file created in printing-office project
 * framework: Yii2
 * license: GPL V3 2017 - 2025
 * Author:amintado@gmail.com
 * Company:shahrmap.ir
 * Official GitHub Page: https://github.com/amintado/printing-office
 * All rights reserved.
 ******************************************************************************/

use yii\web\View;

/**
 * @var $this View
 */
?>
<div class="row">
    <div class="col-md-4">
        <?= $this->render('Appearance_properties/skin/skin') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?= $this->render('Appearance_properties/globalBGColor/globalBGColor') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?= $this->render('Appearance_properties/globalBGImage/globalBGImage') ?>
    </div>
</div>

