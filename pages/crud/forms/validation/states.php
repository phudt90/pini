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
            <h1 class="h3">Validation States</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Default Form Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control m-input" id="inputSuccess1">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Input with warning</label>
                    <input type="text" class="form-control m-input" id="inputWarning1">
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Input with danger</label>
                    <input type="text" class="form-control m-input" id="inputDanger1">
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Highlight Input Control Border
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--state">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Add <code>m-form--state</code> class to the form element to highlight form control borders on validation states change.
                    </div>
                  </div>

                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control m-input" id="inputSuccess1">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Input with warning</label>
                    <input type="text" class="form-control m-input" id="inputWarning1">
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Input with danger</label>
                    <input type="text" class="form-control m-input" id="inputDanger1">
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Horizontal Form Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success row">
                    <label class="col-form-label col-lg-3" for="inputSuccess1">Input with success</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input" id="inputSuccess1">
                      <div class="form-control-feedback">Success! You've done it.</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group has-warning row">
                    <label class="col-form-label col-lg-3" for="inputWarning1">Input with warning</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input" id="inputWarning1">
                      <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group has-danger row">
                    <label class="col-form-label col-lg-3" for="inputDanger1">Input with danger</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input" id="inputDanger1">
                      <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <div class="row">
                      <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-brand">Submit</button>
                        <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Input Style Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success row">
                    <label class="col-form-label col-lg-3" for="inputSuccess1">Solid Input Style</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input m-input--solid" id="inputSuccess1">
                      <div class="form-control-feedback">Success! You've done it.</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group has-warning row">
                    <label class="col-form-label col-lg-3" for="inputWarning1">Pill Input Style</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input m-input--pill" id="inputWarning1">
                      <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                  <div class="form-group m-form__group has-danger row">
                    <label class="col-form-label col-lg-3" for="inputDanger1">Air Input Style</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control m-input m-input--air" id="inputDanger1">
                      <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                      <span class="m-form__help">Example help text that remains unchanged.</span>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <div class="row">
                      <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-brand">Submit</button>
                        <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Input Group Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Addon</label>
                    <div class="input-group m-input-group">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-bar-chart"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Addon</label>
                    <div class="input-group m-input-group">
                      <input type="text" class="form-control m-input" value="4444a" placeholder="Email" aria-describedby="basic-addon1">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon1">USD</span></div>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Input with danger</label>
                    <div class="input-group m-input-group">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control m-input" placeholder="Email" aria-describedby="basic-addon1">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon1"><i class="la la-comments"></i></span></div>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Icon Input Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Icon</label>
                    <div class="m-input-icon m-input-icon--left">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Icon</label>
                    <div class="m-input-icon m-input-icon--right">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-unlock-alt"></i></span></span>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Both Icons</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tag"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-thumb-tack"></i></span></span>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-brand">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
          </div>
          <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Checkbox &amp; Radio Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Checkboxes</label>
                    <div class="m-checkbox-list">
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 1
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 2
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 3
                        <span></span>
                      </label>
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputSuccess1">Inline Checkboxes</label>
                    <div class="m-checkbox-inline">
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 1
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 2
                        <span></span>
                      </label>
                      <label class="m-checkbox">
                        <input type="checkbox"> Option 3
                        <span></span>
                      </label>
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>

                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputSuccess1">Radios</label>
                    <div class="m-radio-list">
                      <label class="m-radio">
                        <input type="radio"> Option 1
                        <span></span>
                      </label>
                      <label class="m-radio">
                        <input type="radio"> Option 2
                        <span></span>
                      </label>
                      <label class="m-radio">
                        <input type="radio"> Option 3
                        <span></span>
                      </label>
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Inline Radios</label>
                    <div class="m-radio-inline">
                      <label class="m-radio">
                        <input type="radio"> Option 1
                        <span></span>
                      </label>
                      <label class="m-radio">
                        <input type="radio"> Option 2
                        <span></span>
                      </label>
                      <label class="m-radio">
                        <input type="radio"> Option 3
                        <span></span>
                      </label>
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>

                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-brand">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Button Addons Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-success" placeholder="Search for...">
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-warning" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-brand" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Both Buttons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-danger" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Highlight Input Control Border
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--state">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Add <code>m-form--state</code> class to the form element to highlight form control borders on validation states change.
                    </div>
                  </div>
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-success" placeholder="Search for...">
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-warning" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-brand" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Both Buttons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-danger" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Button Addons Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-success" placeholder="Search for...">
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-warning" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-brand" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Both Buttons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control form-control-danger" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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
                      Dropdowns Addon Validation States
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group has-success">
                    <label class="form-control-label" for="inputSuccess1">Left Dropdown</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control form-control-success" aria-label="Text input with dropdown button">
                    </div>
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-warning">
                    <label class="form-control-label" for="inputWarning1">Right Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control form-control-warning" aria-label="Text input with dropdown button">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-brand dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                  <div class="form-group m-form__group has-danger">
                    <label class="form-control-label" for="inputDanger1">Both Buttons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control form-control-danger" aria-label="Text input with dropdown button">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
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