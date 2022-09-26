/****************
*	Main.js		*
****************/
var CDN_URI = window.location.protocol + "//cdn." + window.location.hostname;

$(document).ready(function() {
	AOS.init();
	// Remove loading screen
	$('#loading_wrap').remove();
	
	/* Scroll  */
	$(window).scroll(function() {
		if($(this).scrollTop() > 200) { 
			/* Scroll to top */
			$('#scroll-top').addClass('show');
		} else {
			/* Scroll to top */
			$('#scroll-top').removeClass('show');
		}
	});
	
	/* Search */
	if($('#search-result').length){
		search($('#search-result').attr('data-query'));
	}
	
	/* - Feed - */
	
	if($('#selectCountry').length){
		$('#selectCountry').change(()=> {
			selectedValue = $(this).find(':selected').val();
			setCookieCountry(parseInt(selectedValue));
			
			if ($('#page-services').length){
				feedServices(matchCountry(getCookie('country')), null);
			}
		});
		feedCountryList($('#selectCountry'));
	}
	
	if ($('#current-outage-service').length){
		feedCurrentOutage($('#current-outage-service'), matchCountry(getCookie('country')));
	}
	
	if ($('#page-services').length){
		feedServices(matchCountry(getCookie('country')), null);
	}
});

/** ---- Main Thread ---- **/

const domainName = window.location.origin;
// Set Country selected cookie if not exist
if (!cookieExist('country')){
	setCookieCountry(getCookie('lang'));
} 


