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


 use amintado\slider\widgets\SliderSettingsHelpWidget;
 
 echo SliderSettingsHelpWidget::widget([
     'header' => 'loops',
     'content' => 'Number of loops if automatically start slideshow is enabled (0 means infinite!)',
     'id' => 'loops'
 ]);
 
 ?>
 <div class="input-group input-group-sm">
   <span class="input-group-addon" id="sizing-addon3" >تعداد تکرار</span>
   <input type="text" class="form-control"  name="loops" placeholder="0" aria-describedby="sizing-addon3">
 </div>
  <a href="#" class="btn" onclick="$('#settings_modal_help_loops').modal('show');" >
                          <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
  
                          </span>
                      </a>
   
   
 