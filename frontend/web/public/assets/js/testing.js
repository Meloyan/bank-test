var testing = (function () {


    var parents = null;
    var sessionId = $('.session').val();

    /**
     *
     */
    function init() {
        bind();
        if (sessionId) {
            getData();
        }
    }

    /**
     *
     */
    function bind() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
            menuTab(e, $(this));
            if (parents) {
                parents.addClass('has-answered').html('<span class="glyphicon glyphicon-ok"></span>patasxanac e');
            }
            $(this).siblings('a[data-has-answerd = "1"]').addClass("has-answered").find('span').addClass('glyphicon glyphicon-ok');
            hasAttr($(this));

        });
        $(document).on('click', '.answer-radio', function () {
            sendAnswer($(this).attr('name'), $(this).attr('data-id'));
            hasAnswer($(this));
            setTimeout(function () {
                getData();
            }, 250);

        });
    }

    /**
     *
     * @param element
     */
    function hasAnswer(element) {
        parents = $('.list-group-item-' + element.attr('name'));
        parents.addClass('has-answered-active').attr('data-has-answerd', 1).text('patasxanac e');

    }

    /**
     *
     * @param element
     */
    function hasAttr(element) {
        if (element.attr('data-has-answerd')) {
            element.addClass('has-answered-active').removeClass('has-answered').find('span').removeClass('glyphicon glyphicon-ok');
            element.siblings('a[data-has-answerd = "1"]').addClass("has-answered").find('span').addClass('glyphicon glyphicon-ok');
        }
    }

    /**
     *
     * @param question
     * @param answer
     */
    function sendAnswer(question, answer) {
        var data = {
            questionId: question,
            answerId: answer
        };

        app.post('/test/api/create', {data: data});
    }

    /**
     *
     * @param e
     */
    function menuTab(e, element) {
        var tab = $("div.bhoechie-tab>div.bhoechie-tab-content"),
            index = element.index();
        e.preventDefault();

        element.siblings('a.active').removeClass("active");
        element.siblings('a.has-answered-active').removeClass("has-answered-active");

        element.addClass("active");

        tab.removeClass("active");

        tab.eq(index).addClass("active");
    }

    /**
     *
     * @param answer
     * @param noAnswer
     */
    function infoBody(answer, noAnswer) {
        var data = {answer: answer, noAnswer: noAnswer};
        var template = _.template($('#info-body').html(), data)(data);
        $('.right-information-bar').html(template);
    }


    /**
     *
     */
    function getData() {
        app.post('/test/api/session-info', {sessionId: sessionId}, {
            success: function (data) {
                infoBody(data.answered_count, data.unanswered_count);
                form.fixTimer($('#given_date'), {
                    hours: data.rest_of_time.hours,
                    minutes: data.rest_of_time.minutes,
                    seconds: data.rest_of_time.seconds
                });
            }
        });
    }

    //
    $(document).ready(function () {
        init();
    });
})();