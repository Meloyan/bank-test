var client = (function () {

    var connectionTimer = null;
    var conn;

    /**
     *
     */
    function init() {
        createSocketConnection();
        setSocketConnection();
    }

    /**
     *
     */
    function setSocketConnection() {
        clearSocketConnection();
        connectionTimer = setInterval(function () {
            createSocketConnection();
        }, 5000);
    }

    /**
     *
     */
    function createSocketConnection() {
        conn = new WebSocket('ws://' + app.socketUrl);
        conn.onopen = function (e) {
            clearSocketConnection();
        };
        conn.onclose = function (e) {
            setSocketConnection();
        };
        conn.onerror = function (e) {
            setSocketConnection();
        };
        conn.onmessage = function (e) {

        };
    }

    /**
     *
     */
    function clearSocketConnection() {
        clearInterval(connectionTimer);
        connectionTimer = null;
    }

    function register() {

    }

    //
    return {
        init: function () {
            init();
        }
    }

})();