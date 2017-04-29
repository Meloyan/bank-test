<section>
    <div id="head-page-section" class="l-grey-bg">
        <div class="container">
            <div class="row">
                <div class="btn-group btn-group-justified">
                    <!-- Centered Pills -->
                    <ul class="nav nav-pills nav-justified ">
                    </ul>
                </div>
            </div>
        </div>
</section>
<?php
//echo '<pre>';
//print_r($session->questionAnswers);die;

?>
<div class="container">
    <div class="row" style="padding-bottom: 45px;">
        <div class="col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                <div class="list-group">
                    <?php $i = 1; ?>
                    <?php foreach ($session->questionAnswers as $questionAnswer) : ?>

                    <?php if($questionAnswer->answer_id): ?>

                                <a href="#" class="list-group-item   text-center  list-group-item-<?=$questionAnswer->question->id?> <?= $i == 1 ? ' has-answered-active' : ' has-answered' ?>" data-has-answerd = '1'>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    patasxanvac e
                                </a>

                            <?php else: ?>

                            <a href="#" class="list-group-item <?= $i == 1 ? 'active' : '' ?>  text-center  list-group-item-<?=$questionAnswer->question->id?>">
                                patasxanvac che
                            </a>

                            <?php endif;?>

                        <?php $i++; ?>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <?php $j = 1 ?>

                <?php foreach ($session->questionAnswers as $item) : ?>

                    <div class="bhoechie-tab-content <?= $j == 1 ? 'active' : '' ?> ">
                        <div class="row question">
                            <h6><?= $item->question->body ?></h6>
                        </div>
                        <?php foreach ($item->question->answers as $answer) : ?>
                            <div class="row answer-main-div">

                                <div class="col-sm-2">
                                    <input name="<?= $item->question->id ?>" type="radio" data-id="<?= $answer->id ?>" class="answer-radio" <?= $item->answer_id == $answer->id ? 'checked' : ''?> >
                                </div>
                                <div class="col-sm-10 ">
                                    <?= $answer->body ?>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php $j++ ?>
                <?php endforeach; ?>
                <!-- train section -->
            </div>
        </div>
    </div>
</div>
