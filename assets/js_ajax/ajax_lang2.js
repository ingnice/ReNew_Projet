$('#english').click(function() {
	$.ajax({
		url: '../Language/switchLang/english',
		type: 'GET',
		success: function(result){
    	location.reload();
		}
		});
	});

$('#thai').click(function() {
	$.ajax({
		url: '../Language/switchLang/thai',
		type: 'GET',
		success: function(result){
			location.reload();
			}
		});
	});