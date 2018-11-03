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
            <h1 class="h3">Stack</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Base Stack Examples
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
					<span class="m-section__sub">
					Metronic's Stack allows building an equal height flexbile blocks easily:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item">Item 1</div>
                          <div class="m-stack__item">Item 2</div>
                          <div class="m-stack__item">Item 3</div>
                          <div class="m-stack__item">Item 4</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Item vertical and horizontal aligments done super easy:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--left">Left aligment</div>
                          <div class="m-stack__item m-stack__item--center">Center aligment</div>
                          <div class="m-stack__item m-stack__item--right">Right aligment</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--top">Top aligment</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Middle aligment</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--bottom">Bottom aligment</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Enable any number of fixed and fluid height items:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="width: 120px;">Fixed width - 120px</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle m-stack__item--fluid">Fluid width - 100%</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle m-stack__item--fluid">Fluid width - 100%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="width: 150px;">Fixed width - 150px</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle m-stack__item--fluid">Fluid width - 100%</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="width: 150px;">Fixed width - 150px</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Default stack comes with fluid width <code>width: 100%</code>. With inline stack option you can have <code>width:auto</code> stack:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo m-stack--inline">
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="width: 120px;">Free content</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Free content</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Longer free content</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Unlimited level of nesting supported:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item">
                            Item
                            <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                              <div class="m-stack__item m-stack__item--center m-stack__item--top">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--bottom">
                                Item
                              </div>
                            </div>
                          </div>
                          <div class="m-stack__item">
                            Item
                            <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                              <div class="m-stack__item m-stack__item--center m-stack__item--top">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                Item
                                <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                                  <div class="m-stack__item m-stack__item--center m-stack__item--top">
                                    Item
                                  </div>
                                  <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                    Item
                                  </div>
                                  <div class="m-stack__item m-stack__item--center m-stack__item--bottom">
                                    Item
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
                <!--end::Section-->
              </div>
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
                      Responsive Modes
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
					<span class="m-section__sub">
					You can set responsive mode to your stack by just enabling one of responsive mode with special classes <code>m-stack--general</code>, <code>m-stack--desktop</code>,
					<code>m-stack--tablet</code>, <code>m-stack--desktop-and-tablet</code>, <code>m-stack--mobile</code>, <code>m-stack--tablet-and-mobile</code>.
					When <code>m-stack--general</code> mode used the stack mode will remain but with other modes, for example with <code>m-stack--tablet</code> the stack mode will be activate within the device width and outside the device with the stack will be have just normal block tag.
					</span>

                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <code>m-stack--general:</code>
                        <div class="m--space-10"></div>
                        <div class="m-stack m-stack--ver m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--top">Top</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Middle</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--bottom">Bottom</div>
                        </div>
                      </div>
                    </div>

                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <code>m-stack--desktop:</code>
                        <div class="m--space-10"></div>
                        <div class="m-stack m-stack--ver m-stack--desktop m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--top">Top</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Middle</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--bottom">Bottom</div>
                        </div>
                      </div>
                    </div>

                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <code>m-stack--tablet:</code>
                        <div class="m--space-10"></div>
                        <div class="m-stack m-stack--ver m-stack--tablet m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--top">Top</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Middle</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--bottom">Bottom</div>
                        </div>
                      </div>
                    </div>

                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <code>m-stack--mobile:</code>
                        <div class="m--space-10"></div>
                        <div class="m-stack m-stack--ver m-stack--mobile m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--top">Top</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle">Middle</div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--bottom">Bottom</div>
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

          <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Horizontal Stack Examples
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
					<span class="m-section__sub">
					Metronic's Stack allows building an equal height flexbile blocks easily:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--hor m-stack--general m-stack--demo" style="height: 400px">
                          <div class="m-stack__item"><div class="m-stack__demo-item">Item 1</div></div>
                          <div class="m-stack__item"><div class="m-stack__demo-item">Item 2</div></div>
                          <div class="m-stack__item"><div class="m-stack__demo-item">Item 3</div></div>
                          <div class="m-stack__item"><div class="m-stack__demo-item">Item 4</div></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Item vertical and horizontal aligments done super easy:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview">
                        <div class="m-stack m-stack--hor m-stack--general m-stack--demo" style="height: 400px">
                          <div class="m-stack__item m-stack__item--left"><div class="m-stack__demo-item">Left aligment</div></div>
                          <div class="m-stack__item m-stack__item--center"><div class="m-stack__demo-item">Center aligment</div></div>
                          <div class="m-stack__item m-stack__item--right"><div class="m-stack__demo-item">Right aligment</div></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Enable any number of fixed and fluid width items:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview" style="height: 600px">
                        <div class="m-stack m-stack--hor m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="height: 100px;"><div class="m-stack__demo-item">Fixed height - 100px</div></div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle m-stack__item--fluid"><div class="m-stack__demo-item">Fluid height - 100%</div></div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="height: 100px;"><div class="m-stack__demo-item">Fixed height - 100px</div></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <span class="m-section__sub">
					Nested horizontal and vertical stacks:
					</span>
                  <div class="m-section__content">
                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                      <div class="m-demo__preview" style="height: 600px">
                        <div class="m-stack m-stack--hor m-stack--general m-stack--demo">
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle" style="height: 100px;">
                            <div class="m-stack m-stack--ver m-stack--general m-stack--demo" style="height: 100%">
                              <div class="m-stack__item m-stack__item--center m-stack__item--top">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--bottom">
                                Item
                              </div>
                            </div>
                          </div>
                          <div class="m-stack__item m-stack__item--center m-stack__item--middle m-stack__item--fluid">
                            <div class="m-stack m-stack--ver m-stack--general m-stack--demo" style="height: 100%">
                              <div class="m-stack__item m-stack__item--center m-stack__item--top">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                Item
                              </div>
                              <div class="m-stack__item m-stack__item--center m-stack__item--bottom">
                                Item
                              </div>
                            </div>
                          </div>
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