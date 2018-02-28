<?php
$color = '#ddd';

if ($agenda_type == 'keynote') {
    $color = '#101d61';
}
else if ($agenda_type == 'breakout') {
    $color = '#fc8923';
}
else if ($agenda_type == 'networking') {
    $color = '#1fcfcb';
}
else if ($agenda_type == 'panel') {
    $color = '#e91546';
}
?>

<div class="row border-bottom-grey aoc-block-row aoc-<?php echo $agenda_type; ?>" style="border-left: 4px solid <?php echo $color; ?>">
    <div class="col-md-2 time-icon-block">
        <?php if (isset($agenda_type) && trim($agenda_type) !== ''): ?>
          <div class="mobile-logo visible-xs-inline-block visible-sm-inline-block">
              <img src="/sites/all/themes/agents_of_change/images/icons/<?php echo ucfirst($agenda_type);?>.png" class="img-responsive" style="padding: 10px 0 5px; width: 50px;">
          </div>
        <?php endif; ?>

        <?php if (isset($agenda_time) && trim($agenda_time) !== ''): ?>
            <p><?php echo $agenda_time; ?></p>
        <?php endif; ?>
    </div>

    <div class="col-md-1 hidden-xs hidden-sm">
        <?php if (isset($agenda_type) && trim($agenda_type) !== ''): ?>
        <img src="/sites/all/themes/agents_of_change/images/icons/<?php echo ucfirst($agenda_type);?>.png" class="img-responsive" style="padding: 10px 0 5px; width: 50px;">
        <?php endif; ?>
    </div>

    <div class="col-md-9">
        <!-- title -->
        <p style="margin:0;"><?php echo $agenda_title; ?></p>

        <!-- speaker name -->
        <?php if (isset($agenda_speaker) && trim($agenda_speaker) !== ''): ?>
            <p style="font-size: 20px; line-height: 28px;"><?php echo $agenda_speaker; ?></p>
        <?php endif; ?>

        <!-- panel lists -->
        <?php if (isset($agenda_list) && sizeof($agenda_list) > 0): ?>
          <?php foreach($agenda_list as $text): ?>
                <p style="font-size: 28px; line-height: 35px;margin:0;"><?php echo $text; ?></p>
          <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>