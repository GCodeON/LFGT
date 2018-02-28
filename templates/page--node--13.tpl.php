<?php
$agenda_type = '';
$agenda_time = '';
$agenda_title = '';
$agenda_speaker = '';
$agenda_list = [];

function resetPartialVar() {
    return array('', '', '', '', []);
}
?>

<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>
<?php
    include 'partials/header.php';
?>

    <div class="container" style="margin-bottom: 10px;">
        <div class="row white-bkg" style="margin-bottom: 0;">
            <div class="agenda-intro">
                <p style="font-size: 28px; line-height: 35px;margin:0;">Download the AOCS18 Agenda for more details.</p>
                <a href="/sites/all/themes/agents_of_change/images/pdfs/AOCS18Agenda.pdf" target="_blank=" class="p btn btn-lg btn-danger">DOWNLOAD THE AOCS18 AGENDA</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row white-bkg" style="color: #000;">
            <div class="col-sm-12 agenda-sun">
                <div class="row">
                    <div class="header">
                        <p>Sunday, February 11, 2018</p>
                    </div>
                </div>

                <div class="row">
                    <div class="sub-header">
                        <p>Pre-Conference Workshop</p>
                    </div>
                    <div class="desc">
                        <p>The Agents of Change Summit provides attendees with a fast-paced agenda covering advanced topics in the science and technology of behavior change. These pre-conference workshops are designed to give behavior change practitioners a foundation in either topic, ensuring you’re ready to maximize the summit’s content. You may choose to add-on either optional workshop during registration.</p>
                    </div>
                </div>

                <div class="row border-bottom-grey" style="border-left: 4px solid #ddd;">
                    <div class="col-sm-12">
                        <?php
                        list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                        $agenda_time = '1:00 - 4:30PM';
                        $agenda_title = 'Add-On Workshop 1: Introduction to the Science of Behavior Change';
                        include 'partials/agenda-block.php';
                        ?>
                        <?php
                        list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                        $agenda_time = '1:00 - 4:30PM';
                        $agenda_title = 'Add-On Workshop 2: Introduction to Technology in Behavior Change';
                        include 'partials/agenda-block.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row white-bkg" style="color: #000;">
            <div class="col-sm-12 agenda-mon">

                <div class="row">
                    <div class="header">
                        <p>Monday, February 12, 2018</p>
                    </div>
                </div>

                <div class="row">
                    <div class="sub-header">
                        <p><strong>Day 1:</strong> The Science of Behavior Change</p>
                    </div>
                </div>

                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                $agenda_time = '7:00 AM';
                $agenda_title = 'Registration Opens';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                $agenda_time = '7:00 AM';
                $agenda_title = 'Workout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '7:30 AM';
                $agenda_title = 'Grab &amp; Go Breakfast';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '8:30 AM';
                $agenda_title = 'Opening Keynote: Can We Eliminate The Burden Of Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '9:05 AM';
                $agenda_title = 'Keynote 2: Surrounded by Change: The Cumulative Effect of Changing Environments, Businesses, and Policies';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '9:30 AM';
                $agenda_title = 'Keynote 3: Creating Change through Movements, Not Mandates';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '10:05 AM';
                $agenda_title = 'Concurrent Breakout Sessions';
                $agenda_type = 'breakout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '10:55 AM';
                $agenda_title = 'Morning Networking Break';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '11:15 AM';
                $agenda_title = 'Panel: Taking the Burden of Change - How to Remove Obstacles and Empower Change';
                $agenda_type = 'panel';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '12:20 PM';
                $agenda_title = 'Keynote 4: Finding Solutions Hiding Within Challenges';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '12:40 PM';
                $agenda_title = 'Lunch &amp; Table Discussions';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '1:40 PM';
                $agenda_title = 'Panel: Aligning Public Health Programs with Doctors, Mental Health, and Treatment Providers';
                $agenda_type = 'panel';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '2:40 PM';
                $agenda_title = 'Keynote 5: Tackling Key Health Issues - Parks, Recreation, and Cross-Agency Collaborations';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '3:00 PM';
                $agenda_title = 'Afternoon Break &amp; Stretch';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '3:20 PM';
                $agenda_title = 'Concurrent Breakout Sessions';
                $agenda_type = 'breakout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '4:20 PM';
                $agenda_title = 'Keynote 6: Using Humor to Drive Behavior Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '4:35 PM';
                $agenda_title = 'Keynote 7: Recap of Science of Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '4:50 PM';
                $agenda_title = 'Closing Keynote: Uniting the Science and Technology of Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '5:15 PM';
                $agenda_title = 'Day 1 Concludes';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '5:45 PM';
                $agenda_title = '30 Min Walk &amp; Talk (Optional)';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '7:00 PM';
                $agenda_title = 'Change Agent Celebration Dinner';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>

            </div>
        </div>

        <div class="row white-bkg" style="color: #000;">
            <div class="col-sm-12 agenda-tue">
                <div class="row">
                    <div class="header">
                        <p>Tuesday, February 13, 2018</p>
                    </div>
                </div>

                <div class="row">
                    <div class="sub-header">
                        <p><strong>Day 2:</strong> The Technology of Change</p>
                    </div>
                </div>

                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                $agenda_time = '7:00 AM';
                $agenda_title = 'Registration Opens';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();
                $agenda_time = '7:00 AM';
                $agenda_title = 'Workout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '7:30 AM';
                $agenda_title = 'Grab &amp; Go Breakfast';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '8:30 AM';
                $agenda_title = 'Opening Keynote: How Technology Brings Us Closer to Our Audience Everyday';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '8:55 AM';
                $agenda_title = 'Keynote 2: Tech and the Social Determinants of Health';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '9:20 AM';
                $agenda_title = 'Keynote 3: Activating Data and Targeted Media for Behavior Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '9:55 AM';
                $agenda_title = 'Concurrent Breakout Sessions';
                $agenda_type = 'breakout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '10:45 AM';
                $agenda_title = 'Morning Networking Break';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '11:05 AM';
                $agenda_title = 'Keynote 4: How Can Wearables Help Public Health Drive Change';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '11:27 AM';
                $agenda_title = 'Keynote 5: Living On the Edge of Online Technologies to Reach Diverse Teen Audiences';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '11:50 PM';
                $agenda_title = 'Lunch &amp; Table Discussions';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '1:00 PM';
                $agenda_title = 'Panel: Measuring the Impact of Online Behavior Change Efforts';
                $agenda_type = 'panel';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '1:57 PM';
                $agenda_title = 'Keynote 6: Creating Change - Harnessing the Power of Twitter';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '2:30 PM';
                $agenda_title = 'Concurrent Power Workshops';
                $agenda_type = 'breakout';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '3:20 PM';
                $agenda_title = 'Afternoon Break &amp; Stretch';
                $agenda_type = 'networking';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '3:40 PM';
                $agenda_title = 'Keynote 7: Leading Change In Drug Policy When Science Is Not Enough';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '4:00 PM';
                $agenda_title = 'Panel: Tacking Emerging Health Issues';
                $agenda_type = 'panel';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker, $agenda_list) = resetPartialVar();;
                $agenda_time = '4:55 PM';
                $agenda_title = 'Keynote 8: Reducing Fear &amp; Loathing of Evaluation: Deep Thoughts About Your Role In Campaigns With Impact';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '5:20 PM';
                $agenda_title = 'Closing Keynote: What Happens Next?';
                $agenda_type = 'keynote';
                include 'partials/agenda-block.php';
                ?>
                <?php
                list($agenda_type, $agenda_time, $agenda_title, $agenda_speaker) = resetPartialVar();;
                $agenda_time = '5:30 PM';
                $agenda_title = 'Day 2 Concludes';
                include 'partials/agenda-block.php';
                ?>
            </div>
        </div>
    </div>

    <div class="container legends-container">

        <div class="row white-bkg legend-row" style="margin-bottom: 0;">
            <div class="col-md-12 legend-title">

                <p>Legend</p>
            </div>
        </div>

        <div class="row white-bkg legends" style="margin-bottom: 0;">
            <div class="col-md-6 col-sm-12">
                <div class="row legend-item">
                    <div class="col-md-2" style="border-left: 4px solid #101d61;"><img class="img-responsive" src="/sites/all/themes/agents_of_change/images/icons/Keynote.png" style="padding:10px 0 5px; width:59px" /></div>

                    <div class="col-md-10">
                        <p>TED-like keynotes led by public health and technology change leaders</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="row legend-item">
                    <div class="col-md-2" style="border-left: 4px solid #e91546;"><img class="img-responsive" src="/sites/all/themes/agents_of_change/images/icons/Panel.png" style="padding:10px 0 5px; width:50px" /></div>

                    <div class="col-md-10">
                        <p>Panels featuring low- and high-tech solutions for public health </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row white-bkg legends">
            <div class="col-md-6 col-sm-12">
                <div class="row legend-item">
                    <div class="col-md-2" style="border-left: 4px solid #1fcfcb;">
                        <img class="img-responsive" src="/sites/all/themes/agents_of_change/images/icons/Networking.png" style="padding:10px 0 5px; width:50px" />
                    </div>

                    <div class="col-md-10">
                        <p>Interactive networking opportunities with conference attendees</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="row legend-item">
                    <div class="col-md-2" style="border-left: 4px solid #fc8923;"><img class="img-responsive" src="/sites/all/themes/agents_of_change/images/icons/Breakout.png" style="padding:10px 0 5px; width:59px" /></div>

                    <div class="col-md-10">
                        <p>Breakout sessions discussing new tools, research, and tactical case studies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';

