var app = {

    socketUrl: '',
    socketTimer: false,

    /**
     *
     */
    init: function () {
       
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