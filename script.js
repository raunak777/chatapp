/**
 * 
 */

 $(document).ready(function(){

 	$('#action_menu_btn').click(function(){
 		$('.action_menu').toggle();
 	});

 	$("#submitbtn").on("click",()=>{
 		var name = $("#name").val();
 		var email = $("#email").val();
 		var number = $("#number").val();
 		var password = $("#password").val();
 		var cnfpassword = $("#cnfpassword").val();
 		$.ajax({
 			type: "POST",
 			url: "medium.php",
 			data:{"action": "reg", name, email, number, password, cnfpassword},
 			success: data => {
 				alert(data);
 				location.replace('login.php');
 			}
 		});
 	});

 	$("#loginbtn").on("click",()=>{
 		var email = $("#emailid").val();
 		var password =$("#passwordd").val();
 		$.ajax({
 			type: "POST",
 			url: "medium.php",
 			data:{"action":"login", email, password},
 			success: data => {
 				if (data==0) {
 					alert("Email not registered");
 				}
 				else if(data==1)
 				{
 					alert("Password wrong");
 				}
 				else if(data==2)
 				{
 					alert("Login Successfull");
 					location.replace("chatbox.php");
 				}
 				else{
 					alert(data);
 				}
 			}
 		});
 	});

 	$('#contact').on('click','.active',function(){
 		var currentid= $(this).data("cid");
 		alert(currentid);
 		$.ajax({
 			type:"POST",
 			url: "medium.php",
 			data: {"action":"chat",currentid},
 			success: data=>{
 				// alert(data);
 			}
 		});
 	});
 });