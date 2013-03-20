$(document).ready(function(){
    function loadModuleForId(moduleId, element){
        $.ajax({
            type: "POST",
            url: "/core/site/ajax/modules/load_module.php",
            data: {
                moduleId: "3"
            },
            success:(function( data ) {
                var decodedData = $.parseJSON(data);
                element.html(decodedData.moduleHtml);
            })
        });
    }

    $("#admin_menu .page").click(function(){
        loadModuleForId("3", $("#rightColumn"));
    });

});
