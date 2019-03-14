// //轮播图
// 	$(function(){
// 		var arr = [];
// 		$.get("../json/lunbotu.json", function(data){
// 			ar = data;
// 			for (var i=0; i<arr.length; i++) {
// 				var obj = arr[i];
// 				var li = $("<li></li>").appendTo("#full-screen-slides");
// 				$("<img src="+ obj.imgsrc +">").appendTo(li);
// 				var li = $("<li></li>").appendTo("#full-screen-slides-pagination");
// 			}
// 			lunbo();
// 		})
// 		//函数
// 		function lunbo(){
// 			var _ul1 = $("#full-screen-slides");
// 			var _ul2 = $("#full-screen-slides-pagination");
// 			var _li1 = $("#full-screen-slides li");
// 			var _li2 = $("#full-screen-slides-pagination li");
// 			//初始化显示第一张图
// 			_li1.eq(0).show().siblings().hide();
//
// 			//图片总数量
// 			var size = $(".full-screen-slides li").size(); //4
//
// 			//自动轮播
// 			var i = 0; //记录图片下标
// 			var timer = setInterval(function(){
// 				i++;
// 				move();
// 			}, 2000);
//
// 			//li2上面的按钮
// 			_li2.hover(function(){
// 				var index = $(this).index();
// 				//console.log(index);
// 				i = index;
// 				move();
// 			})
//
// 			//移动的函数
// 			function move(){
//
// 				//如果i超出了图片总数量
// 				if(i<0){
// 					i=size-1;
// 				}
// 				if (i == size) {
// 					i = 0; //即将移动到2张图
// 				}
//
// 				//透明度切换到第i张图
// 				_li1.eq(i).stop().fadeIn().siblings().stop().fadeOut();
//
// 				//改变ul2的按钮状态
// 				_li2.eq(i).removeClass().addClass("full-screen-active").siblings().removeClass("full-screen-active");
//
// 			}
// 			//上一页
// 			$(".prev-page").click(function(){
// 				i--;
// 				move();
// 			})
// 			//下一页
// 			$("移入box, 移出box
// 			$(".home-focus-layout").hover(function(){
// 				$(".prev-page").fadeIn();.next-page").click(function(){
// // 				i++;
// // 				move();
// // 			})
// // 			//
// 				$(".next-page").fadeIn();
// 				//移入, 关闭定时器
// 				clearInterval(timer);
// 			},
// 			function(){
// 				//移出, 重新开启定时器
// 				$(".prev-page").fadeOut();
// 				$(".next-page").fadeOut();
// 				timer = setInterval(function(){
// 					i++;
// 					move();
// 				}, 2000);
// 			})
// 		}
// 	})


$(function () {
    // 恢复盒子大小
    $('.home').width(innerWidth)

    var topSwiper = new Swiper('#topSwiper', {
        pagination: '.swiper-pagination',
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        autoplay: 3000,
        effect: 'coverflow',
    });

})

/////////////////////////////////商品列表//////////////
	$(function(){
		//全局变量， 用来保存获取到json中的所有商品数据
		var arr = [];
		//先获取数据并创建节点，显示数据
		$.get("../json/productList-1.json", function(data){
			console.log(data);
			arr = data;	
			//创建li节点
			$( "<a href=" + "'#'" + "class='color1'" + ">" + "<img src=" + arr[0].imgsrc + ">" + "</a>").appendTo(".w390");
			$( "<a href=" + "'#'" + "class='color2'" + ">" + "<img src=" + arr[1].imgsrc + ">" + "</a>").appendTo(".w390");
			$( "<a href=" + "'#'" + "class='color3'" + ">" + "<img src=" + arr[2].imgsrc + ">" + "</a>").appendTo(".w480");
			$( "<a href=" + "'#'" + "class='color4'" + ">" + "<img src=" + arr[3].imgsrc + ">" + "</a>").appendTo(".w480");
			$( "<a href=" + "'#'" + "class='color5'" + ">" + "<img src=" + arr[4].imgsrc + ">" + "</a>").appendTo(".w480");
			$( "<a href=" + "'#'" + "class='color6'" + ">" + "<img src=" + arr[5].imgsrc + ">" + "</a>").appendTo(".w480");
			$( "<a href=" + "'#'" + "class='color7'" + ">" + "<img src=" + arr[6].imgsrc + ">" + "</a>").appendTo(".w320");
			$( "<a href=" + "'#'" + "class='color8'" + ">" + "<img src=" + arr[7].imgsrc + ">" + "</a>").appendTo(".w320");
			
		})
		
//--------------------动画
		$("#RealBargains").on("mouseover", "img", function(){
			$(this).stop(true).animate({"margin-left":-10},500);
		})
		$("#RealBargains").on("mouseleave", "img", function(){
			$(this).stop(true).animate({"margin-left":10},500);
		})
		
//---------------------点击商品进入详情
		$("#RealBargains").on("click", "a", function(){
			//console.log("click");
			var index = $(this).index("#RealBargains a"); 
			var obj = arr[index];
			//console.log(obj.id);
			//进入详情页， 且将当前点击的商品的id传入
			location.href = "details.html?id=" + obj.id;
		})
		
	})
	//////////////////////////////////////////////////////////
