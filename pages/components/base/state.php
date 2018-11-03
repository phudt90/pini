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
            <h1 class="h3">State Colors</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      State Colors
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
					<span class="m-section__sub">
					Metronic comes with a number of state colors that can be applied to the most of elements and components. It reuses Bootstrap's original 6 states:
					</span>
                  <div class="m-section__content">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                        <tr>
                          <th style="width: 150px">State</th>
                          <th>Preview</th>
                          <th style="width: 200px">Class postfix</th>
                          <th>Usage example</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Success</td>
                          <td><span class="m-badge m-badge--success"></span></td>
                          <td><code>*-success</code></td>
                          <td><code>btn-success</code> <code>m--font-success</code></td>
                        </tr>
                        <tr>
                          <td>Warning</td>
                          <td><span class="m-badge m-badge--warning"></span></td>
                          <td><code>*-warning</code></td>
                          <td><code>btn-warning</code> <code>m--font-warning</code></td>
                        </tr>
                        <tr>
                          <td>Danger</td>
                          <td><span class="m-badge m-badge--danger"></span></td>
                          <td><code>*-danger</code></td>
                          <td><code>btn-danger</code> <code>m--font-danger</code></td>
                        </tr>
                        <tr>
                          <td>Info</td>
                          <td><span class="m-badge m-badge--info"></span></td>
                          <td><code>*-info</code></td>
                          <td><code>btn-info</code> <code>m--font-info</code></td>
                        </tr>
                        <tr>
                          <td>Primary</td>
                          <td><span class="m-badge m-badge--primary"></span></td>
                          <td><code>*-primary</code></td>
                          <td><code>btn-primary</code> <code>m--font-primary</code></td>
                        </tr>
                        <tr>
                          <td>Secondary</td>
                          <td><span class="m-badge m-badge--secondary"></span></td>
                          <td><code>*-secondary</code></td>
                          <td><code>btn-secondary</code> <code>m--font-secondary</code></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="m--space-30"></div>

                  <span class="m-section__sub">
					And also adds its own <code>brand</code> and <code>metal</code> states:
					</span>
                  <div class="m-section__content">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                        <tr>
                          <th style="width: 150px">State</th>
                          <th>Preview</th>
                          <th style="width: 200px">Class addon</th>
                          <th>Usage example</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Brand</td>
                          <td><span class="m-badge m-badge--brand"></span></td>
                          <td><code>*-brand</code></td>
                          <td><code>btn-success</code> <code>m--font-brand</code></td>
                        </tr>
                        <tr>
                          <td>Accent</td>
                          <td><span class="m-badge m-badge--accent"></span></td>
                          <td><code>*-accent</code></td>
                          <td><code>btn-accent</code> <code>m--font-accent</code></td>
                        </tr>
                        <tr>
                          <td>Focus</td>
                          <td><span class="m-badge m-badge--focus"></span></td>
                          <td><code>*-focus</code></td>
                          <td><code>btn-focus</code> <code>m--font-focus</code></td>
                        </tr>
                        <tr>
                          <td>Metal</td>
                          <td><span class="m-badge m-badge--metal"></span></td>
                          <td><code>*-metal</code></td>
                          <td><code>btn-metal</code> <code>m--font-metal</code></td>
                        </tr>
                        <tr class="active">
                          <td>Light</td>
                          <td><span class="m-badge m-badge--light"></span></td>
                          <td><code>*-light</code></td>
                          <td><code>btn-light</code> <code>m--font-light</code></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--end::Section-->
              </div>
            </div>
            <!--end::Portlet-->
          </div>
          <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      State Examples
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
					<span class="m-section__sub">
						Apply state classes to any typography element:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <span class="m--font-success">Success state text</span>
                        <span class="m--font-warning">Warning state text</span>
                        <span class="m--font-info">Info state text</span>
                        <span class="m--font-danger">Danger state text</span>
                        <span class="m--font-primary">Primary state text</span>
                        <span class="m--font-focus">Focus state text</span>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
						Apply state classes to any component:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview m-demo__preview--btn">
                        <a href="#" class="btn btn-primary">Primary</a>
                        <a href="#" class="btn btn-success">Success</a>
                        <a href="#" class="btn btn-warning">Warning</a>
                        <a href="#" class="btn btn-danger">Danger</a>
                        <a href="#" class="btn btn-metal">Metal</a>
                        <a href="#" class="btn btn-brand">Brand</a>
                        <a href="#" class="btn btn-focus">Focus</a>
                      </div>
                    </div>
                  </div>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview m-demo__preview--badge">
                        <span class="m-badge m-badge--brand m-badge--wide">new</span>
                        <span class="m-badge m-badge--metal m-badge--wide">pending</span>
                        <span class="m-badge m-badge--primary m-badge--wide">203</span>
                        <span class="m-badge m-badge--success m-badge--wide">hot</span>
                        <span class="m-badge m-badge--info m-badge--wide">fixed</span>
                        <span class="m-badge m-badge--warning m-badge--wide">in process</span>
                        <span class="m-badge m-badge--danger m-badge--wide">completed</span>
                        <span class="m-badge m-badge--focus m-badge--wide">focus</span>
                        <span class="m-badge m-badge--accent m-badge--wide">accent</span>
                      </div>
                    </div>
                  </div>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="alert alert-success" role="alert">
                          <strong>Well done!</strong> You successfully read this important alert message.
                        </div>

                        <div class="alert alert-brand alert-dismissible fade show   m-alert m-alert--square m-alert--air" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          </button>
                          <strong>Well done!</strong> You successfully read this important alert message.
                        </div>

                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <div class="m--space-10"></div>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="m--space-10"></div>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end::Section-->
              </div>
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