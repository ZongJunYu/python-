$(function(){
	//获取从详情传过来的id
	// location.search : 参数部门， 如:?id=1002&name=lisi
	var param = location.search.substring(1);
	var pid = getParams(param, "id");
	console.log(pid);
	
	//获取json中的数据
	$.get("../../json/productList-1.json", function(data){
		var arr = data;
		
		for (var i=0; i<arr.length; i++) {
			var obj = arr[i]; //每个商品数据
			
			//找到id相同的商品后，就可以使用obj了
			if (obj.id == pid) {
				loadUI(obj);
				console.log(obj.id);
			}
		}
	})