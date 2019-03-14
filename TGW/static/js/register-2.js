//	手机注册
$(function(){
	
	var yanzen1= false;//手机号
	var yanzen2 = false;//手验证
	var yanzen3 = false;//短信验证码
	var yanzen4 = false;//用户名
	var yanzen5 = false;//密码
	var yanzen6 = false;//确认密码
	var yanzen7 = false;//邮箱
	
	//手机号码验证
	$("#phonenumber").blur(function(){
		$("<div class='user-error phoneero'></div> ").appendTo("#tabs-phone");
		
		var phonereg=/^1(3|4|5|7|8)\d{9}$/;
		 if(!phonereg.test($("#phonenumber").val())){
		 	$(".phoneero").html("<img src='../images/error.png'>输入正确的手机号码").css("background", "#FFF5D9");
		 }
		 else{
		 	yanzen1=true;
		 	
		 	$(".phoneero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		 }
	})
	
	//验证码验证
	$.idcode.setCode();
	
	$("#Txtidcode").blur(function(){
		$("<div class='user-error dcodeero'></div> ").appendTo("#tabs-phone");
		 var IsBy = $.idcode.validateCode();  //调用返回值，返回值结果为true或者false
	       	
        if(IsBy){
        	
        	yanzen2=true;
        	
           $(".dcodeero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
        }
        else {
           $(".dcodeero").html("<img src='../images/error-1.png'>").css("background", "#FFFFFF");
        }
	})
	
	
	//短信验证
	$("#msg").blur(function(){
		$("<div class='user-error msgero'></div> ").appendTo("#tabs-phone");
		if($("#msg").val()=="123456"){
			
			yanzen3= true;
			
			$(".msgero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else{
			$(".msgero").html("<img src='../images/error.png'>请输入123456").css("background", "#FFF5D9");
		}
	})
	
	//	用户名验证
	$("#pusername").blur(function(){
		
		$("<div class='user-error usero'></div> ").appendTo("#nextstep");

		var user=/^[\d\w\u4e00-\u9fa5]{3,15}$/;
		var userpure=/^(?:[0-9]+)$/;
		
		//要求填写
		if(user.test($("#pusername").val())){
			$(".usero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
			//纯数字
		    if(userpure.test($("#pusername").val())){
		    	$(".usero").html("<img src='../images/error.png'>可包含“_”、“-”，不能是纯数字").css("background", "#FFF5D9");
			}
		    else{
		    	yanzen4 = true;
		    }
		}
	    //为空
		else if($("#pusername").val()==""){
			$(".usero").html("<img src='../images/error.png'>用户名不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".usero").html("<img src='../images/error.png'>用户名必须在3-15个字符之间").css("background", "#FFF5D9");
		}
	})
	
	
	//	密码验证
	$("#ppad").blur(function(){
		
		$("<div class='user-error padero'></div> ").appendTo("#nextstep");;
		
		if($("#ppad").val().length>6 && $("#ppad").val().length<21){
			
			yanzen5 = true;
			$(".padero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else if($("#ppad").val()==""){
			$(".padero").html("<img src='../images/error.png'>密码不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".padero").html("<img src='../images/error.png'>密码长度应在6-20个字符之间").css("background", "#FFF5D9");
		}
	})
	
	//确认密码
	$("#pconfirmpas").blur(function(){
		
		$("<div class='user-error anewero'></div> ").appendTo("#nextstep");;
		
		if( $("#pconfirmpas").val()==$("#ppad").val()){
			
			yanzen6 = true;
			$(".anewero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else{
			$(".anewero").html("<img src='../images/error.png'>两次输入的密码不一致").css("background", "#FFF5D9");
		}
	})
	
	//邮箱验证

	$("#pmailbox").blur(function(){
		
		$("<div class='user-error mailero'></div> ").appendTo("#nextstep");
		
		var pattern = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
		
		if(pattern.test($("#pmailbox").val())){
			yanzen7 = true;
			$(".mailero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else if($("#mailbox").val()==""){
			$(".mailero").html("<img src='../images/error.png'>邮箱不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".mailero").html("<img src='../images/error.png'>这不是一个有效的电子邮箱").css("background", "#FFF5D9");
		}
	})
	
	
	//点击下一步
	$("#nextsubmit").on("click",function(event){
		if(yanzen1==true && yanzen2==true && yanzen3==true){
			$("#phonereg").removeClass("show");
			$("#nextreg").show();
		}
	})
	
	//点击立即注册
	$("#phonenext").click(function(){
		if( yanzen1==true && yanzen2==true && yanzen3==true && yanzen4==true || yanzen5==true || yanzen6==true ||yanzen7==true){
			if( $("#check").attr("checked")){
				//ajax
		        var xhr = new XMLHttpRequest();
		        xhr.open("post", "http://127.0.0.1/hangowa/php/register.php", true);
		        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		        var str = "username="+ $("#pusername").val() + "&pwd=" + $("#ppad").val() + "&phonenumber=" + $("#phonenumber").val();
		        xhr.send(str);
		        xhr.onreadystatechange = function () {
		            if (xhr.readyState==4 && xhr.status==200) {
		                var obj=JSON.parse(xhr.response);
							
						if(obj.status==1){
							//alert(obj.msg);
							$("<div class='loginmsg'>" + obj.msg　+ "<button class='loginfali'>确定</button></div>").appendTo(".left");
							$(".left").on("click",".loginfali",function(){
								$(".loginmsg").hide();
							})
							location.href="login.html";
						}
						else{
							
							$("<div class='loginmsg'>" + obj.msg　+ "<button class='loginfali'>确定</button></div>").appendTo(".left");
							$(".left").on("click",".loginfali",function(){
								$(".loginmsg").hide();
							})
						}
		                
		            }
		            
		        }
			}
		}
		
	})
})