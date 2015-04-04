function checkCitizenID(cid){
	var re=false;
	if( /^[0-9]{13}$/.test(cid) ){
		var sum=0;
		var lastdigit=(cid.charAt(12))*1;
		for(i=0; i<12; i++){
			sum += parseFloat(cid.charAt(i))*((cid.length)-i);
		}
		if( (11-(sum%11))%10==lastdigit ){
			re=true;
		}
	}
	return re;
}

$(function() {
	
	function content_height_reload(){
		if( $('#sidebar').length > 0 ){
			var minh=$('#sidebar').height()+50;
			$('#content').css('min-height', minh+'px');
		}
	}
	
	$('.boxed .title').click(function(){
		var p=$(this).parent('.boxed');
		var id=p.attr('id');
		var c=p.children('.content');
		if( c.css('display')=='block' ){
			$.cookie('boxed'+id, 'hide');
			c.hide();
		}else{
			$.cookie('boxed'+id, 'show');
			c.show();
		}
		content_height_reload();
	});
	
	$('.boxed .content').each(function(){
		var id=$(this).parent('.boxed').attr('id');
		if( $.cookie('boxed'+id)=='hide' ){
			$(this).hide();
		}
	});
	
	content_height_reload();
	
});