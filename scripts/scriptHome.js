$(document).ready(function(){
	$('.carrosselHome').carousel({
		interval: 5000
	});
	$('.carrosselVideos').carousel({
		interval: 5000
	});
	$(".dropdown-toggle").hover(function(){
		//do
		var nextMenu = "#sub"+$(this).attr("id");
		$(".subMenuLi ul").css("display","none");
		$(nextMenu).css("display","none").slideToggle();
		//$(this+" .dropdown-menu").slideToggle();
	},
	function(){
		//undo
		var nextMenu = "#sub"+$(this).attr("id");
		//console.log($(next));
//		$(nextMenu).slideToggle();
	});
	$(".subMenuLi ul").hover(function(){
		//$(".subMenuLi ul").css("display","block");
	},
	function(){
		$(".subMenuLi ul").css("display","none");
	});
	
	$("#enqueteHome label").click(function() {
		if (!($("#homeEnquete").is(".finalizada"))) {
			$(".enquetes label").removeClass("checked");
			$(this).addClass("checked");
			console.log($(this));
		}
	});

	loadNews('#ultnotGeral','http://carsale.uol.com.br/novosite/import-news.asp','3');
	loadNews('#ultnotAvaliacoes','http://carsale.uol.com.br/novosite/import-news-testes.asp','2');
	// loadNews('#ultnotGeral','http://noticias.carsale.uol.com.br/?feed=json','3');

	$(".arrow-next-post").mouseover(function(){
		$(".next-post").removeClass("hide");
	});
	$(".arrow-previous-post").mouseover(function(){
		$(".previous-post").removeClass("hide");
	});

	$(".blog-nav-post").mouseover(function(){
		$(this).removeClass("hide");
	}).mouseout(function(){
		$(".previous-post").addClass("hide");
		$(".next-post").addClass("hide");
	});

	//OMNITURE ALBUM
	// $('#bbb-1-r').click(function(){
	// 	var imgOmnit = $("#theimg0-1").attr("src");
	// 	// console.log("hitOmniture -> "+imgOmnit);
	// 	imgOmnitName = imgOmnit.split("/");
	// 	imgOmnitLength = imgOmnitName.length;
	// 	imgOmnitNameFinal = imgOmnitName[imgOmnitLength-1];
	// 	imgOmnitFinal = imgOmnitNameFinal.split("?");
	// 	console.log("hitOmniturePhotoR2 -> "+imgOmnit+" / "+imgOmnitFinal[0]);
	// 	if (typeof hitOmniturePhoto!="undefined") {
	// 		hitOmniturePhoto(imgOmnit);
	// 		// hitOmniturePhoto(imgOmnitFinal[0]);
	// 		console.log("hitOmniturePhotoR -> "+imgOmnit+" / "+imgOmnitFinal[0]);
	// 	}
	// });
	$('#bbb-1-r').click(function(){
		var imgOmnit = $("#theimg0-1").attr("src");
		console.log("hitOmniturePhotoR2 -> "+imgOmnit);
		if (typeof hitOmniturePhoto!="undefined") {
			hitOmniturePhoto(imgOmnit);
			// hitOmniturePhoto(imgOmnitFinal[0]);
			console.log("hitOmniturePhotoR -> "+imgOmnit);
		}
	});
	$('#bbb-1-l').click(function(){
		var imgOmnit = $("#theimg1-1").attr("src");
		// console.log("hitOmniture -> "+imgOmnit);
		imgOmnitName = imgOmnit.split("/");
		imgOmnitLength = imgOmnitName.length;
		imgOmnitNameFinal = imgOmnitName[imgOmnitLength-1];
		imgOmnitFinal = imgOmnitNameFinal.split("?");
		console.log("hitOmniturePhotoL2 -> "+imgOmnit+" / "+imgOmnitFinal[0]);
		if (typeof hitOmniturePhoto!="undefined") {
			hitOmniturePhoto(imgOmnit);
			// hitOmniturePhoto(imgOmnitFinal[0]);
			console.log("hitOmniturePhotoL -> "+imgOmnit+" / "+imgOmnitFinal[0]);
		}
	});
	console.log("ready");
});
function loadNews(local,category,limit){
	var o = $(local);
	if (o.length > 0) {
		$.getJSON(category, function(data) {
			c=0;
			$.each(data, function(key, val) {
				if (c < limit){
					c++;
					// console.log("lendo últimas noticia "+ local);
					markupTemp = '<div class="chamadaMiddle">'+
						'<a href="'+val.permalink+'" title="'+val.title+'">'+
							'<div class="foto"> '+val.thumbnail+'</div>'+
							'<span class="span">'+val.title+'</span>'+
							'<p class="ultnotData">'+val.date+'</p>'+
						'</a>'+
					'</div>';
					$(local).append(markupTemp);
				}
			});
		});
	}
	//print
	//viva
}
function checkImage(address){
	$.get(address)
    .done(function() { 
        // Do something now you know the image exists.
        return true;
    }).fail(function() { 
        // Image doesn't exist - do something else.
        return false;
    });
}





























