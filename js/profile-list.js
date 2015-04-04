$(function() {
	
	 oTable = $('#profile_list').dataTable({
		"sDom": 'C<"clear"><"H"lf>rt<"F"ip>',
		"bJQueryUI": true,
        "sPaginationType": "full_numbers", 
		"oColVis": { "activate": "mouseover"},
		"bStateSave": true,
		"aoColumns": [null, null, null,null,null,null, {"bVisible": false}, {"bVisible": false}, { "bSortable": false }]
    });

});

