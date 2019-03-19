import hashlib
import random
import time
from urllib.parse import parse_qs

from django.core.cache import cache
from django.http import JsonResponse
from django.shortcuts import render, redirect

# Create your views here.
from django.views.decorators.csrf import csrf_exempt

from app.alipay import alipay
from app.models import Wheel, Goods, User, Cart, OrderGoods, Order


def index(request):
    wheels = Wheel.objects.all()
    goods = Goods.objects.all()
    token = request.session.get('token')
    userid = cache.get(token)

    response_data = {
        'user': None,
        'wheels': wheels,
        'goods': goods
    }

    if userid:
        user = User.objects.get(pk=userid)
        response_data['user'] = user
    # print(wheels)

    return render(request,'index.html',context=response_data)






def login(request):
    if request.method == 'GET':
        return render(request, 'login.html')
    elif request.method == 'POST':
        email = request.POST.get('email')
        password = request.POST.get('password')

        # 重定向位置
        # back = request.COOKIES.get('back')

        users = User.objects.filter(email=email)
        if users.exists():  # 存在
            user = users.first()
            if user.password == generate_password(password):  # 验证通过
                # 更新token
                token = generate_token()

                # 状态保持

                cache.set(token, user.id, 60 * 60 * 24 * 3)

                # 传递客户端
                request.session['token'] = token

                # 根据back
        #         if back == 'mine':
        #             return redirect('axf:mine')
        #         else:
        #             return redirect('axf:marketbase')
        #     else:  # 密码错误
        #         return render(request, 'login.html', context={'ps_err': '密码错误'})
        # else:  # 不存在
        #     return render(request, 'login.html', context={'user_err': '用户不存在'})
            return redirect('tgw:index')


def generate_password(param):
    md5 = hashlib.md5()
    md5.update(param.encode('utf-8'))
    return md5.hexdigest()


def generate_token():
    temp = str(time.time()) + str(random.random())
    md5 = hashlib.md5()
    md5.update(temp.encode('utf-8'))
    return md5.hexdigest()


def register(request):
    if request.method == 'GET':
        return render(request, 'register.html')
    elif request.method == 'POST':
        # 获取数据
        email = request.POST.get('email')
        name = request.POST.get('name')
        passoword = generate_password(request.POST.get('password'))

        # 存入数据库
        user = User()
        user.email = email
        user.password = passoword
        user.name = name
        user.save()

        # 状态保持
        token = generate_token()
        # key-value  >>  token:userid
        cache.set(token, user.id, 60 * 60 * 24 * 3)

        request.session['token'] = token

        return redirect('tgw:index')


def checkemail(request):
    email = request.GET.get('email')

    # 去数据库中查找
    users = User.objects.filter(email=email)
    if users.exists():  # 账号被占用
        response_data = {
            'status': 0,  # 1可用， 0不可用
            'msg': '账号被占用!'
        }
    else:  # 账号可用
        response_data = {
            'status': 1,  # 1可用， 0不可用
            'msg': '账号可用!'
        }

    # 返回JSON数据
    return JsonResponse(response_data)

def logout(request):
    request.session.flush()

    return redirect('tgw:index')


def goods(request,a):
    good = Goods.objects.filter(pk=a).first()

    token = request.session.get('token')
    userid = cache.get(token)
    if userid:  # 有登录才显示
        user = User.objects.get(pk=userid)




    return render(request,'details.html',context={'good':good,'user':user})


def cart(request):
    token = request.session.get('token')
    userid = cache.get(token)
    if userid:  # 有登录才显示
        user = User.objects.get(pk=userid)
        carts = user.cart_set.filter(number__gt=0)

        print(carts)



        return render(request, 'cart.html', context={'carts': carts,'user':user})
    else:  # 未登录不显示
        return render(request, 'login.html')


def addcart(request):

    token = request.session.get('token')

    # 响应数据
    response_data = {}

    if token:
        userid = cache.get(token)

        if userid:  # 已经登录
            user = User.objects.get(pk=userid)
            goodsid = request.GET.get('goodsid')
            goods = Goods.objects.get(pk=goodsid)
            number=request.GET.get('number')
            print(number)
            # 商品不存在: 添加新记录
            # 商品存在: 修改number
            carts = Cart.objects.filter(user=user).filter(goods=goods)
            cart = Cart()
            cart.user = user
            cart.goods = goods
            cart.number = number
            cart.save()

            response_data = '添加 {} 购物车成功: {}'.format(cart.goods,cart.number)

            return JsonResponse(response_data)


def changecartselect(request):
    token = request.session.get('token')
    userid = cache.get(token)
    user = User.objects.get(pk=userid)
    goodsid = request.GET.get('goodsid')
    goods=Goods.objects.get(pk=goodsid)
    input = request.GET.get('input')
    cart = Cart.objects.filter(user=user).filter(goods=goods)

    cart=cart.first()


    print(cart.id)

    if input=='true':
        cart.isselect=1
    else:
        cart.isselect=0



    cart.save()

    response_data = {

        'status': 1,

    }

    return JsonResponse(response_data)


def generate_identifier():
    temp = str(time.time()) + str(random.randrange(1000, 10000))
    return temp


def generateorder(request):
    token = request.session.get('token')
    userid = cache.get(token)
    user = User.objects.get(pk=userid)

    # 订单
    order = Order()
    order.user = user
    order.identifier = generate_identifier()
    order.save()

    # 订单商品(购物车中选中)
    carts = user.cart_set.filter(isselect=True)
    for cart in carts:
        orderGoods = OrderGoods()
        orderGoods.order = order
        orderGoods.goods = cart.goods
        orderGoods.number = cart.number
        orderGoods.save()


        cart.delete()


    return render(request, 'orderdetail.html', context={'order': order})
def orderlist(request):
    token = request.session.get('token')
    userid = cache.get(token)
    user = User.objects.get(pk=userid)

    orders = user.order_set.all()

    # status_list = ['未付款', '待发货', '待收货', '待评价', '已评价']

    return render(request, 'orderlist.html', context={'orders':orders})


def orderdetail(request, identifier):
    order = Order.objects.filter(identifier=identifier).first()

    return render(request, 'orderdetail.html', context={'order': order})



def returnurl(request):
    return redirect('tgw:index')


# 支付宝异步回调是post请求
@csrf_exempt
def appnotifyurl(request):
    if request.method == 'POST':

        body_str = request.body.decode('utf-8')


        post_data = parse_qs(body_str)


        post_dic = {}
        for k,v in post_data.items():
            post_dic[k] = v[0]

        out_trade_no = post_dic['out_trade_no']


        Order.objects.filter(identifier=out_trade_no).update(status=1)


    return JsonResponse({'msg':'success'})


def pay(request):

    orderid = request.GET.get('orderid')
    order = Order.objects.get(pk=orderid)
    print(order)
    sum = 0
    for orderGoods in order.ordergoods_set.all():
        sum += int(orderGoods.goods.price) * int(orderGoods.number)

    data = alipay.direct_pay(
        subject='MackBookPro [256G 8G 灰色]',
        out_trade_no=order.identifier,
        total_amount=str(sum),
        return_url='http://47.112.199.164/tgw/returnurl/'
    )


    alipay_url = 'https://openapi.alipaydev.com/gateway.do?{data}'.format(data=data)

    response_data = {
        'msg': '调用支付接口',
        'alipayurl': alipay_url,
        'status': 1
    }

    return JsonResponse(response_data)