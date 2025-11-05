@extends('layouts.frontend.master')


@section('css')
<style>

.checkbox-container {
    display: flex;
    align-items: flex-start;
    cursor: pointer;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    font-size: 14px;
    line-height: 1.5;
    user-select: none;
}in

.checkbox-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.checkbox-container:hover input ~ .checkmark {
    background-color: #f0f0f0;
    border-color: #007bff;
}

.checkbox-container input:checked ~ .checkmark {
    background-color: #007bff;
    border-color: #007bff;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkbox-container input:checked ~ .checkmark:after {
    display: block;
}

.checkbox-container .checkmark:after {
    left: 6px;
    top: 2px;
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}



.privacy-link {
    color: #007bff;
    text-decoration: underline;
    font-weight: 500;
}

.privacy-link:hover {
    color: #0056b3;
    text-decoration: none;
}

/* Error styling for unchecked checkbox */
.checkbox-container.error .checkmark {
    border-color: #dc3545;
    background-color: #f8d7da;
}

</style>
@endsection

@section('content')


        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{asset('FrontendAssets/img/breadcrumb.jpg')}}');">
            <div class="left-shape">
                <img src="{{asset('FrontendAssets/img/breadcrumb-shape.png')}}" alt="img">
            </div>
            <div class="right-shape">
                <img src="{{asset('FrontendAssets/img/breadcrumb-shape-2.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{route('home')}}">
                            Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Info Section Start -->
        <section class="contact-info-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-items text-center active">
                            <div class="icon">
                               <i class="icon-09"></i>
                            </div>
                            <div class="content">
                                <h3>Our Address</h3>
                                <p>
                                    {{$business_settings->address}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-10"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:{{$business_settings->email}}">{{$business_settings->email}}</a></h3>
                                <p>
                                    Email us anytime for anykind <br>
                                    ofquety.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-11"></i>
                            </div>
                            <div class="content">
                                <h3>Hot:<a href="tel:{{$business_settings->phone}}">{{$business_settings->phone}}</a></h3>
                                <p>
                                    Call us any kind suppor,we <br>
                                    will wait for it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section-33 fix section-padding pt-0">
            <div class="container">
                <div class="contact-wrapper-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="map-items">
                                <div class="googpemap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13431953.536479754!2d-79.74858694999999!3d34.72319649999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2f77bdf651ad614d%3A0x2592577eebf7611f!2sHorizon%20Canada%20Inc!5e0!3m2!1sen!2s!4v1757928874993!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <h2>Ready to Get Started?</h2>
                                <p>
                                    Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque rhoncus, eros in auctor ultrices,
                                </p>
                                <form action="{{route('contact.store')}}" id="contact-form" method="POST" class="contact-form-items">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <span>Full name*</span>
                                                <input type="text" name="fullname" id="fullname" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <span>Your Email*</span>
                                                <input type="email" name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <span>Phone</span>
                                                <input type="text" name="phone" id="phone" placeholder="Your Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <span>Subject *</span>
                                                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <span>Write Message*</span>
                                                <textarea name="message" id="message" placeholder="Write Message" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn" id="submit-btn">
                                                Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Section Start -->
        <section class="cta-section section-padding pb-0">
            <div class="rokect-shape float-bob-y">
                <img src="{{asset('FrontendAssets/img/rokect.png')}}" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper bg-cover" style="background-image: url('{{asset('FrontendAssets/img/cta-bg.jpg')}}');">
                    <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="{{asset('FrontendAssets/img/cta-img.png')}}" alt="img">
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Stay Connected With <br> Cutting Edge IT
                    </h2>
                    <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                        <a href="contact.html"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                </div>
            </div>
        </section>



@endsection

@section('script')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    let isSubmitting = false;
    let submissionId = null;

    // Remove any existing event listeners to prevent duplicates
    form.removeEventListener('submit', handleSubmit);

    function handleSubmit(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        console.log('Form submit event triggered, isSubmitting:', isSubmitting);

        // Prevent multiple submissions
        if (isSubmitting) {
            console.log('Already submitting, preventing duplicate');
            return false;
        }





        isSubmitting = true;
        submissionId = Date.now(); // Unique ID for this submission

        console.log('Starting submission with ID:', submissionId);

        // Disable submit button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';

        // Get form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            console.log('Response received for submission:', submissionId);
            return response.json();
        })
        .then(data => {
            console.log('Data received for submission:', submissionId, data);

            // Reset button and submission flag
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Send Message <i class="fa-solid fa-arrow-right-long"></i>';
            isSubmitting = false;

            if (data.status === 'success') {
                // Show success alert
                Swal.fire({
                    title: data.title,
                    text: data.message,
                    icon: data.icon,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                }).then(() => {
                    // Reset form
                    form.reset();
                });
            } else {
                // Show error alert
                let errorMessage = data.message;
                if (data.errors) {
                    errorMessage = Object.values(data.errors).flat().join('<br>');
                }

                Swal.fire({
                    title: data.title,
                    html: errorMessage,
                    icon: data.icon,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            }
        })
        .catch(error => {
            console.error('Error for submission:', submissionId, error);

            // Reset button and submission flag
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Send Message <i class="fa-solid fa-arrow-right-long"></i>';
            isSubmitting = false;

            Swal.fire({
                title: 'Error!',
                text: 'Something went wrong. Please try again.',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#d33'
            });
        });

        return false;
    }

    // Add the event listener
    form.addEventListener('submit', handleSubmit);
});
</script>
@endsection
