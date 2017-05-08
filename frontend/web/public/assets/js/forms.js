var form = {

    /**
     *
     */
    init: function () {

    },

    /**
     *
     * @param elem
     * @param _params
     */
    fixTimer: function(elem, _params) {
        _params = _params || {};
        var defaults = {
            size : "lg"
        };
        var params = $.extend(defaults, _params);
        elem.countdowntimer(params);
    }

};