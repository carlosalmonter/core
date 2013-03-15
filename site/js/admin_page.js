$(function(){
    var box = $(".box .h_title");
	box.not(this).next("ul").hide("normal");
	box.not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
