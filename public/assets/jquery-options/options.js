$(document).ready(function(){
	var foul = $('[name="foul"]')
	var category = $('[name="category"]')
	var causal = $('[name="causal"]')

	var leves_deber = $('.leves_deber')
	var leves_personal = $('.leves_personal')
	var leves_institucion = $('.leves_institucion')

	var graves_deber = $('.graves_deber')
	var graves_personal = $('.graves_personal')
	var graves_institucion = $('.graves_institucion')

	var g_deber = $('.g_deber')
	var g_personal = $('.g_personal')
	var g_institucion = $('.g_institucion')

	category.blur(function(){
		logica()
	})

	foul.blur(function(){
		logica()
	})

	function logica(){
		if(foul.val()=='Leves'){
			hiddAll(graves_deber, graves_institucion, graves_personal)
			hiddAll(g_deber, g_institucion, g_personal)
			if(category.val()=='Al deber'){
				show(leves_deber); hidd(leves_institucion); hidd(leves_personal);
			}else if(category.val()=='Personal'){
				hidd(leves_deber); hidd(leves_institucion); show(leves_personal);
			}else if(category.val()=='A la institucion'){
				hidd(leves_deber); show(leves_institucion); hidd(leves_personal);
			}			
		}else if(foul.val() == 'Graves'){
			hiddAll(g_deber, g_institucion, g_personal)
			hiddAll(leves_deber, leves_institucion, leves_personal)
			if(category.val()=='Al deber'){
				show(graves_deber); hidd(graves_institucion); hidd(graves_personal);
			}else if(category.val()=='Personal'){
				hidd(graves_deber); hidd(graves_institucion); show(graves_personal);
			}else if(category.val()=='A la institucion'){
				hidd(graves_deber); show(graves_institucion); hidd(graves_personal);
			}	
		}else if(foul.val() == 'Gravisimas'){
			hiddAll(leves_deber, leves_institucion, leves_personal)
			hiddAll(graves_personal, graves_institucion, graves_deber)
			if(category.val()=='Al deber'){
				show(g_deber); hidd(g_institucion); hidd(g_personal);
			}else if(category.val()=='Personal'){
				hidd(g_deber); hidd(g_institucion); show(g_personal);
			}else if(category.val()=='A la institucion'){
				hidd(g_deber); show(g_institucion); hidd(g_personal);
			}	
		}else console.log('ocurrio algun error')
	}

	function show(name){
		name.css('display', 'inline')
	}
	function hidd(name){
		name.css('display', 'none')
	}
	function hiddAll(one, two, three){
		one.css('display', 'none')
		two.css('display', 'none')
		three.css('display', 'none')
	}
})