from django.db import models

# Create your models here.


class ContactForm(models.Model):

    full_name = models.CharField(max_length=200, blank=True)

    email_id = models.CharField(max_length=200, blank=True)

    contact_no = models.CharField(max_length=200, blank=True)

    message = models.TextField(max_length=200, blank=True)

    created_at = models.DateTimeField(auto_now_add=True)


    def __str__(self):
        return str(self.pk)


    class Meta:
        verbose_name_plural = "Contact Form Data"
        verbose_name = "Contact Form"

