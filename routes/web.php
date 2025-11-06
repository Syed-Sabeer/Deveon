
<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminPrivacyPolicyController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminMiniServiceController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCareerController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminHeroSectionCrudController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminNewsletterController;
use App\Http\Controllers\Admin\AdminNewsbarController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminWebsiteController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminNewsletterSubmissionController;
use App\Http\Controllers\Admin\AdminShareYourMusicController;
use App\Http\Controllers\Admin\AdminContactPageController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminServicePageController;

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Common\DashboardController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\JobApplicationController;
use App\Http\Controllers\Frontend\WebsiteController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;






// Force Clear Everything Route
Route::get('/force-clear-all', function() {
    try {
        // Clear all Laravel caches
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');

        // Clear compiled files
        \Illuminate\Support\Facades\Artisan::call('clear-compiled');

        // Recache config
        \Illuminate\Support\Facades\Artisan::call('config:cache');

        // Clear OPcache if available
        if (function_exists('opcache_reset')) {
            opcache_reset();
        }

        return '<h1>✅ Everything Cleared!</h1><br>' .
               '<p>Now check your environment:</p>' .
               '<p><a href="/debug-urls">Debug URLs</a></p>' .
               '<p><a href="/">Go to Home Page</a></p>';

    } catch (Exception $e) {
        return '<h1>❌ Error</h1><p>' . $e->getMessage() . '</p>';
    }
});


