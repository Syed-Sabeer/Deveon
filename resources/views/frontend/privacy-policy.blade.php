@extends('layouts.frontend.master')

@section('css')
<style>
.privacy-policy-section {
    padding: 80px 0;
    background-color: #f8f9fa;
}

.privacy-content {
    background: white;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.privacy-content h1 {
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 30px;
    text-align: center;
    border-bottom: 3px solid #007bff;
    padding-bottom: 20px;
}

.privacy-content h2 {
    color: #34495e;
    font-size: 1.8rem;
    margin-top: 40px;
    margin-bottom: 20px;
    border-left: 4px solid #007bff;
    padding-left: 15px;
}

.privacy-content h3 {
    color: #2c3e50;
    font-size: 1.4rem;
    margin-top: 30px;
    margin-bottom: 15px;
}

.privacy-content p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: justify;
}

.privacy-content ul {
    margin-bottom: 20px;
    padding-left: 30px;
}

.privacy-content li {
    color: #555;
    line-height: 1.8;
    margin-bottom: 10px;
}

.contact-info {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #28a745;
    margin: 20px 0;
}

.last-updated {
    text-align: center;
    color: #6c757d;
    font-style: italic;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #dee2e6;
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Privacy Policy</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</div>

<!-- Privacy Policy Section Start -->
<section class="privacy-policy-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="privacy-content">
                    <h1>Privacy Policy</h1>
                    
                    <p><strong>Effective Date:</strong> {{ date('F d, Y') }}</p>
                    <p><strong>Last Updated:</strong> {{ date('F d, Y') }}</p>

                    <p>Deveon Dynamics ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

                    <h2>1. Information We Collect</h2>
                    
                    <h3>1.1 Personal Information</h3>
                    <p>When you contact us through our contact form, we may collect the following information:</p>
                    <ul>
                        <li>Full name</li>
                        <li>Email address</li>
                        <li>Phone number (optional)</li>
                        <li>Subject of inquiry</li>
                        <li>Message content</li>
                        <li>Consent for text messaging communications</li>
                    </ul>

                    <h3>1.2 Automatically Collected Information</h3>
                    <p>We may automatically collect certain information about your device and usage patterns, including:</p>
                    <ul>
                        <li>IP address</li>
                        <li>Browser type and version</li>
                        <li>Operating system</li>
                        <li>Pages visited and time spent on our website</li>
                        <li>Referring website</li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use the information we collect for the following purposes:</p>
                    <ul>
                        <li>To respond to your inquiries and provide customer support</li>
                        <li>To send you text messages about our services (with your consent)</li>
                        <li>To improve our website and services</li>
                        <li>To comply with legal obligations</li>
                        <li>To prevent fraud and ensure security</li>
                    </ul>

                    <h2>3. Text Messaging Communications</h2>
                    <p>By providing your phone number and checking the consent checkbox on our contact form, you agree to receive text messages from Deveon Dynamics about our services. These messages may include:</p>
                    <ul>
                        <li>Service updates and notifications</li>
                        <li>Response to your inquiries</li>
                        <li>Marketing communications about our services</li>
                        <li>Important announcements</li>
                    </ul>

                    <div class="contact-info">
                        <h3>Opt-Out Instructions</h3>
                        <p><strong>To stop receiving text messages:</strong> Reply "STOP" to any text message you receive from us. You may also contact us directly at <a href="mailto:info@deveondynamics.com">info@deveondynamics.com</a> to opt out.</p>
                        <p><strong>Message and data rates may apply</strong> as determined by your mobile carrier. We are not responsible for any charges incurred.</p>
                    </div>

                    <h2>4. Information Sharing and Disclosure</h2>
                    <p>We do not sell, trade, or otherwise transfer your personal information to third parties, except in the following circumstances:</p>
                    <ul>
                        <li>With your explicit consent</li>
                        <li>To comply with legal obligations</li>
                        <li>To protect our rights and prevent fraud</li>
                        <li>With service providers who assist us in operating our website (under strict confidentiality agreements)</li>
                    </ul>

                    <h2>5. Data Security</h2>
                    <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure.</p>

                    <h2>6. Data Retention</h2>
                    <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p>

                    <h2>7. Your Rights</h2>
                    <p>Depending on your location, you may have the following rights regarding your personal information:</p>
                    <ul>
                        <li>Right to access your personal information</li>
                        <li>Right to correct inaccurate information</li>
                        <li>Right to delete your personal information</li>
                        <li>Right to restrict processing of your information</li>
                        <li>Right to data portability</li>
                        <li>Right to object to processing</li>
                    </ul>

                    <h2>8. Cookies and Tracking Technologies</h2>
                    <p>We may use cookies and similar tracking technologies to enhance your experience on our website. You can control cookie settings through your browser preferences.</p>

                    <h2>9. Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review their privacy policies.</p>

                    <h2>10. Children's Privacy</h2>
                    <p>Our services are not directed to children under 13 years of age. We do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete such information.</p>

                    <h2>11. Changes to This Privacy Policy</h2>
                    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. Your continued use of our services after any modifications constitutes acceptance of the updated Privacy Policy.</p>

                    <h2>12. Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us:</p>
                    <div class="contact-info">
                        <p><strong>Deveon Dynamics</strong></p>
                        <p><strong>Email:</strong> <a href="mailto:info@deveondynamics.com">info@deveondynamics.com</a></p>
                        <p><strong>Phone:</strong> <a href="tel:+2086660112">+208-666-0112</a></p>
                        <p><strong>Address:</strong> 2464 Royal Ln. Mesa, New Jersey 45463</p>
                    </div>

                    <div class="last-updated">
                        <p>This Privacy Policy was last updated on {{ date('F d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection