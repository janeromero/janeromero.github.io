$(document).ready(function(){
	$(".fa-times").click(function(){
		$(".sidebar-menu").addClass("hide-menu");
		$(".toggle-menu").addClass("opacity-one");
	});

	$(".toggle-menu").click(function(){
		$(".sidebar-menu").removeClass("hide-menu");
		$(".toggle-menu").removeClass("opacity-one");
	});
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
};

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "rgba(41,43,49,1)";
};


