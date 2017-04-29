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
    post: function (url, data, _return) {
        $.ajax({
            method: 'post',
            url: url,
            data: data,
            success: function (data) {
                response = data;
            }
        });

        if (_return) {
            return response;
        }
    }
};