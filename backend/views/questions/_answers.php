<table class="table">
    <thead>

    </thead>

    <tbody>

    <?php foreach ($answers as $answer) : ?>


        <tr class="<?=$answer->fl_true ? 'success' : 'danger' ?>">

            <td>

                <?php if($answer->fl_true): ?>

                    <span class="label label-success">Правильный ответ</span>

                <?php else: ?>

                    <span class="label label-danger">неверный</span>

                <?php endif;?>

                <input type="hidden" value="<?=$answer->id?>" name="Answers[id][]">

                <input type="hidden" value="<?=$answer->fl_true?>" name="Answers[fl_true][]">

                <textarea class="form-control" rows="3" name="Answers[body][]"><?=$answer->body?></textarea>

            </td>

        </tr>


    <?php endforeach; ?>


    </tbody>


</table>