@extends('layouts.app.master')

@section('title', 'Dashboard')

@section('css')
<style>
  .responsibility-item {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
    align-items: center;
  }
  .responsibility-item input {
    flex: 1;
  }
  .remove-responsibility {
    cursor: pointer;
    color: #dc3545;
    font-size: 20px;
    padding: 5px 10px;
  }
  .remove-responsibility:hover {
    color: #c82333;
  }
</style>
@endsection

@section('content')

<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Add Career</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">CMS</li>
                    <li class="breadcrumb-item active">Add Career</li>
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
                    <h5>Career Form</h5>
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
                                <h6>Add Career Details</h6>
                                <p>Add Career name & details</p>
                              </div></a></li>

                        </ul>
                      </div>
                      <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                        <div class="tab-content custom-input" id="add-product-pills-tabContent">
                          <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                            <div class="sidebar-body">
                              <form class="row g-3 common-form" method="POST" action="{{ route('admin.career.store') }}">
                                @csrf
                                <div class="col-md-12">
                                  <label class="form-label" for="validationProductTitle">Job Title</label>
                                  <input class="form-control" name="title" id="validationProductTitle" type="text" placeholder="e.g., Backend Laravel Developer" value="{{ old('title') }}" required>
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Job Type</label>
                                  <select class="form-control" name="job_type" required>
                                    <option value="">Select Job Type</option>
                                    <option value="Full-time" {{ old('job_type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                    <option value="Part-time" {{ old('job_type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                    <option value="Contract" {{ old('job_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                                    <option value="Internship" {{ old('job_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                                  </select>
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Location</label>
                                  <input class="form-control" name="location" type="text" placeholder="e.g., Karachi, Pakistan" value="{{ old('location') }}">
                                </div>

                                <div class="col-md-12">
                                  <label class="form-label">Job Summary</label>
                                  <textarea class="form-control" name="summary" rows="4" placeholder="Enter job summary..." required>{{ old('summary') }}</textarea>
                                </div>

                                <div class="col-md-12">
                                  <label class="form-label">Responsibilities</label>
                                  <div id="responsibilities-container">
                                    <div class="responsibility-item">
                                      <input type="text" class="form-control responsibility-input" name="responsibilities[]" placeholder="Enter responsibility" required>
                                      <button type="button" class="btn btn-danger remove-responsibility" onclick="removeResponsibility(this)" style="display: none;">
                                        <i class="fa fa-times"></i>
                                      </button>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-secondary mt-2" onclick="addResponsibility()">
                                    <i class="fa fa-plus pe-2"></i>Add More
                                  </button>
                                  <input type="hidden" name="responsiblities" id="responsibilities-hidden">
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Education</label>
                                  <input class="form-control" name="education" type="text" placeholder="e.g., Bachelor's Degree" value="{{ old('education') }}">
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Experience</label>
                                  <input class="form-control" name="experience" type="text" placeholder="e.g., 3+ Years" value="{{ old('experience') }}">
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Salary Range</label>
                                  <input class="form-control" name="salary_range" type="text" placeholder="e.g., 70k - 100k" value="{{ old('salary_range') }}">
                                </div>

                                <div class="col-md-6">
                                  <label class="form-label">Visibility</label>
                                  <select class="form-control" name="visibility">
                                    <option value="1" {{ old('visibility', 1) == 1 ? 'selected' : '' }}>Visible</option>
                                    <option value="0" {{ old('visibility') == 0 ? 'selected' : '' }}>Hidden</option>
                                  </select>
                                </div>

                                <div class="col-md-12">
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
<script>
document.addEventListener('DOMContentLoaded', function () {
  updateRemoveButtons();
  updateHiddenField();
});

function addResponsibility() {
  const container = document.getElementById('responsibilities-container');
  const newItem = document.createElement('div');
  newItem.className = 'responsibility-item';
  newItem.innerHTML = `
    <input type="text" class="form-control responsibility-input" name="responsibilities[]" placeholder="Enter responsibility" required>
    <button type="button" class="btn btn-danger remove-responsibility" onclick="removeResponsibility(this)">
      <i class="fa fa-times"></i>
    </button>
  `;
  container.appendChild(newItem);
  updateRemoveButtons();
  
  // Focus on the new input
  const inputs = newItem.querySelectorAll('input');
  if (inputs.length > 0) {
    inputs[0].focus();
  }
}

function removeResponsibility(button) {
  const container = document.getElementById('responsibilities-container');
  if (container.children.length > 1) {
    button.closest('.responsibility-item').remove();
    updateRemoveButtons();
    updateHiddenField();
  }
}

function updateRemoveButtons() {
  const container = document.getElementById('responsibilities-container');
  const items = container.querySelectorAll('.responsibility-item');
  items.forEach((item, index) => {
    const removeBtn = item.querySelector('.remove-responsibility');
    if (items.length > 1) {
      removeBtn.style.display = 'block';
    } else {
      removeBtn.style.display = 'none';
    }
  });
}

function updateHiddenField() {
  const inputs = document.querySelectorAll('.responsibility-input');
  const values = Array.from(inputs).map(input => input.value.trim()).filter(val => val);
  document.getElementById('responsibilities-hidden').value = JSON.stringify(values);
}

// Update hidden field on input change
document.addEventListener('input', function(e) {
  if (e.target.classList.contains('responsibility-input')) {
    updateHiddenField();
  }
});

// Update hidden field before form submission
document.querySelector('form').addEventListener('submit', function(e) {
  updateHiddenField();
});
</script>
@endsection

