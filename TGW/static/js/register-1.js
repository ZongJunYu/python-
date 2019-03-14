 
$(function(){
	
//	table切换
	$(".tabs-nav li").click(function(){
		
		$("#nextreg").hide();
		
		$(this).addClass("tabulous_active").siblings().removeClass("tabulous_active");
		
		var index = $(this).index();
		$(".tabs-content").eq(index).addClass("show").siblings().removeClass("show");
	})

//	验证账号注册
	var yanzen1 = false;//用户名
	var yanzen2 = false;//密码
	var yanzen3 = false;//确认密码
	var yanzen4 = false;//邮箱
	var yanzen5 = false;//验证码
	
	//	用户名验
	$("#username").blur(function(){
		
		$("<div class='user-error usero'></div> ").appendTo("#tabs-pc");

		var user=/^[\d\w\u4e00-\u9fa5]{3,15}$/;
		var userpure=/^(?:[0-9]+)$/;
		
		//要求填写
		if(user.test($("#username").val())){
			$(".usero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
			//纯数字
		    if(userpure.test($("#username").val())){
		    	$(".usero").html("<img src='../images/error.png'>可包含“_”、“-”，不能是纯数字").css("background", "#FFF5D9");
			}
		    else{
		    	yanzen1 = true;
		    }
		}
	    //为空
		else if($("#username").val()==""){
			$(".usero").html("<img src='../images/error.png'>用户名不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".usero").html("<img src='../images/error.png'>用户名必须在3-15个字符之间").css("background", "#FFF5D9");
		}
	})
	
	
	//	密码验证
	$("#pad").blur(function(){
		
		$("<div class='user-error padero'></div> ").appendTo("#tabs-pc");;
		
		if($("#pad").val().length>6 && $("#pad").val().length<21){
			yanzen2 = true;
			$(".padero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else if($("#pad").val()==""){
			$(".padero").html("<img src='../images/error.png'>密码不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".padero").html("<img src='../images/error.png'>密码长度应在6-20个字符之间").css("background", "#FFF5D9");
		}
	})
	
	//确认密码
	$("#confirmpas").blur(function(){
		
		$("<div class='user-error anewero'></div> ").appendTo("#tabs-pc");;
		
		if( $("#confirmpas").val()==$("#pad").val()){
			yanzen3 = true;
			$(".anewero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else{
			$(".anewero").html("<img src='../images/error.png'>两次输入的密码不一致").css("background", "#FFF5D9");
		}
	})
	
	//邮箱验证

	$("#mailbox").blur(function(){
		
		$("<div class='user-error mailero'></div> ").appendTo("#tabs-pc");
		
		var pattern = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
		
		if(pattern.test($("#mailbox").val())){
			yanzen4 = true;
			$(".mailero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
		}
		else if($("#mailbox").val()==""){
			$(".mailero").html("<img src='../images/error.png'>邮箱不能为空").css("background", "#FFF5D9");
		}
		else{
			$(".mailero").html("<img src='../images/error.png'>这不是一个有效的电子邮箱").css("background", "#FFF5D9");
		}
	})
	
	
	//验证码验证
	var verifyCode = new GVerify("v_container");
	
	$("#code_input").blur(function(){
		
		$("<div class='user-error codeero'></div> ").appendTo("#tabs-pc");
		var res = verifyCode.validate( $("#code_input").val() );
		if(res){
			
			yanzen5 = true;
			
		   $(".codeero").html("<img src='../images/true.png'>").css("background", "#FFFFFF");
        }
        else {
           $(".codeero").html("<img src='../images/error-1.png'>").css("background", "#FFFFFF");
        }
	})
	
	//点击注册
	$("#submit").click(function(){
		
		if( yanzen1==true && yanzen2==true && yanzen3==true && yanzen4==true || yanzen5 == true){
			
            //ajax
            var xhr = new XMLHttpRequest();
            xhr.open("post", "http://127.0.0.1/hangowa/php/register.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var str = "username="+ $("#username").val() + "&pwd=" + $("#pad").val() + "&mailbox=" + $("#mailbox").val();
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
//						alert(obj.msg);
						$("<div class='loginmsg'>" + obj.msg　+ "<button class='loginfali'>确定</button></div>").appendTo(".left");
						$(".left").on("click",".loginfali",function(){
							$(".loginmsg").hide();
						})
					}
                    
                }
                
            }
        }
			
	})
})


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		











