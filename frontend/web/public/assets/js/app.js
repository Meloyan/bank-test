var app = {

    socketUrl: '', appSessionId: '',
    socketTimer: false,

    /**
     *
     */
    init: function (params) {
        params = params || {};
        for (var k in params) {
            this[k] = params[k];
        }
    },

    /**
     *
     * @param url
     * @param data
     * @param success
     */
    post: function (url, data, success) {
        success = success || {};
        var defaults = {
            method: 'post',
            url: url,
            data: data
        };

        var params = $.extend(defaults, success);
        $.ajax(params);
    }
};