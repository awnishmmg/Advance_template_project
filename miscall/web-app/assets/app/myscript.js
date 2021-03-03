// Application Js Script

$(document).ready(function(){

	$("#admin-add-new-permission").html("<span class='badge badge-success'> Select Role for Permission </span>");
	$("#admin-add-new-role").on("change",function(){
		// window.alert($(this).val());
		var role_id = $(this).val();
		if(role_id==""){
			$("#admin-add-new-permission").html("<span class='badge badge-danger'>Role Required </span>");
			return false;
		}
		$.ajax({
			url:"ajax/role-menu.php",
			type:"POST",
			data:{
				roleid:role_id
			},
			success:function(response){
				// console.log(response);
				$("#admin-add-new-permission").html(response);
			}
		});

	});

});


$(document).ready(function(){
	$(".admin-assign-radio").on("click",function(){
		var billing=$(this).val();
		if(billing!="no"){
			$("#admin-assign-billing").show(500);
		}else{
			$("#admin-assign-billing").hide(500);
		}
	});

	$("#admin-assign-need_hlr").on("change",function(){
		var need_hlr = $(this).val();
		if(need_hlr=="yes"){
			$("#admin-assign-hlr-cost").fadeIn(500);
		}else{
			$("#admin-assign-hlr-cost").fadeOut(500);
		}
	});
});