//---------------------今日优惠
	$(function(){
		var arr = [];
		$.get("../json/productList-2.json", function(data){
			//console.log(data);
			arr = data;			//创建li节点
			for(var i=0; i<arr.length; i++){
				var obj=arr[i];
				var li = $("<li></li>").appendTo("#recommend-list");
				$("<img src="+ obj.imgsrc +">").appendTo(li);
			}
		})
	})
	/////////////////////////////////////////////
//------------------------油粮杂食
	$(function(){
		var arr = [];
		$.get("../json/productList-4.json", function(data){
			console.log(data);
			arr = data;	
			
			//创建节点
			//右侧大图
			
			$( "<a href=" + "'#'" + ">" + 
				"<img src=" + arr[8].imgsrc + ">" + 
				"</a>").appendTo("#right-side");
				
			//ul	
			for(var k=0; k<8; k++){
				
				var obj=arr[k];
				
				var list44= $("<li></li>").appendTo("#productList4");
				$("<div class='addcartlist'><a href='javascript:;'>加入购物车</a></div>").appendTo(list44)
				var list4= $("<dl></dl>").appendTo(list44);
				$("<dd class=" + " 'goods-thumb' " + ">" + 
					"<a href=" + " '#' " + ">" + "<img src=" + obj.imgsrc + ">" + "</a>" +
					"</dd>" ).appendTo(list4);
					
				$("<dt class=" + " 'goods-name' " + ">" + 
					"<a href=" + " '#' " + ">" + obj.title + "</a>" +
					"</dt>" ).appendTo(list4);
					
				$("<dd class=" + " 'goods-price' " + ">" + 
					"<em>" + obj.unit + obj.price + "</em>" +
					"<span class=" + " 'original' " + ">" + obj.unit + obj.original + "</span>" +
					"</dd>" ).appendTo(list4);
			}
		    //第三张中图
		    $( "<div class=" + " 'medium-pic' " +">" + 
		    	"<a href=" + "'#'" + ">" + "<img src=" + arr[9].imgsrc + ">" + "</a>" +
		    	"</div>" ).insertBefore("#productList4 li:nth-child(3)");
		})
//-----------点击进入详情页
		$(".middle-goods-list").on("click", "img", function(){
			//console.log("click");
			var index = $(this).index(".middle-goods-list img");
			var obj = arr[index];
			//console.log(obj.id);
			//进入详情页， 且将当前点击的商品的id传入
			location.href = "details.html?id=" + obj.id;
		})
		
//------------------------点击加入购物车
		
		
		//点击飞入indexadd
		var offset = $("#end").offset();  //结束的地方的元素
		
		$("#productList4").on("click", ".addcartlist", function(event){
			
		    //点击飞入
			//console.log($(this).parent().find('img').attr('src'));
			var img = $(this).parent().find('img').attr('src');
			var flyer = $('<img class="u-flyer" src="'+img+'">');
			flyer.fly({
				//开始位置
				start: {
					left: event.clientX,
					top: event.clientY
				},
				//结束位置
				end: {
					left: offset.left,
					top: offset.top,
					width: 0,
					height: 0
				},
				//结束后
				onEnd: function(){
					console.log("结束");
					$("#cartmsg").show().animate({width: '250px'}, 200).fadeOut(1000);
					flyer.remove();
				}
			});
			
			//加入购物车
			var index = $(this).index("#productList4 .addcartlist");
			
			var objmsg = arr[index]; //所点击的商品
			
			var obj={
				id: objmsg.id,
				title: objmsg.title,
				imgsrc: objmsg.imgsrc,
				price: objmsg.price,
				shopname: objmsg.shopname
			};
			console.log(obj);
			//将当前点击的商品数据加入购物车（cookie）
			var arr2 = $.cookie("cart") ? JSON.parse($.cookie("cart")) : [];
			
			//判断原来的购物车中是否有相同商品
			var isExist = false;
			for (var i=0; i<arr2.length; i++) {
				if (arr2[i].id == obj.id) {
					arr2[i].num++;
					isExist = true;
					break;
				}
			}
			if (isExist ==  false) {
				obj.num = 1;
				obj.checked = true; //是否选中， 默认选中 
				arr2.push(obj);
			}
			//将arr2添加到cookie中
			$.cookie("cart", JSON.stringify(arr2), {expires:30, path:"/"});
			console.log( $.cookie("cart") );
		})
	})

//返回顶部
	$(function() {
		$("#gotop").hide();
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $("#gotop").fadeIn(1000);
                } else {
                    $("#gotop").fadeOut(1000);
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            $("#gotop").click(function() {
                $('body,html').animate({
                    scrollTop: 0
                },
                1000);
                return false;
            });
        });

	})