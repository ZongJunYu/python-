$(function(){
				//初始化
				// $('.input-text').val('1');
                number=1

				//加
				$('.increase').click(function(){
					$(this).prev().val(parseInt($(this).prev().val())+1);
					number=$(this).prev().val()
					// console.log($(this).prev().val())
				});



				//减
				$('.decrease').click(function(){
					$(this).prev().prev().val(parseInt($(this).prev().prev().val())-1);
					number=$(this).prev().prev().val()
					if( $(this).prev().prev().val() <= 1 ){
						$('.input-text').val('1');
						number=$('.input-text').val()
					}
				});



				$('.addcart').click(function () {

				    console.log(777)
                    console.log(number)
                    request_data = {
				     'goodsid': $(this).attr('data-goodsid'),                                          'number':number
        }
            console.log()
        $.get('/tgw/addcart/', request_data, function (response) {
            console.log(response)

        })
    })



})