Route::group(['middleware' => ['guest']], function () {

    //User Login Authentication Routes
    Route::get('admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('login-attempt', [LoginController::class, 'loginAttempt'])->name('login.attempt');
    Route::get('login', [LoginController::class, 'userlogin'])->name('user.login');

    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('registration-attempt', [RegisterController::class, 'registerAttempt'])->name('register.attempt');
Route::get('reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');



});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/privacy-policy', [WebsiteController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/our-company', [WebsiteController::class, 'ourCompany'])->name('our.company');
Route::get('/faqs', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/portfolio', [WebsiteController::class, 'portfolio'])->name('portfolio');
Route::get('/career', [WebsiteController::class, 'career'])->name('career');
Route::get('/service', [WebsiteController::class, 'service'])->name('service');
Route::get('/service/{slug}', [WebsiteController::class, 'serviceDetail'])->name('service.detail');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
Route::post('/blog/comment', [BlogController::class, 'commentStore'])->name('comment.store');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/job-application/store', [JobApplicationController::class, 'store'])->name('job.application.store');
Route::post('/newsletter/subscribe', [WebsiteController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');





Route::group(['middleware' => ['auth']], function () {
    Route::get('login-verification', [AuthController::class, 'login_verification'])->name('login.verification');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('verify-account', [AuthController::class, 'verify_account'])->name('verify.account');
    Route::post('resend-code', [AuthController::class, 'resend_code'])->name('resend.code');


    Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verification_verify'])->middleware(['signed'])->name('verification.verify');
    Route::get('email/verify', [AuthController::class, 'verification_notice'])->name('verification.notice');
    Route::post('email/verification-notification', [AuthController::class, 'verification_send'])->middleware(['throttle:2,1'])->name('verification.send');

});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // FAQ Routes
    Route::get('faq', [AdminFaqController::class, 'index'])->name('faq.index');
    Route::get('faq/add', [AdminFaqController::class, 'add'])->name('faq.add');




    Route::post('faq/store', [AdminFaqController::class, 'store'])->name('faq.store');
    Route::get('faq/{id}/edit', [AdminFaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq/{id}', [AdminFaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/{id}', [AdminFaqController::class, 'destroy'])->name('faq.destroy');
    Route::post('faq/{id}/toggle-visibility', [AdminFaqController::class, 'toggleVisibility'])->name('faq.toggleVisibility');

    // Privacy Policy Routes
    Route::get('privacy-policy', [AdminPrivacyPolicyController::class, 'index'])->name('privacy-policy.index');
    Route::get('privacy-policy/add', [AdminPrivacyPolicyController::class, 'add'])->name('privacy-policy.add');
    Route::post('privacy-policy/store', [AdminPrivacyPolicyController::class, 'store'])->name('privacy-policy.store');
    Route::get('privacy-policy/{id}/edit', [AdminPrivacyPolicyController::class, 'edit'])->name('privacy-policy.edit');
    Route::put('privacy-policy/{id}', [AdminPrivacyPolicyController::class, 'update'])->name('privacy-policy.update');
    Route::delete('privacy-policy/{id}', [AdminPrivacyPolicyController::class, 'destroy'])->name('privacy-policy.destroy');
    Route::post('privacy-policy/{id}/toggle-visibility', [AdminPrivacyPolicyController::class, 'toggleVisibility'])->name('privacy-policy.toggleVisibility');

    // Service Routes
    Route::get('service', [AdminServiceController::class, 'index'])->name('service.index');
    Route::get('service/add', [AdminServiceController::class, 'add'])->name('service.add');
    Route::post('service/store', [AdminServiceController::class, 'store'])->name('service.store');
    Route::get('service/{id}/edit', [AdminServiceController::class, 'edit'])->name('service.edit');
    Route::put('service/{id}', [AdminServiceController::class, 'update'])->name('service.update');
    Route::delete('service/{id}', [AdminServiceController::class, 'destroy'])->name('service.destroy');
    Route::post('service/{id}/toggle-visibility', [AdminServiceController::class, 'toggleVisibility'])->name('service.toggleVisibility');

    // Mini Service Routes
    Route::get('mini-service', [AdminMiniServiceController::class, 'index'])->name('mini-service.index');
    Route::get('mini-service/add', [AdminMiniServiceController::class, 'add'])->name('mini-service.add');
    Route::post('mini-service/store', [AdminMiniServiceController::class, 'store'])->name('mini-service.store');
    Route::get('mini-service/{id}/edit', [AdminMiniServiceController::class, 'edit'])->name('mini-service.edit');
    Route::put('mini-service/{id}', [AdminMiniServiceController::class, 'update'])->name('mini-service.update');
    Route::delete('mini-service/{id}', [AdminMiniServiceController::class, 'destroy'])->name('mini-service.destroy');
    Route::post('mini-service/{id}/toggle-visibility', [AdminMiniServiceController::class, 'toggleVisibility'])->name('mini-service.toggleVisibility');


    // Testimonials Routes
    Route::get('testimonials', [AdminTestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('testimonials/add', [AdminTestimonialController::class, 'add'])->name('testimonials.add');
    Route::post('testimonials/store', [AdminTestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('testimonials/{id}/edit', [AdminTestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('testimonials/{id}', [AdminTestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('testimonials/{id}', [AdminTestimonialController::class, 'destroy'])->name('testimonials.destroy');
    Route::post('testimonials/{id}/toggle-visibility', [AdminTestimonialController::class, 'toggleVisibility'])->name('testimonials.toggleVisibility');

    // Hero Section CRUD Routes
    Route::get('hero-section', [AdminHeroSectionCrudController::class, 'index'])->name('hero-section.index');
    Route::get('hero-section/add', [AdminHeroSectionCrudController::class, 'add'])->name('hero-section.add');
    Route::post('hero-section/store', [AdminHeroSectionCrudController::class, 'store'])->name('hero-section.store');
    Route::get('hero-section/{id}/edit', [AdminHeroSectionCrudController::class, 'edit'])->name('hero-section.edit');
    Route::put('hero-section/{id}', [AdminHeroSectionCrudController::class, 'update'])->name('hero-section.update');
    Route::delete('hero-section/{id}', [AdminHeroSectionCrudController::class, 'destroy'])->name('hero-section.destroy');
    Route::post('hero-section/{id}/toggle-visibility', [AdminHeroSectionCrudController::class, 'toggleVisibility'])->name('hero-section.toggleVisibility');

        // Partner Routes
    Route::get('partner', [AdminPartnerController::class, 'index'])->name('partner.index');
    Route::get('partner/add', [AdminPartnerController::class, 'add'])->name('partner.add');
    Route::post('partner/store', [AdminPartnerController::class, 'store'])->name('partner.store');
    Route::get('partner/{id}/edit', [AdminPartnerController::class, 'edit'])->name('partner.edit');
    Route::put('partner/{id}', [AdminPartnerController::class, 'update'])->name('partner.update');
    Route::delete('partner/{id}', [AdminPartnerController::class, 'destroy'])->name('partner.destroy');
    Route::post('partner/{id}/toggle-visibility', [AdminPartnerController::class, 'toggleVisibility'])->name('partner.toggleVisibility');


    // Blog Routes
    Route::get('blog', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::get('blog/add', [AdminBlogController::class, 'add'])->name('blog.add');
    Route::post('blog/store', [AdminBlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{id}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{id}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{id}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');
    Route::post('blog/{id}/toggle-visibility', [AdminBlogController::class, 'toggleVisibility'])->name('blog.toggleVisibility');

    // Career Routes
    Route::get('career', [AdminCareerController::class, 'index'])->name('career.index');
    Route::get('career/add', [AdminCareerController::class, 'add'])->name('career.add');
    Route::post('career/store', [AdminCareerController::class, 'store'])->name('career.store');
    Route::get('career/{id}/edit', [AdminCareerController::class, 'edit'])->name('career.edit');
    Route::put('career/{id}', [AdminCareerController::class, 'update'])->name('career.update');
    Route::delete('career/{id}', [AdminCareerController::class, 'destroy'])->name('career.destroy');
    Route::post('career/{id}/toggle-visibility', [AdminCareerController::class, 'toggleVisibility'])->name('career.toggleVisibility');

    // About Section Routes

        Route::get('newsbar', [AdminNewsbarController::class, 'index'])->name('newsbar.index');
    Route::get('newsbar/add', [AdminNewsbarController::class, 'add'])->name('newsbar.add');
    Route::post('newsbar/store', [AdminNewsbarController::class, 'store'])->name('newsbar.store');
    Route::get('newsbar/{id}/edit', [AdminNewsbarController::class, 'edit'])->name('newsbar.edit');
    Route::put('newsbar/{id}', [AdminNewsbarController::class, 'update'])->name('newsbar.update');
    Route::delete('newsbar/{id}', [AdminNewsbarController::class, 'destroy'])->name('newsbar.destroy');

    // Newsletter Routes
    Route::get('newsletter', [AdminNewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('newsletter/add', [AdminNewsletterController::class, 'add'])->name('newsletter.add');
    Route::post('newsletter/store', [AdminNewsletterController::class, 'store'])->name('newsletter.store');
    Route::get('newsletter/{id}/edit', [AdminNewsletterController::class, 'edit'])->name('newsletter.edit');
    Route::put('newsletter/{id}', [AdminNewsletterController::class, 'update'])->name('newsletter.update');
    Route::delete('newsletter/{id}', [AdminNewsletterController::class, 'destroy'])->name('newsletter.destroy');
    Route::post('newsletter/{id}/toggle-visibility', [AdminNewsletterController::class, 'toggleVisibility'])->name('newsletter.toggleVisibility');

    // Company Settings
    Route::get('company-settings', [AdminSettingController::class, 'index'])->name('company.settings');
    Route::put('business-settings/update', [AdminSettingController::class, 'updateBusinessSettings'])->name('business.settings.update');

    // Website CMS sections
    Route::get('website', [AdminWebsiteController::class, 'index'])->name('website.index');
    Route::get('ourcompany-cms', [AdminWebsiteController::class, 'OurCompanyCms'])->name('ourcompany.cms');
    Route::put('ourcompany-cms/update', [AdminWebsiteController::class, 'updateOurCompanyCms'])->name('ourcompany.cms.update');
    Route::get('contact', [AdminContactPageController::class, 'index'])->name('contact.index');
    Route::get('home', [AdminHomePageController::class, 'index'])->name('home.index');
    Route::get('service-page', [AdminServicePageController::class, 'index'])->name('service-page.index');
    Route::get('company-welcome', [AdminWebsiteController::class, 'companyWelcome'])->name('company.welcome');
    Route::put('company-welcome/update', [AdminWebsiteController::class, 'companyWelcomeUpdate'])->name('company.welcome.update');

    Route::get('about', [AdminAboutController::class, 'index'])->name('about.index');

    Route::put('website/sections/update', [AdminWebsiteController::class, 'updateAllSections'])->name('website.sections.update');
    Route::put('contact/sections/update', [AdminContactPageController::class, 'updateContact'])->name('contact.update');
    Route::put('home/update', [AdminHomePageController::class, 'updateHomePage'])->name('home.update');
    Route::put('service-page/update', [AdminServicePageController::class, 'updateServicePage'])->name('service-page.update');
    Route::put('about/update', [AdminAboutController::class, 'update'])->name('about.update');
    Route::put('royalty/update', [AdminWebsiteController::class, 'updateRoyaltyCms'])->name('royalty.update');

    Route::get('contacts', [AdminContactPageController::class, 'index'])->name('contactsubmission.index');
    Route::get('contactlist', [AdminContactController::class, 'index'])->name('contactlist');
    Route::get('newsletterlist', [AdminNewsletterSubmissionController::class, 'index'])->name('newsletterlist');
    Route::delete('newsletterlist/{id}', [AdminNewsletterSubmissionController::class, 'destroy'])->name('newsletterlist.destroy');
Route::delete('contacts/{id}', [AdminContactController::class, 'destroy'])->name('contact.destroy');




});




