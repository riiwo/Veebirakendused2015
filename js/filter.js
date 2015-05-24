$(function(){
	$('input#filter').on('click', function(e){
		e.preventDefault();
		var data_form = $('#ringkond option:selected').val();
		if(data_from){
			$.post("./core/filter.php",data_from,function(data){
				return data;
			});
		} 
	});
});

