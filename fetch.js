$(document).ready(function(){
	$("#state").on('change',function(){
		var state_id=$(this).val();
		$.ajax({
			method:"POST",
			url:"process.php",
			data:{id:state_id},
			dataType:"html",
			success:function(data){
				$("#city").html(data);
			}
		});
	});
});	
