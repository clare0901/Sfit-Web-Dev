from django.http import HttpResponseRedirect
from django.shortcuts import render

# Create your views here.
from django.urls import reverse
from .models import ContactForm


# main page
def about_info(request):
    return render(request, 'my_website/about.html')


# Portfolio Page view
def portfolio(request):
    return render(request, 'my_website/portfolio.html')


def contact_form(request):
    return render(request, 'my_website/contact.html')


# Contact Form Data Submit form view
def contact_form_submit(request):
    if request.method == "POST":
        full_name = request.POST['full_name']
        email_id = request.POST['email_id']
        contact_no = request.POST['contact_number']
        message = request.POST['message']
        ContactForm.objects.create(full_name=full_name,
                                   email_id=email_id,
                                   contact_no=contact_no,
                                   message=message
                                   )
    return HttpResponseRedirect(reverse('my_website:contact_form'))




def all_data(request):
    contact_data = ContactForm.objects.all()
    data = {'contact_data': contact_data}
    return render(request, 'my_website/all_data.html', data)