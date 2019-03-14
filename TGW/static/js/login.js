//id="username"
//id="pad"
//id="loginsub"

$(function(){
	//点击注册
	$("#loginsub").click(function(){
		
        //ajax
        var xhr = new XMLHttpRequest();
        xhr.open("post", "http://127.0.0.1/hangowa/php/login.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var str = "username="+ $("#username").val() + "&pwd=" + $("#pad").val();
        console.log(str);
        xhr.send(str);
        xhr.onreadystatechange = function () {
            if (xhr.readyState==4 && xhr.status==200) {
                var obj=JSON.parse(xhr.response);
					
				if(obj.status==1){
					alert(obj.msg);
					location.href="../html/index.html";
				}
				else{
					$("<div class='loginmsg'>登录失败<button class='loginfali'>确定</button></div>").appendTo(".tabs-content");
					$(".tabs-content").on("click",".loginfali",function(){
						$(".loginmsg").hide();
					})
				}
                
            }
            
        }
	  
			
	})
})