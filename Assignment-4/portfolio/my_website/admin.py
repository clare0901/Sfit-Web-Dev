from django.contrib import admin

# Register your models here.

from .models import ContactForm


class ContactFormAdmin(admin.ModelAdmin):
    search_fields = ['pk', 'full_name']
    list_filter = ['full_name']
    list_display = [
        'pk',
        'created_at',
        'full_name',
        'email_id',
        'contact_no',
        'message'
    ]
    list_editable = ['full_name']


admin.site.register(ContactForm, ContactFormAdmin)
