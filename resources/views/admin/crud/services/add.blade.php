@extends('layouts.app.master')

@section('title', 'Dashboard')

@section('css')
@endsection

@section('content')




<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Add Service</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">CMS</li>
                    <li class="breadcrumb-item active">Add Service</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Service Form</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-xl-5 g-3">
                      <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                        <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                          <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="{{asset('AdminAssets/svg/icon-sprite.svg#product-detail')}}"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                <h6>Add Service Details</h6>
                                <p>Add Service heading & details</p>
                              </div></a></li>




                        </ul>
                      </div>
                      <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                        <div class="tab-content custom-input" id="add-product-pills-tabContent">
                          <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                            <div class="sidebar-body">
                              <form class="row g-3 common-form" method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                  <label class="form-label" for="validationProductTitle">Service Heading</label>
                                  <input class="form-control" name="heading" id="validationProductTitle" type="text" placeholder="Heading" value="{{ old('heading') }}">
                                </div>
<div class="col-md-12">
    <label class="form-label">Service Description</label>
      <textarea id="service-description" name="description" class="form-control" rows="6">{{ old('description') }}</textarea>
</div>
<div class="col-md-6">
    <label class="form-label" for="service-image">Service Image</label>
    <input class="form-control" name="image" id="service-image" type="file" accept="image/*">
</div>

<div class="col-md-12">
  <label class="form-label">FAQs</label>
  <div id="faq-wrapper">
    <div class="faq-item mb-3 border p-3 rounded">
      <div class="mb-2">
        <label>Question</label>
        <input type="text" name="faq_question[]" class="form-control" placeholder="Enter FAQ question">
      </div>
      <div>
        <label>Answer</label>
        <textarea name="faq_answer[]" class="form-control" rows="2" placeholder="Enter FAQ answer"></textarea>
      </div>
      <button type="button" class="btn btn-danger btn-sm mt-2 remove-faq">Remove</button>
    </div>
  </div>
  <button type="button" id="add-faq" class="btn btn-success btn-sm mt-3">+ Add More FAQ</button>
</div>


<div class="col-md-6 ">
<button class="btn btn-primary f-w-500" type="submit">Submit</button>
</div>
                              </form>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>



                @endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // CKEditor init
    CKEDITOR.replace('service-description', {
      toolbar: [
        { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
        { name: 'styles', items: ['Format', 'FontSize'] },
        { name: 'links', items: ['Link', 'Unlink'] }
      ],
      removePlugins: 'elementspath',
      resize_enabled: false
    });

    // FAQ add/remove logic
    const faqWrapper = document.getElementById('faq-wrapper');
    const addFaqBtn = document.getElementById('add-faq');

    addFaqBtn.addEventListener('click', function () {
      const faqItem = document.createElement('div');
      faqItem.classList.add('faq-item', 'mb-3', 'border', 'p-3', 'rounded');
      faqItem.innerHTML = `
        <div class="mb-2">
          <label>Question</label>
          <input type="text" name="faq_question[]" class="form-control" placeholder="Enter FAQ question">
        </div>
        <div>
          <label>Answer</label>
          <textarea name="faq_answer[]" class="form-control" rows="2" placeholder="Enter FAQ answer"></textarea>
        </div>
        <button type="button" class="btn btn-danger btn-sm mt-2 remove-faq">Remove</button>
      `;
      faqWrapper.appendChild(faqItem);
    });

    document.addEventListener('click', function (e) {
      if (e.target.classList.contains('remove-faq')) {
        e.target.closest('.faq-item').remove();
      }
    });
  });
</script>
@endsection

