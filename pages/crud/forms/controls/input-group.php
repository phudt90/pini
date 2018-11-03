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
            <h1 class="h3">Input Groups</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Basic Example
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Use any icon in input group from <a class="m-link" href="?page=components/icons/lineawesome">Lineawesome</a>, <a class="m-link" href="?page=components/icons/lineawesome">Fontawesome</a> or , <a class="m-link" href="?page=components/icons/lineawesome">Fontawesome</a> or <a class="m-link" href="?page=components/icons/lineawesome">Metronic</a> icons.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Left Addon</label>
                    <div class="input-group m-input-group">
                      <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                      <input type="text" class="form-control m-input" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Right Addon</label>
                    <div class="input-group">
                      <input type="text" class="form-control m-input" placeholder="Username" aria-describedby="basic-addon2">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon2">@example.com</span></div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Joint Addons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                      <input type="text" class="form-control m-input" aria-label="Amount (to the nearest dollar)">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Left &amp; Right Addons</label>
                    <div class="input-group m-input-group">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">#</span></div>
                      <input type="text" class="form-control m-input" placeholder="Units" aria-describedby="basic-addon1">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon1">px</span></div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Solid Style</label>
                    <div class="input-group m-input-group m-input-group--solid">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Amount:</span></div>
                      <input type="text" class="form-control m-input" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Square Style</label>
                    <div class="input-group m-input-group m-input-group--square">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">%</span></div>
                      <input type="text" class="form-control m-input" placeholder="Margin" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Air Style</label>
                    <div class="input-group m-input-group m-input-group--air">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">+</span></div>
                      <input type="text" class="form-control m-input" placeholder="Quantity" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Pill Style</label>
                    <div class="input-group m-input-group m-input-group--pill">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">#</span></div>
                      <input type="text" class="form-control m-input" placeholder="Amount" aria-describedby="basic-addon1">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon1">%</span></div>
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Icon Groups
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Easily extend form controls by adding text, buttons, icons, or button groups on either side of textual.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Left Addon</label>
                    <div class="input-group m-input-group">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-exclamation-triangle"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Right Addon</label>
                    <div class="input-group">
                      <input type="text" class="form-control m-input" placeholder="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Joint Addons</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span>
                        <span class="input-group-text">USD</span>
                      </div>
                      <input type="text" class="form-control m-input" placeholder="0.00" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-registered"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Both Addons</label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2"><i class="flaticon-refresh"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="flaticon-user"></i></span></div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Solid Style</label>
                    <div class="input-group m-input-group m-input-group--solid">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-bar-chart"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Unit" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Square Style</label>
                    <div class="input-group m-input-group m-input-group--square">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-user"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Amount" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Air Style</label>
                    <div class="input-group m-input-group m-input-group--air">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-exclamation-triangle"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="URL" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Pill Style</label>
                    <div class="input-group m-input-group m-input-group--pill">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-gear"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Sizing
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Add the relative form sizing classes to the <code>.input-group</code> itself and contents within
                      will automatically resize.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Large Input Group</label>
                    <div class="input-group input-group-lg m-input-group">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="la la-exclamation-triangle"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Large size" aria-describedby="basic-addon1">
                    </div>
                    <span class="m-form__help">Some help content goes here</span>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Large Input Group</label>
                    <div class="input-group input-group-lg m-input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="flaticon-refresh"></i></span>
                        <span class="input-group-text">0.00</span>
                      </div>
                      <input type="text" class="form-control m-input" aria-label="Large size">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Small Input Group</label>
                    <div class="input-group input-group-sm">
                      <input type="text" class="form-control m-input" placeholder="Small size" aria-describedby="basic-addon2">
                      <div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
                    </div>
                  </div>
                  <div class="form-group m-form__group input-group-sm">
                    <label for="exampleInputEmail1">Small Input Group</label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span></div>
                      <input type="text" class="form-control m-input" placeholder="Small size" aria-describedby="basic-addon2">
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
          </div>
          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Icon Input Groups
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Use any icon in input group from <a class="m-link" href="?page=components/icons/lineawesome">Lineawesome</a>, <a class="m-link" href="?page=components/icons/lineawesome">Fontawesome</a> or , <a class="m-link" href="?page=components/icons/lineawesome">Fontawesome</a> or <a class="m-link" href="?page=components/icons/lineawesome">Metronic</a> icons.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Icon</label>
                    <div class="m-input-icon m-input-icon--left">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Icon</label>
                    <div class="m-input-icon m-input-icon--right">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-unlock-alt"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Both Icons</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input" placeholder="Email">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tag"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-thumb-tack"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Solid Style Input</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input m-input--solid" placeholder="Tags">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tag"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-check-circle-o"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Pill Style Input</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input m-input--pill" placeholder="URL">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tag"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-comments-o"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Pill &amp; Air Style Input</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Amount">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-user"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-info-circle"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Square Style Input</label>
                    <div class="m-input-icon m-input-icon--left m-input-icon--right">
                      <input type="text" class="form-control m-input m-input--square" placeholder="Quantity">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tag"></i></span></span>
                      <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-thumb-tack"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Large Input</label>
                    <div class="m-input-icon m-input-icon--left">
                      <input type="text" class="form-control form-control-lg m-input" placeholder="Price">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Small Input</label>
                    <div class="m-input-icon m-input-icon--left">
                      <input type="text" class="form-control form-control-sm m-input" placeholder="Margins">
                      <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-cloud-upload"></i></span></span>
                    </div>
                  </div>
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Checkboxes and Radio addons
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Place any checkbox or radio option within an input group’s addon instead of text.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Checkbox Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
								<span class="input-group-text">
									<label class="m-checkbox m-checkbox--single m-checkbox--state m-checkbox--state-success">
										<input type="checkbox" checked="">
										<span></span>
									</label>
								</span>
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Checkbox Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox">
                      <div class="input-group-append">
								<span class="input-group-text">
									<label class="m-checkbox m-checkbox--single m-checkbox--state m-checkbox--state-primary">
										<input type="checkbox" checked="">
										<span></span>
									</label>
								</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right &amp; Left Checkbox Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
								<span class="input-group-text">
									<label class="m-checkbox m-checkbox--single">
										<input type="checkbox" checked="">
										<span></span>
									</label>
								</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox">
                      <div class="input-group-append">
								<span class="input-group-text">
									<label class="m-checkbox m-checkbox--single">
										<input type="checkbox">
										<span></span>
									</label>
								</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Radio Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
								<span class="input-group-text">
									<label class="m-radio m-radio--single m-radio--state m-radio--state-success">
										<input type="radio" checked="">
										<span></span>
									</label>
								</span>
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Radio Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio">
                      <div class="input-group-append">
								<span class="input-group-text">
									<label class="m-radio m-radio--single m-radio--state m-radio--state-primary">
										<input type="radio" checked="">
										<span></span>
									</label>
								</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right &amp; Left Radio Addon</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
								<span class="input-group-text">
									<label class="m-radio m-radio--single">
										<input type="radio">
										<span></span>
									</label>
								</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio">
                      <div class="input-group-append">
								<span class="input-group-text">
									<label class="m-radio m-radio--single">
										<input type="radio">
										<span></span>
									</label>
								</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Button Addons
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      Buttons in input groups must wrapped in a <code>.input-group-prepend</code> or <code>.input-group-append</code> for proper alignment and sizing.
                      This is required due to default browser styles that cannot be overridden.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Addon Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control" placeholder="Search for...">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Addon Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left &amp; Right Addon Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Addon Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-brand" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control" placeholder="Search for...">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Addon Button</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Go!</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left &amp; Right Addon Button</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-success" type="button">Go!</button>
                      </div>
                      <input type="text" class="form-control" placeholder="Search for...">
                      <div class="input-group-append">
                        <button class="btn btn-warning" type="button">Go!</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Buttons With Dropdowns
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group m--margin-top-10">
                    <div class="alert m-alert m-alert--default" role="alert">
                      The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left Button Dropdown</label>
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
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                  </div>
                  <div class="form-group m-form__group">
                    <label>Right Button Dropdown</label>
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
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
                  </div>
                  <div class="form-group m-form__group">
                    <label>Left &amp; Right Button Dropdown</label>
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
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
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
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
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