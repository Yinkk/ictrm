$(function() {
	
	$('.profile-detail-form').tabs({
		cookie: {expires: 1, name:'profile-detail-form'}
	});
	
	$('.btn-go-to-profile-list').button({
		icons: {primary: "ui-icon-arrowreturnthick-1-w"}
	});
	
	$('.btn-profile-print').button({
		icons: {primary: "ui-icon-print"}
	});
	
	$('.datavalue').each(function(){
		var txt=$(this).text();
		txt=$.trim(txt);
		if( txt.length<1 ){
			$(this).parent('td').parent('tr').hide();
		}
	});
	
});