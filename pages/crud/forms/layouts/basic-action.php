<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php'; ?>

<body class="m-content--skin-light2">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/pre_wrapper.php'; ?>

<div id="wrapper" class="wrapper full-width">
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'; ?>

  <div class="container">
    <div class="m-body">
      <div class="m-content">
        <div class="m-panel">
          <div class="m-panel__heading">
            <h1 class="h3">Basic Action Bars</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Default Action Bar
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Right Action Bar
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--right">
                    <button type="reset" class="btn btn-brand">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Multiple Buttons
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--right">
                    <div class="row">
                      <div class="col m--align-left">
                        <button type="reset" class="btn btn-brand">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                      <div class="col m--align-right">
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Action Button &amp; Link
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--right">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <span class="m--margin-left-10">or <a href="#" class="m-link m--font-bold">Cancel</a></span>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
          </div>
          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--space">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Layout With Space
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--right">
                    <div class="row">
                      <div class="col m--align-left">
                        <button type="reset" class="btn btn-brand">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                      <div class="col m--align-right">
                        <button type="reset" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Solid Bar
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--solid m-form__actions--right">
                    <button type="reset" class="btn btn-brand">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Top &amp; Bottom Actions Bars
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__foot m-portlet__foot--top m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--solid">
                    <div class="row align-items-center">
                      <div class="col m--align-left m--valign-middle">
                        Top Actions:
                      </div>
                      <div class="col m--align-right">
                        <button type="reset" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="example_input_full_name">Full Name:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter full name">
                    <span class="m-form__help">Please enter your full name</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control m-input" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else</span>
                  </div>
                  <div class="m-form__group form-group">
                    <label for="">Communication:</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Email
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> SMS
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Phone
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--solid m-form__actions--right">
                    <button type="reset" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Hirozontal Form Layout
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-3 col-form-label">Full Name:</label>
                    <div class="col-9">
                      <input type="email" class="form-control m-input" placeholder="Enter full name">
                      <span class="m-form__help">Please enter your full name</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-3 col-form-label">Email address:</label>
                    <div class="col-9">
                      <input type="email" class="form-control m-input" placeholder="Enter email">
                      <span class="m-form__help">We'll never share your email with anyone else</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-3 col-form-label">Communication:</label>
                    <div class="col-9">
                      <div class="m-checkbox-inline">
                        <label class="m-checkbox">
                          <input type="checkbox"> Email
                          <span></span>
                        </label>
                        <label class="m-checkbox">
                          <input type="checkbox"> SMS
                          <span></span>
                        </label>
                        <label class="m-checkbox">
                          <input type="checkbox"> Phone
                          <span></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions--solid">
                    <div class="row">
                      <div class="col-3">

                      </div>
                      <div class="col-9">
                        <button type="reset" class="btn btn-brand">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>