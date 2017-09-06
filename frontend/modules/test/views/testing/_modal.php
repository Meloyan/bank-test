 <?php

 use common\models\QuestionAnswer;

 ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <div class="alert alert-danger" id="modal-header-alert">
                        <strong>Jamanak@  avartvec!</strong> duq aceleq test@
                    </div>
                </div>
                <div class="modal-body">

                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40% Complete (success)
                        </div>
                    </div>
                    <div>
                        <h5>chisht patasxanner@  <span class="label label-success"><?= QuestionAnswer::getAnswerList(); ?></span></h5>
                        <h5>sxal patasxanner@  <span class="label label-danger"><?= QuestionAnswer::getAnswerList(false); ?></span></h5>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="pull-left">test  aryuqner@ karox  eq  ditel <a href="#" class="color-info">ayxtex</a></p>
                    <a href="#" class="pull-right">lichniy kabinet</a>
                </div>
            </div>
        </div>
    </div>