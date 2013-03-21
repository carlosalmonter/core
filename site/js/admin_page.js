CORE.ADMIN = {};

(function(w){
    function setMenuSlideFunctionality(){
        var box = $(".box .h_title");
    	box.not(this).next("ul").hide("normal");
    	box.not(this).next("#home").show("normal");
    	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
    }

    function setAdminMenuItemsEvents(){
        var adminMenu = $("#admin_menu");
        adminMenu.find(".page").click(function(){
            CORE.ACTIONS.loadModuleForId("3", $("#rightColumn"));
        });
        adminMenu.find(".add_page").click(function(){
            CORE.ACTIONS.loadModuleForId("4", $("#rightColumn"));
        });
    }

    CORE.ADMIN.init = function(){
        setMenuSlideFunctionality();
        setAdminMenuItemsEvents();
    };
})(window);

$(document).ready(function(){
    CORE.ADMIN.init();
});





