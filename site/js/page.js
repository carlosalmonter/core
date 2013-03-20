var CORE = {};
CORE.ACTIONS = {};

(function(w){
    CORE.ACTIONS.loadModuleForId = function (moduleId, element){
        $.ajax({
            type: "POST",
            url: "/core/site/ajax/modules/load_module.php",
            data: {
                moduleId: moduleId
            },
            success:(function( data ) {
                var decodedData = $.parseJSON(data);
                element.html(decodedData.moduleHtml);
            })
        });
    }
})(window);

$(document).ready(function(){


});
