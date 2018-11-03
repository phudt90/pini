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
            <h1 class="h3">Mega Options</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-xl-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Default Form Layout
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group">
                      <label for="example_input_full_name">Choose Delivery Type:</label>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="m-option">
										<span class="m-option__control">
											<span class="m-radio m-radio--brand m-radio--check-bold">
												<input type="radio" name="m_option_1" value="1">
												<span></span>
											</span>
										</span>
                            <span class="m-option__label">
											<span class="m-option__head">
												<span class="m-option__title">
													Standart Delevery
												</span>
												<span class="m-option__focus">
													Free
												</span>
											</span>
											<span class="m-option__body">
												Estimated 14-20 Day Shipping
												(&nbsp;Duties end taxes may be due
												upon delivery&nbsp;)
											</span>
										</span>
                          </label>
                        </div>
                        <div class="col-lg-6">
                          <label class="m-option">
										<span class="m-option__control">
											<span class="m-radio m-radio--brand m-radio--check-bold">
												<input type="radio" name="m_option_1" value="1">
												<span></span>
											</span>
										</span>
                            <span class="m-option__label">
											<span class="m-option__head">
												<span class="m-option__title">
													Fast Delevery
												</span>
												<span class="m-option__focus">
													$&nbsp;8.00
												</span>
											</span>
											<span class="m-option__body">
												Estimated 2-5 Day Shipping
												(&nbsp;Duties end taxes may be due
												upon delivery&nbsp;)
											</span>
										</span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="m-separator m-separator--dashed m-separator--lg"></div>

                    <div class="form-group m-form__group">
                      <label for="example_input_full_name">Membership:</label>
                      <div class="row">
                        <div class="col-lg-6">
                          <label class="m-option m-option m-option--plain">
										<span class="m-option__control">
											<span class="m-radio m-radio--brand m-radio--check-bold">
												<input type="radio" name="m_option_1" value="1">
												<span></span>
											</span>
										</span>
                            <span class="m-option__label">
											<span class="m-option__head">
												<span class="m-option__title">
													Premium Partner
												</span>
											</span>
											<span class="m-option__body">
												30 days free trial and lifetime free updates
											</span>
										</span>
                          </label>
                        </div>
                        <div class="col-lg-6">
                          <label class="m-option m-option m-option--plain">
										<span class="m-option__control">
											<span class="m-radio m-radio--brand m-radio--check-bold">
												<input type="radio" name="m_option_1" value="1">
												<span></span>
											</span>
										</span>
                            <span class="m-option__label">
											<span class="m-option__head">
												<span class="m-option__title">
													Free Membership
												</span>
											</span>
											<span class="m-option__body">
												24/7 support and Lifetime access
											</span>
										</span>
                          </label>
                        </div>
                      </div>
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
          </div>

          <div class="col-lg-12 col-xl-6">
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Horizontal Form Layout
                    </h3>
                  </div>
                </div>
              </div>
              <!--begin::Form-->
              <form class="m-form">
                <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                      <label class="col-lg-2 col-form-label">Delivery:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-6">
                            <label class="m-option">
											<span class="m-option__control">
												<span class="m-radio m-radio--brand m-radio--check-bold">
													<input type="radio" name="m_option_1" value="1">
													<span></span>
												</span>
											</span>
                              <span class="m-option__label">
												<span class="m-option__head">
													<span class="m-option__title">
														Standart Delevery
													</span>
													<span class="m-option__focus">
														Free
													</span>
												</span>
												<span class="m-option__body">
													Estimated 14-20 Day Shipping
													(Duties end taxes may be due)
												</span>
											</span>
                            </label>
                          </div>
                          <div class="col-lg-6">
                            <label class="m-option">
											<span class="m-option__control">
												<span class="m-radio m-radio--brand">
													<input type="radio" name="m_option_1" value="1">
													<span></span>
												</span>
											</span>
                              <span class="m-option__label">
												<span class="m-option__head">
													<span class="m-option__title">
														Fast Delevery
													</span>
													<span class="m-option__focus">
														$&nbsp;8.00
													</span>
												</span>
												<span class="m-option__body">
													Estimated 2-5 Day Shipping
													(Duties end taxes may be due)
												</span>
											</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="m-separator m-separator--dashed m-separator--lg"></div>

                    <div class="form-group m-form__group row">
                      <label class="col-lg-2 col-form-label">Full Name:</label>
                      <div class="col-lg-10">
                        <div class="row">
                          <div class="col-lg-6">
                            <label class="m-option m-option--plain">
											<span class="m-option__control">
												<span class="m-radio m-radio--brand">
													<input type="radio" name="m_option_1" value="1">
													<span></span>
												</span>
											</span>
                              <span class="m-option__label">
												<span class="m-option__head">
													<span class="m-option__title">
														Premium Partner
													</span>
												</span>
												<span class="m-option__body">
													30 days free trial and lifetime free updates
												</span>
											</span>
                            </label>
                          </div>
                          <div class="col-lg-6">
                            <label class="m-option m-option--plain">
											<span class="m-option__control">
												<span class="m-radio m-radio--brand">
													<input type="radio" name="m_option_1" value="1">
													<span></span>
												</span>
											</span>
                              <span class="m-option__label">
												<span class="m-option__head">
													<span class="m-option__title">
														Free Membership
													</span>
												</span>
												<span class="m-option__body">
													24/7 support and Lifetime access
												</span>
											</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <button type="reset" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              </form>
              <!--end::Form-->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>