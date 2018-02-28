
<div class="showSpeaker object col-md-3" >
    <div class="image"><img class="speakerImg" src="<?php echo $node->field_image_path['und'][0]['safe_value']; ?>" /></div>

    <div class="header speakerTitle"><?php echo $node->title; ?></div>

    <div class="body">
        <p class="speakerWork"><?php echo $node->field_work_title['und'][0]['value']; ?></p>
        <p class="speakerCompany"><strong><?php echo $node->field_company["und"][0]["value"];?></strong></p>
        <?php if (isset($node->field_twitter_handle["und"]) && trim($node->field_twitter_handle["und"][0]["value"]) !== ''): ?>
            <?php $twitter = trim(str_replace('@', '', $node->field_twitter_handle["und"][0]["value"])); ?>
            <p class="speakerTwitter"><a href="https://twitter.com/<?php echo $twitter; ?>" target="_blank">@<?php echo $twitter; ?></a></p>
        <?php endif; ?>
        <?php if (isset($node->field_keynote['und'][0]['value']) && trim($node->field_keynote["und"][0]["value"]) !== ''): ?>
            <div class="speakerKeynote"><label>Keynote</label><p><?php echo $node->field_keynote['und'][0]['value']; ?></p></div>
        <?php endif; ?>
        <p class="speakerBio"><?php echo $node->field_bio['und'][0]['value']; ?></p>
    </div>
</div>
