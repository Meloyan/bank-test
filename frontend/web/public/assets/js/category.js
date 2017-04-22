var category = (function () {

    /**
     *
     */
    function init() {
         bind();
    }

    /**
     *
     */
    function bind() {
        $('#searchprofession-name').on('blur', function () {
            submitFormSearch();
        });
        $('.filter').change(function () {
            $('#form').submit();
        });
        $(document).on('click', '.inactive', function () {
           return false;
        });
    }

    /**
     *
     */
    function submitFormSearch(){
        var searchVal = $('#searchprofession-name').val();
        if(searchVal){
            $('#form').submit();
        }
    }

    //
    $(document).ready(function () {
        init();
    });

})();