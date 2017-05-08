var app = {

    /**
     *
     */
    init: function () {

    },

    /**
     *
     * @param url
     * @param data
     * @param _return
     * @returns {*}
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