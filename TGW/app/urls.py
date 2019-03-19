from django.conf.urls import url

from app import views

urlpatterns=[
    url(r'^index/$',views.index,name='index'),

    url(r'^login/$', views.login, name='login'),  # 登录
    url(r'^logout/$', views.logout, name='logout'),  # 退出
    url(r'^register/$', views.register, name='register'),  # 登录
    url(r'^checkemail/$', views.checkemail, name='checkemail'),

    url(r'^goods/(\d+)/$',views.goods,name='goods'),

    url(r'^cart/$',views.cart,name='cart'),



    url(r'^addcart/$',views.addcart,name='addcart'),


url(r'^changecartselect/$', views.changecartselect, name='changecartselect'),
url(r'^generateorder/$',views.generateorder,name='generateorder'),
url(r'orderlist/$', views.orderlist, name='orderlist'),
url(r'^orderdetail/(?P<identifier>[\d.]+)/$', views.orderdetail, name='orderdetail'),

    url(r'^returnurl/$', views.returnurl, name='returnurl'),  # 支付成功后，客户端的显示
    url(r'^appnotifyurl/$', views.appnotifyurl, name='appnotifyurl'),  # 支付成功后，订单的处理
    url(r'^pay/$', views.pay, name='pay'),  # 支付
]