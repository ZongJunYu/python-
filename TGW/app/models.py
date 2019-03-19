from django.db import models

class BaseModel(models.Model):
    img = models.CharField(max_length=100)
    name = models.CharField(max_length=100)
    trackid = models.CharField(max_length=10)

    class Meta:
        abstract = True
class Wheel(BaseModel):
    class Meta:
        db_table = 'axf_wheel'


class Goods(models.Model):

    img=models.CharField(max_length=100)
    name=models.CharField(max_length=100)
    price = models.CharField(max_length=10)
    marketprice = models.CharField(max_length=10)

class User(models.Model):

    # 邮箱
    email = models.CharField(max_length=40, unique=True)
    # 密码
    password = models.CharField(max_length=256)
    # 昵称
    name = models.CharField(max_length=100)
    # 头像
    img = models.CharField(max_length=40, default='axf.png')


class Cart(models.Model):

    user = models.ForeignKey(User)

    goods = models.ForeignKey(Goods)


    number=models.IntegerField()

    #是否选中
    isselect=models.BooleanField(default=True)


    isdelete=models.BooleanField(default=False)


class Order(models.Model):

    user = models.ForeignKey(User)

    createtime = models.DateTimeField(auto_now_add=True)

    updatetime = models.DateTimeField(auto_now=True)

    status = models.IntegerField(default=0)

    identifier = models.CharField(max_length=256)




class OrderGoods(models.Model):

    order = models.ForeignKey(Order)

    goods = models.ForeignKey(Goods)

    number = models.IntegerField()



