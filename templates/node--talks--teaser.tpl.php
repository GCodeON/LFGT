<?php
/* teaser template for talk entity */
?>

<div class="views-object col-md-4">

    <div class="thumbplayer-container visible-xs" data-id="<?php echo $node->field_video_url['und'][0]['value']; ?>" data-alttext="">
        <div class="thumbplayer videoWrapper embed-responsive embed-responsive-16by9"></div>
    </div>

    <div class="thumbbutton hidden-xs" data-id="<?php echo $node->field_video_url['und'][0]['value']; ?>">
        <!-- just the thumb, as a button -->
        <div class="videoWrapper">
            <a href="#" class="video-switcher embed-responsive-item">
                <img class="thumbplayer-thumb" src="//i.ytimg.com/vi/<?php echo aoc_get_videoID($node->field_video_url['und'][0]['value']); ?>/maxresdefault.jpg">
                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
            </a>
        </div>

    </div>
    <div class="dropdown">
        <div class="title header video-title" data-toggle="dropdown">
            <h3>
                <?php echo $node->title; ?><i class="fa fa-chevron-down"></i>
            </h3>
        </div>
        <div class=" dropdown-menu moderator-panelists">
            <div class="moderator <?php echo (aoc_talk_isPanel($node) ? 'moderator' : 'speaker'); ?>">
                <div class="aoc-label">
                    <?php echo (aoc_talk_isPanel($node) ? 'moderator' : 'speaker'); ?>
                </div>
                <div class="information">
                    <div class="name">
                        <?php echo $node->field_moderator_name["und"][0]["value"];?>
                    </div>
                    <div class="title">
                        <?php echo $node->field_moderator_position['und'][0]['value']; ?>
                    </div>
                    <div class="company">
                        <?php echo $node->field_moderator_company["und"][0]["value"];?>
                    </div>
                </div>
            </div>
            <?php if (aoc_talk_isPanel($node)): ?>
                <div class="panelists">
                    <div class="aoc-label">
                        panelists
                    </div>
                    <div class="information">
                        <?php if (is_array($node->field_panelist_name["und"])): ?>
                            <?php for ($i = 0; $i < count($node->field_panelist_name["und"]); $i++): ?>
                                <div class="information-object object-<?php echo $i;?>">
                                    <div class="name">
                                        <?php if (!empty($node->field_panelist_name["und"][$i]["value"])): ?>
                                            <?php echo $node->field_panelist_name["und"][$i]["value"];?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="title">
                                        <?php if (!empty($node->field_panelist_title["und"][$i]["value"])): ?>
                                            <?php echo $node->field_panelist_title['und'][$i]['value']; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="company">
                                        <?php if (!empty($node->field_panelist_company["und"][$i]["value"])): ?>
                                            <?php echo $node->field_panelist_company['und'][$i]['value']; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>
