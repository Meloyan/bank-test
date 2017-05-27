<section class="main-container">

    <?= $this->render('@frontend/views/layouts/right_information_bar'); ?>
    <?= $this->render('_modal'); ?>
    <div class="container ">
        <div class="row fixed-top">
            <div class="col-xs-12 bhoechie-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                    <div class="list-group">
                        <?php $i = 1; ?>
                        <?php foreach ($session->questionAnswers as $questionAnswer) : ?>
                            <?php if ($questionAnswer->answer_id): ?>
                                <a href="#"
                                   class="list-group-item   text-center  list-group-item-<?= $questionAnswer->question->id ?> <?= $i == 1 ? ' has-answered-active' : ' has-answered' ?>"
                                   data-has-answerd='1'>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    patasxanvac e
                                </a>
                            <?php else: ?>
                                <a href="#"
                                   class="list-group-item <?= $i == 1 ? 'active' : '' ?>  text-center  list-group-item-<?= $questionAnswer->question->id ?>">
                                    patasxanvac che
                                </a>
                            <?php endif; ?>
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
                                        <input name="<?= $item->question->id ?>" type="radio"
                                               data-id="<?= $answer->id ?>"
                                               class="answer-radio" <?= $item->answer_id == $answer->id ? 'checked' : '' ?> >
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
</section>
<input class="session" type="hidden" value="<?= Yii::$app->session->get('session_id') ?>">

<?= $this->render('_view'); ?>

<script>
    socket = new WebSocket('ws://localhost:8080');
    socket.onopen = function (e) {
        setInterval(function () {
            socket.send('{"sessionId":<?=Yii::$app->session->get('session_id')?>}')
        }, 1);
    };
    socket.onmessage = function (e) {

    };
    socket.onclose = function (e) {
        $('#myModal').modal({backdrop: 'static', keyboard: false});
    };

</script>





