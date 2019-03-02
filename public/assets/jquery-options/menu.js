$(document).ready(function(){
	var showMenu =  $(".showMenu")
	var showMenu1 =  $(".showMenu1")
	var showMenu2 =  $(".showMenu2")

	$(".menuName").hover(show, hidd)
	$(".menuName1").hover(show1, hidd1)
	$(".menuName2").hover(show2, hidd2)

	function show(){
		showMenu.css('display', 'inline')
	}
	function hidd(){
		showMenu.css('display', 'none')
	}
	function show1(){
		showMenu1.css('display', 'inline')
	}
	function hidd1(){
		showMenu1.css('display', 'none')
	}
	function show2(){
		showMenu2.css('display', 'inline')
	}
	function hidd2(){
		showMenu2.css('display', 'none')
	}
})