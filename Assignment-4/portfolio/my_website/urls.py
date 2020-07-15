from django.conf.urls import url
from . import views

app_name = "my_website"

urlpatterns = [


    # navbar

    # Url for portfolio view
    url(r'portfolio', views.portfolio, name='portfolio'),

    # contact
    url(r'contact_form', views.contact_form, name='contact_form'),

    # Url for Contact form submit view
    url('contact_form_submit', views.contact_form_submit, name='contact_form_submit'),

    # Url for all_data view
    url('all_data', views.all_data, name='all_data'),

    # main page
    url('', views.about_info, name='about'),

]
