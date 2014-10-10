 
<div class="clearfix <?php if ($new): ?>comment-new<?php endif; ?>"></div>
  <div class="popover">
    <div class="arrow"></div>
    <h3 class="popover-title"><?php print $title ?></h3>
    <div class="popover-content">
      <p><?php print render($content);?></p>
    </div>
  </div>
<div class="clearfix"></div>