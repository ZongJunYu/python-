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