/** -- Functions -- **/
/* Cookies management */
function getCookie(name){
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if(begin == -1){
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
			end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
} 
function cookieExist(name){
	return !(getCookie(name) === null);
}
function setCookieCountry(countrySelected){
	console.log()
	if (typeof countrySelected === 'number') {
		cookieContent = matchCountry(parseInt(countrySelected));
	} else {
		cookieContent = countrySelected;
	}
	dateNow = new Date();
	dateNow.setDate(dateNow.getDate() + 365);
	document.cookie = "country=" + cookieContent + ";expires=" + dateNow.toUTCString();
}
/* ------------------ */

/**
* Function to find key/value of country by value/key of this country
* @Param string | number, Key or Value of country to find
* @Return number | string, Value or Key of country
**/
function matchCountry(search){
	Map.prototype.getKey = function(targetValue){
		let iterator = this[Symbol.iterator]()
		for (const [key, value] of iterator) {
			if(value === targetValue)
			return key;
		}
	}
	
	countries = new Map();
	countries.set((1).toString(), 'af');countries.set((2).toString(), 'ax');countries.set((3).toString(), 'al');
	countries.set((4).toString(), 'dz');countries.set((5).toString(), 'as');countries.set((6).toString(), 'ad');
	countries.set((7).toString(), 'ao');countries.set((8).toString(), 'ai');countries.set((9).toString(), 'aq');
	countries.set((10).toString(), 'ag');countries.set((11).toString(), 'ar');countries.set((12).toString(), 'am');
	countries.set((13).toString(), 'aw');countries.set((14).toString(), 'au');countries.set((15).toString(), 'at');
	countries.set((16).toString(), 'az');countries.set((17).toString(), 'bs');countries.set((18).toString(), 'bh');
	countries.set((19).toString(), 'bd');countries.set((20).toString(), 'bb');countries.set((21).toString(), 'by');
	countries.set((22).toString(), 'be');countries.set((23).toString(), 'bz');countries.set((24).toString(), 'bj');
	countries.set((25).toString(), 'bm');countries.set((26).toString(), 'bt');countries.set((27).toString(), 'bo');
	countries.set((28).toString(), 'ba');countries.set((29).toString(), 'bw');countries.set((30).toString(), 'bv');
	countries.set((31).toString(), 'br');countries.set((32).toString(), 'io');countries.set((33).toString(), 'bn');
	countries.set((34).toString(), 'bg');countries.set((35).toString(), 'bf');countries.set((36).toString(), 'bi');
	countries.set((37).toString(), 'kh');countries.set((38).toString(), 'cm');countries.set((39).toString(), 'ca');
	countries.set((40).toString(), 'cv');countries.set((41).toString(), 'ky');countries.set((42).toString(), 'cf');
	countries.set((43).toString(), 'td');countries.set((44).toString(), 'cl');countries.set((45).toString(), 'cn');
	countries.set((46).toString(), 'cx');countries.set((47).toString(), 'cc');countries.set((48).toString(), 'co');
	countries.set((49).toString(), 'km');countries.set((50).toString(), 'cg');countries.set((51).toString(), 'cd');
	countries.set((52).toString(), 'ck');countries.set((53).toString(), 'cr');countries.set((54).toString(), 'ci');
	countries.set((55).toString(), 'hr');countries.set((56).toString(), 'cu');countries.set((57).toString(), 'cy');
	countries.set((58).toString(), 'cz');countries.set((59).toString(), 'dk');countries.set((60).toString(), 'dj');
	countries.set((61).toString(), 'dm');countries.set((62).toString(), 'do');countries.set((63).toString(), 'ec');
	countries.set((64).toString(), 'eg');countries.set((65).toString(), 'sv');countries.set((66).toString(), 'gq');
	countries.set((67).toString(), 'er');countries.set((68).toString(), 'ee');countries.set((69).toString(), 'et');
	countries.set((70).toString(), 'fk');countries.set((71).toString(), 'fo');countries.set((72).toString(), 'fj');
	countries.set((73).toString(), 'fi');countries.set((74).toString(), 'fr');countries.set((75).toString(), 'gf');
	countries.set((76).toString(), 'pf');countries.set((77).toString(), 'tf');countries.set((78).toString(), 'ga');
	countries.set((79).toString(), 'gm');countries.set((80).toString(), 'ge');countries.set((81).toString(), 'de');
	countries.set((82).toString(), 'gh');countries.set((83).toString(), 'gi');countries.set((84).toString(), 'gr');
	countries.set((85).toString(), 'gl');countries.set((86).toString(), 'gd');countries.set((87).toString(), 'gp');
	countries.set((88).toString(), 'gu');countries.set((89).toString(), 'gt');countries.set((90).toString(), 'gg');
	countries.set((91).toString(), 'gn');countries.set((92).toString(), 'gw');countries.set((93).toString(), 'gy');
	countries.set((94).toString(), 'ht');countries.set((95).toString(), 'hm');countries.set((96).toString(), 'va');
	countries.set((97).toString(), 'hn');countries.set((98).toString(), 'hk');countries.set((99).toString(), 'hu');
	countries.set((100).toString(), 'is');countries.set((101).toString(), 'in');countries.set((102).toString(), 'id');
	countries.set((103).toString(), 'ir');countries.set((104).toString(), 'iq');countries.set((105).toString(), 'ie');
	countries.set((106).toString(), 'in');countries.set((107).toString(), 'il');countries.set((108).toString(), 'it');
	countries.set((109).toString(), 'jm');countries.set((110).toString(), 'jp');countries.set((111).toString(), 'je');
	countries.set((112).toString(), 'jo');countries.set((113).toString(), 'kz');countries.set((114).toString(), 'ke');
	countries.set((115).toString(), 'ki');countries.set((116).toString(), 'kp');countries.set((117).toString(), 'kr');
	countries.set((118).toString(), 'kw');countries.set((119).toString(), 'kg');countries.set((120).toString(), 'la');
	countries.set((121).toString(), 'lv');countries.set((122).toString(), 'lb');countries.set((123).toString(), 'ls');
	countries.set((124).toString(), 'lr');countries.set((125).toString(), 'ly');countries.set((126).toString(), 'li');
	countries.set((127).toString(), 'lt');countries.set((128).toString(), 'lu');countries.set((129).toString(), 'mo');
	countries.set((130).toString(), 'mk');countries.set((131).toString(), 'mg');countries.set((132).toString(), 'mw');
	countries.set((133).toString(), 'my');countries.set((134).toString(), 'mv');countries.set((135).toString(), 'ml');
	countries.set((136).toString(), 'mt');countries.set((137).toString(), 'mh');countries.set((138).toString(), 'mq');
	countries.set((139).toString(), 'mr');countries.set((140).toString(), 'mu');countries.set((141).toString(), 'yt');
	countries.set((142).toString(), 'mx');countries.set((143).toString(), 'fm');countries.set((144).toString(), 'md');
	countries.set((145).toString(), 'mc');countries.set((146).toString(), 'mh');countries.set((147).toString(), 'ms');
	countries.set((148).toString(), 'ma');countries.set((149).toString(), 'mz');countries.set((150).toString(), 'mm');
	countries.set((151).toString(), 'na');countries.set((152).toString(), 'nr');countries.set((153).toString(), 'np');
	countries.set((154).toString(), 'nl');countries.set((155).toString(), 'an');countries.set((156).toString(), 'nc');
	countries.set((157).toString(), 'nz');countries.set((158).toString(), 'ni');countries.set((159).toString(), 'ne');
	countries.set((160).toString(), 'ng');countries.set((161).toString(), 'nu');countries.set((162).toString(), 'nf');
	countries.set((163).toString(), 'mp');countries.set((164).toString(), 'no');countries.set((165).toString(), 'om');
	countries.set((166).toString(), 'pk');countries.set((167).toString(), 'pw');countries.set((168).toString(), 'ps');
	countries.set((169).toString(), 'pa');countries.set((170).toString(), 'pg');countries.set((171).toString(), 'py');
	countries.set((172).toString(), 'pe');countries.set((173).toString(), 'ph');countries.set((174).toString(), 'pn');
	countries.set((175).toString(), 'pl');countries.set((176).toString(), 'pt');countries.set((177).toString(), 'pr');
	countries.set((178).toString(), 'qa');countries.set((179).toString(), 're');countries.set((180).toString(), 'ro');
	countries.set((181).toString(), 'ru');countries.set((182).toString(), 'rw');countries.set((183).toString(), 'sh');
	countries.set((184).toString(), 'kn');countries.set((185).toString(), 'lc');countries.set((186).toString(), 'pm');
	countries.set((187).toString(), 'vc');countries.set((188).toString(), 'ws');countries.set((189).toString(), 'sm');
	countries.set((190).toString(), 'st');countries.set((191).toString(), 'sa');countries.set((192).toString(), 'sn');
	countries.set((193).toString(), 'cs');countries.set((194).toString(), 'sc');countries.set((195).toString(), 'sl');
	countries.set((196).toString(), 'sg');countries.set((197).toString(), 'sk');countries.set((198).toString(), 'si');
	countries.set((199).toString(), 'sb');countries.set((200).toString(), 'so');countries.set((201).toString(), 'za');
	countries.set((202).toString(), 'gs');countries.set((203).toString(), 'es');countries.set((204).toString(), 'lk');
	countries.set((205).toString(), 'sd');countries.set((206).toString(), 'sr');countries.set((207).toString(), 'sj');
	countries.set((208).toString(), 'sz');countries.set((209).toString(), 'se');countries.set((210).toString(), 'ch');
	countries.set((211).toString(), 'sy');countries.set((212).toString(), 'tw');countries.set((213).toString(), 'tj');
	countries.set((214).toString(), 'tz');countries.set((215).toString(), 'th');countries.set((216).toString(), 'tl');
	countries.set((217).toString(), 'tg');countries.set((218).toString(), 'tk');countries.set((219).toString(), 'to');
	countries.set((220).toString(), 'tt');countries.set((221).toString(), 'tn');countries.set((222).toString(), 'tr');
	countries.set((223).toString(), 'tm');countries.set((224).toString(), 'tc');countries.set((225).toString(), 'tv');
	countries.set((226).toString(), 'ug');countries.set((227).toString(), 'ua');countries.set((228).toString(), 'ae');
	countries.set((229).toString(), 'gb');countries.set((230).toString(), 'us');countries.set((231).toString(), 'um');
	countries.set((232).toString(), 'uy');countries.set((233).toString(), 'uz');countries.set((234).toString(), 'vu');
	countries.set((235).toString(), 've');countries.set((236).toString(), 'vn');countries.set((237).toString(), 'vg');
	countries.set((238).toString(), 'vi');countries.set((239).toString(), 'wf');countries.set((240).toString(), 'eh');
	countries.set((241).toString(), 'ye');countries.set((242).toString(), 'zm');countries.set((243).toString(), 'zw');
	

	// Find by key
	if(typeof search === 'number'){ 
		return countries.get(search.toString());
	}
	// Find by value
	if (typeof search === 'string'){
		return parseInt(countries.getKey(search));
	}
	return undefined;
}

function statusLabelComponent(statusLabel){
	switch(statusLabel) {
		case 'error':
			return (
				'<span class="text-danger">' +
					'<i class="fa-solid fa-exclamation-circle"></i> '+ $.t('status.'+ statusLabel) +
				'</<span>'
			);
		case 'warning':
			return (
				'<span class="text-warning">' +
					'<i class="fa-solid fa-triangle-exclamation"></i> ' + $.t('status.'+ statusLabel) +
				'</<span>'
			);	
		default:
			return (
				'<span class="text-success">' +
					'<i class="fa-solid fa-square-check"></i> ' + $.t('status.'+ statusLabel) +
				'</<span>'
			);
	}
}

/** -- Ajax Func -- **/
function feedCountryList(node){
	countrySelectedId = matchCountry(getCookie('country'));
	$.ajax({
		url: domainName + "/controllers/gateway.php",
		data: {action: "country_list"},
		method: "GET",
		dataType: "json",
		success: (responseData) => {
			responseData.map((country) => {
				node.append(
					'<option value="'+ country.id +'"'+ (country.id === countrySelectedId ? 'selected' : '') + '>'
					+ country.name +' ('+ country.domainSuffix 
					+')</option>'
				);
			});
		},
		error: (err) => {
			console.error('API error :',err.status , err.responseText);
		}
	});
}

function search(query){
	$.ajax({
		url: domainName + "/controllers/gateway.php",
		data: {action: "search", q: query},
		method: "GET",
		dataType: "json",
		success: (responseData) => {
			// Result count
			$('#search-result-count').empty();
			$('#search-result-count').append($.t('pages.search.resultCount', {"count": responseData.length}));
			
			$('#search-result .list-group').empty();
			responseData.map((service) => {
				$('#search-result .list-group').append(
					'<ul class="list-group-item">'+
						'<a href="'+ service.path +'">'+ service.name +'</a>' +
					'</ul>'
				);
			});
		},
		error: (err) => {
			console.error('API error :',err.status , err.responseText);
		}
	});
}

function feedCurrentOutage(rowNode, country){
	// onLoad
	rowNode.append(
		'<div class="col-12 text-center">' +
			'<div class="loader-simple"><div></div><div></div><div></div></div>' +
		'</div>'
	);
	
	$.ajax({
		url: domainName + "/controllers/gateway.php",
		data: {action: "current_outage", country: country, count: 8},
		method: "GET",
		timeout: 4000,
		dataType: "json",
		success: (responseData) => {
			rowNode.empty();
			if (responseData.length > 0){
				responseData.map((service) => {
					var service_banner_src = CDN_URI + "/images/service-banner/" + service.service.cname.toLowerCase() + ".png";
					
					rowNode.append(
						'<div class="col-3">' +
							'<div class="card card-service text-dark bg-light mb-3" onClick="location.href=\''+ service.service.path +'\'">' +
								'<img src="'+ service_banner_src +'" class="card-img-top p-3">' +
								'<div class="card-body">' +
									'<h5 class="card-title text-center">'+ service.service.name +'</h5>' +
								'</div>' +
								'<ul class="list-group list-group-flush">' +
									'<li class="card-service-status list-group-item text-center">'+ statusLabelComponent(service.status.label) +'</li>' +
								'</ul>' +
							'</div>' +
						'</div>' 
					);
				});
			} else {
				rowNode.append(
					'<div class="col-12 text-center">' +
						"<h4>"+$.t('pages.home.sections.services.noService')+"</h4>" +
					'</div>'
				);
			}
		},
		error: (err) => {
			console.error('API error :', err);
			rowNode.empty();
			rowNode.append(
					'<div class="col-12 text-center">' +
						"<h4>"+$.t('pages.home.sections.services.noService')+"</h4>" +
					'</div>'
				);
		}
	})
}

function feedServices (country, pageIndex) {
	// OnLoad
	$('#page-services #page-body section').css("display", "none");
	$('#page-services #page-body').append(
		'<div class="text-center">' +
			'<div class="loader-simple"><div></div><div></div><div></div></div>' +
		'</div>'
	)
	
	$.ajax({
		url: domainName + "/controllers/gateway.php",
		data: {action: "services", country: country, pageIndex: pageIndex},
		method: "GET",
		timeout: 4000,
		dataType: "json",
		success: (responseData) => {
			// Remove current pagination btn
			$('#page-services #page-body section nav .pagination .page-item')
				.slice(1, $('#page-services #page-body section nav .pagination .page-item').length-1).detach();
			
			// Add pagination
			if (!responseData.paging.hasPrev){
				// Previous btn
				$('#page-services #page-body section nav .pagination .page-item').first().removeAttr("onClick");
				$('#page-services #page-body section nav .pagination .page-item').first().attr("class", "page-item disabled");
			}else {
				$('#page-services #page-body section nav .pagination .page-item').first().removeClass("disabled");
				$('#page-services #page-body section nav .pagination .page-item').first()
					.attr("onClick", "feedServices("+country+", "+ (responseData.paging.currentPage - 1)+")");
			}
			if (!responseData.paging.hasNext){
				// Next btn
				$('#page-services #page-body section nav .pagination .page-item').last().removeAttr("onClick");
				$('#page-services #page-body section nav .pagination .page-item').last().attr("class", "page-item disabled");
			} else {
				$('#page-services #page-body section nav .pagination .page-item').last().removeClass("disabled");
				$('#page-services #page-body section nav .pagination .page-item').last()
					.attr("onClick", "feedServices("+country+", "+ (responseData.paging.currentPage + 1)+")");
			}
			
			// Browse range desc
			for(var i = responseData.paging.totalPage; i > 0; i--){
				// Create element <li>
				var liItem = document.createElement("li");
				if (i === responseData.paging.currentPage){
					liItem.setAttribute("class", "page-item active");
				} else {
					liItem.setAttribute("class","page-item");
				}
				liItem.setAttribute("onClick", "feedServices("+country+", "+i+")");
				var link = document.createElement("a");
				link.setAttribute("class", "page-link");
				link.append(i);
				
				liItem.append(link);
				$('#page-services #page-body section nav .pagination .page-item').first().after(liItem)
			}
			
			// Create Service Card
			var rowNode = $('#page-services #page-body section div.row#services-list');
			rowNode.empty();
			responseData.data.map((service) => {
				var service_banner_src = CDN_URI + "/images/service-banner/" + service.service.cname.toLowerCase() + ".png";
				rowNode.append(
					'<div class="col-3">' +
						'<div class="card card-service text-dark bg-light mb-3" onClick="location.href=\''+ service.service.path +'\'">' +
							'<img src="'+ service_banner_src +'" class="card-img-top p-3">' +
							'<div class="card-body">' +
								'<h5 class="card-title text-center">'+ service.service.name +'</h5>' +
							'</div>' +
							'<ul class="list-group list-group-flush">' +
								'<li class="card-service-status list-group-item text-center">'+ statusLabelComponent(service.status.label) +'</li>' +
							'</ul>' +
						'</div>' +
					'</div>' 
				);
			});
			
			
			// Displaying
			$('#page-services #page-body').children().last().detach();
			$('#page-services #page-body section').removeAttr('style');
		},
		error: (err) => {
			console.error(err)
		}
	});
}