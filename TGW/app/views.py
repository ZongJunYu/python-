from django.shortcuts import render

# Create your views here.
from app.models import Wheel


def index(request):
    wheels=Wheel.objects.all()

    response_dir={
        'wheels':wheels
    }
    print(wheels)

    return render(request,'index.html',context=response_dir)