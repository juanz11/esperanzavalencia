jQuery(function($){
	
	//Scroll function to show donate button on the fixed header
	$(window).scroll(function(){

		var boton_en = document.getElementById("donate-btn-en");
		var boton_es = document.getElementById("donate-btn-es");
		var mobi_boton_en = document.getElementById("mobi-donate-btn-en");
		var mobi_boton_es = document.getElementById("mobi-donate-btn-es");

		if(($(window).scrollTop() > 205) && ($(window).width() > 600)){
			
			if(mobi_boton_en || boton_en){
				boton_en.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 14px;padding:5px 25px;margin-left:-160px;letter-spacing:0.1px;display:flex;align-items:center;height: 40px;border-radius:0px;');
				mobi_boton_en.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 14px;padding:5px 25px;margin-left:-160px;letter-spacing:0.1px;');
			}else{
				boton_es.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 14px;padding:5px 25px;margin-left:-55px;letter-spacing:0.1px;display:flex;align-items:center;height: 40px;border-radius:0px;');
				mobi_boton_es.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 14px;padding:5px 25px;margin-left:-55px;letter-spacing:0.1px;');
			}

		}else if(($(window).scrollTop() > 205) && ($(window).width() > 30)){
			if(mobi_boton_en || boton_en){
				boton_en.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 12px;padding:7px 25px;margin-left:-160px;letter-spacing:0.1px;display:flex;align-items:center;height: 40px;border-radius:0px;');
				mobi_boton_en.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 12px;padding:7px 25px;margin-left:-160px;letter-spacing:0.1px;');
			}else{
				boton_es.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 12px;padding:7px 25px;margin-left:-55px;letter-spacing:0.1px;display:flex;align-items:center;height: 40px;border-radius:0px;');
				mobi_boton_es.setAttribute('style','display:block;order:2;font-family: Roboto;font-size: 12px;padding:7px 25px;margin-left:-55px;letter-spacing:0.1px;');
			}
			
		}else {
			if(mobi_boton_en || boton_en){
				boton_en.setAttribute('style','display:none;');
				mobi_boton_en.setAttribute('style','display:none;');
			}else{
				boton_es.setAttribute('style','display:none;');
				mobi_boton_es.setAttribute('style','display:none;');
			}
		}
	});
	
});
