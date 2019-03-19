$(function () {

		var sum = 0
		// console.log(sum)
		//小计
		$('.shop-list').each(function () {

			var $content=$(this)

			var price = $content.find('.goods-price').attr('data-price')
			// console.log(price)
			var num = $content.find('.text').attr('data-num')
			// console.log(num)
			sum = num * price
			// console.log(sum)
			$(this).find('.goods-subtotal').html(sum)
		})
		//单选
	$('.shop-list .td-border-left input').click(function () {
		var input=$(this).prop('checked')
		console.log(input)
		var goodsid=$(this).attr('data-goods')
		console.log(goodsid)
		request_data = {
            'goodsid':goodsid,
			'input':input
        }
         $.get('/tgw/changecartselect/', request_data, function (response) {
			 console.log(response)
		if (response.status == 1) {
			if ($(this).attr('checkbox')) {
				$(this).attr('checkbox',false)
			} else {
				$(this).attr('checkbox',true)
			}
			toal()
			}
         })
	})


	//总计
	function toal() {
		var nums=0
		$('.shop-list').each(function () {
		var $content=$(this)
		console.log(1222)
		if($(this).find('input').prop('checked')){
			var price = $content.find('.goods-price').attr('data-price')
			// console.log(price)
			console.log(2222)
			var num = $content.find('.text').attr('data-num')
			nums+=num*price
			console.log(nums)
		}
	})
	$('#total').html(nums)
	}


})