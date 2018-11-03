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
            <h1 class="h3">Button Group</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Base Buttons
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand  m-tabs-line--right m-tabs-line-danger" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_default" role="tab">Default Style</a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_square" role="tab">Square Style</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Tab content-->
                <div class="tab-content">
                  <!--begin::Default Buttons Tab-->
                  <div class="tab-pane active" id="m_buttons_default" role="tabpanel">
                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Basic example	</h3>
                      <span class="m-section__sub">Basic button group examples</span>

                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="btn btn-secondary">Left</button>
                                  <button type="button" class="btn btn-secondary">Middle</button>
                                  <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="btn btn-brand">Left</button>
                                  <button type="button" class="btn btn-brand">Middle</button>
                                  <button type="button" class="btn btn-brand">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="btn btn-primary">Left</button>
                                  <button type="button" class="btn btn-primary">Middle</button>
                                  <button type="button" class="btn btn-primary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="btn btn-success">Left</button>
                                  <button type="button" class="btn btn-success">Middle</button>
                                  <button type="button" class="btn btn-success">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Buttons toolbar</h3>
                      <span class="m-section__sub">Combine sets of <code>btn-group</code> into a <code>btn-toolbar</code> for more complex components.</span>

                      <div class="m-section__content">

                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                              <div class="btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-bold"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-paperclip"></i></button>
                              </div>
                              <div class="btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              </div>
                              <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-scissors"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-unlink"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                        <!--begin::Demo-->

                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon">
                              </div>
                            </div>

                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-primary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-success"><i class="la la-paperclip"></i></button>
                                <button type="button" class="m-btn btn btn-warning"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-info"><i class="la la-scissors"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon2">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Sizing</h3>
                      <span class="m-section__sub">
	Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                              <button type="button" class="btn btn-outline-success">Left</button>
                              <button type="button" class="btn btn-outline-success">Middle</button>
                              <button type="button" class="btn btn-outline-success">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group" role="group" aria-label="Default button group">
                              <button type="button" class="btn btn-outline-warning">Left</button>
                              <button type="button" class="btn btn-outline-warning">Middle</button>
                              <button type="button" class="btn btn-outline-warning">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                              <button type="button" class="btn btn-outline-info">Left</button>
                              <button type="button" class="btn btn-outline-info">Middle</button>
                              <button type="button" class="btn btn-outline-info">Right</button>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Nesting</h3>
                      <span class="m-section__sub">
	Place a .btn-group within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>

                              <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Vertical</h3>
                      <span class="m-section__sub">
	Make a set of buttons appear vertically stacked rather than horizontally
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                              <button type="button" class="btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                              <button type="button" class="btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->
                  </div>
                  <!--end::Default Buttons Tab-->

                  <!--begin::Square Buttons Tab-->
                  <div class="tab-pane" id="m_buttons_square" role="tabpanel">
                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Basic example	</h3>
                      <span class="m-section__sub">Basic button group examples</span>

                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="m-btn m-btn--square btn btn-secondary">Left</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-secondary">Middle</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-secondary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="m-btn m-btn--square btn btn-brand">Left</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-brand">Middle</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-brand">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="m-btn m-btn--square btn btn-primary">Left</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-primary">Middle</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-primary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group" role="group" aria-label="...">
                                  <button type="button" class="m-btn m-btn--square btn btn-success">Left</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-success">Middle</button>
                                  <button type="button" class="m-btn m-btn--square btn btn-success">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Buttons toolbar</h3>
                      <span class="m-section__sub">Combine sets of <code>btn-group</code> into a <code>btn-toolbar</code> for more complex components.</span>

                      <div class="m-section__content">

                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                              <div class="btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-bold"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-paperclip"></i></button>
                              </div>
                              <div class="btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-header"></i></button>
                              </div>
                              <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-scissors"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-unlink"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                        <!--begin::Demo-->

                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-header"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                              <div class="input-group m-input-group--square">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon">
                              </div>
                            </div>

                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-primary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-success"><i class="la la-paperclip"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-warning"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn m-btn m-btn--square btn btn-info"><i class="la la-scissors"></i></button>
                              </div>
                              <div class="input-group m-input-group--square">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon2">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Sizing</h3>
                      <span class="m-section__sub">
	Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                              <button type="button" class="m-btn m-btn--square btn btn-outline-success">Left</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-success">Middle</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-success">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group" role="group" aria-label="Default button group">
                              <button type="button" class="m-btn m-btn--square btn btn-outline-warning">Left</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-warning">Middle</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-warning">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                              <button type="button" class="m-btn m-btn--square btn btn-outline-info">Left</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-info">Middle</button>
                              <button type="button" class="m-btn m-btn--square btn btn-outline-info">Right</button>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Nesting</h3>
                      <span class="m-section__sub">
	Place a .btn-group within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                              <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-file-text-o"></i></button>
                              <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-floppy-o"></i></button>
                              <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-header"></i></button>
                              <button type="button" class="m-btn m-btn m-btn--square btn btn-secondary"><i class="la la-italic"></i></button>

                              <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Vertical</h3>
                      <span class="m-section__sub">
	Make a set of buttons appear vertically stacked rather than horizontally
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                              <button type="button" class="m-btn m-btn--square btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                              <button type="button" class="m-btn m-btn--square btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop2" type="button" class="m-btn m-btn--square btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->					</div>
                  <!--end::Square Buttons Tab-->
                </div>
                <!--end::Tab content-->
              </div>
            </div>
            <!--end::Portlet-->
          </div>

          <div class="col-md-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Custom Buttons
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand   m-tabs-line--right m-tabs-line-danger" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_buttons_pill" role="tab">Pill Style</a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_buttons_air" role="tab">Air Style</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <!--begin::Tab content-->
                <div class="tab-content">
                  <!--begin::Pill Buttons Tab-->
                  <div class="tab-pane active" id="m_buttons_pill" role="tabpanel">
                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Basic example	</h3>
                      <span class="m-section__sub">Basic button group examples</span>

                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-secondary">Left</button>
                                  <button type="button" class="m-btn btn btn-secondary">Middle</button>
                                  <button type="button" class="m-btn btn btn-secondary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-brand">Left</button>
                                  <button type="button" class="m-btn btn btn-brand">Middle</button>
                                  <button type="button" class="m-btn btn btn-brand">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-primary">Left</button>
                                  <button type="button" class="m-btn btn btn-primary">Middle</button>
                                  <button type="button" class="m-btn btn btn-primary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-success">Left</button>
                                  <button type="button" class="m-btn btn btn-success">Middle</button>
                                  <button type="button" class="m-btn btn btn-success">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Buttons toolbar</h3>
                      <span class="m-section__sub">Combine sets of <code>m-btn-group m-btn-group--pill btn-group</code> into a <code>btn-toolbar</code> for more complex components.</span>

                      <div class="m-section__content">

                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                              <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-bold"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-paperclip"></i></button>
                              </div>
                              <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              </div>
                              <div class="m-btn-group m-btn-group--pill btn-group" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-scissors"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-unlink"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                        <!--begin::Demo-->

                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon">
                              </div>
                            </div>

                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="m-btn-group m-btn-group--pill btn-group" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-primary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-success"><i class="la la-paperclip"></i></button>
                                <button type="button" class="m-btn btn btn-warning"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-info"><i class="la la-scissors"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon2">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Sizing</h3>
                      <span class="m-section__sub">
	Instead of applying button sizing classes to every button in a group, just add <code>.m-btn-group m-btn-group--pill btn-group-*</code> to each <code>.m-btn-group m-btn-group--pill btn-group</code>, including each one when nesting multiple groups.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-lg" role="group" aria-label="Large button group">
                              <button type="button" class="btn btn-outline-success">Left</button>
                              <button type="button" class="btn btn-outline-success">Middle</button>
                              <button type="button" class="btn btn-outline-success">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="m-btn-group m-btn-group--pill btn-group" role="group" aria-label="Default button group">
                              <button type="button" class="btn btn-outline-warning">Left</button>
                              <button type="button" class="btn btn-outline-warning">Middle</button>
                              <button type="button" class="btn btn-outline-warning">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="m-btn-group m-btn-group--pill btn-group m-btn-group m-btn-group--pill btn-group-sm" role="group" aria-label="Small button group">
                              <button type="button" class="btn btn-outline-info">Left</button>
                              <button type="button" class="btn btn-outline-info">Middle</button>
                              <button type="button" class="btn btn-outline-info">Right</button>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Nesting</h3>
                      <span class="m-section__sub">
	Place a .m-btn-group m-btn-group--pill btn-group within another <code>.m-btn-group m-btn-group--pill btn-group</code> when you want dropdown menus mixed with a series of buttons.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="m-btn-group m-btn-group--pill btn-group" role="group" aria-label="Button group with nested dropdown">
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>

                              <div class="m-btn-group btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary m-btn m-btn--pill-last dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown1
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->
                  </div>
                  <!--end::Pill Buttons Tab-->

                  <!--begin::Air Buttons Tab-->
                  <div class="tab-pane" id="m_buttons_air" role="tabpanel">
                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Basic example	</h3>
                      <span class="m-section__sub">Basic button group examples</span>

                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-secondary">Left</button>
                                  <button type="button" class="m-btn btn btn-secondary">Middle</button>
                                  <button type="button" class="m-btn btn btn-secondary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-brand">Left</button>
                                  <button type="button" class="m-btn btn btn-brand">Middle</button>
                                  <button type="button" class="m-btn btn btn-brand">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-primary">Left</button>
                                  <button type="button" class="m-btn btn btn-primary">Middle</button>
                                  <button type="button" class="m-btn btn btn-primary">Right</button>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="btn-group m-btn-group m-btn-group--pill m-btn-group--air" role="group" aria-label="...">
                                  <button type="button" class="m-btn btn btn-success">Left</button>
                                  <button type="button" class="m-btn btn btn-success">Middle</button>
                                  <button type="button" class="m-btn btn btn-success">Right</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Buttons toolbar</h3>
                      <span class="m-section__sub">Combine sets of <code>btn-group m-btn-group m-btn-group--air</code> into a <code>btn-toolbar</code> for more complex components.</span>

                      <div class="m-section__content">

                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                              <div class="btn-group m-btn-group m-btn-group--air mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-bold"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-paperclip"></i></button>
                              </div>
                              <div class="btn-group m-btn-group m-btn-group--air mr-2" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              </div>
                              <div class="btn-group m-btn-group m-btn-group--air" role="group" aria-label="...">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-scissors"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-unlink"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                        <!--begin::Demo-->

                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group m-btn-group m-btn-group--air mr-2" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                                <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon">
                              </div>
                            </div>

                            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group m-btn-group m-btn-group--air" role="group" aria-label="First group">
                                <button type="button" class="m-btn btn btn-primary"><i class="la la-file-text-o"></i></button>
                                <button type="button" class="m-btn btn btn-success"><i class="la la-paperclip"></i></button>
                                <button type="button" class="m-btn btn btn-warning"><i class="la la-files-o"></i></button>
                                <button type="button" class="m-btn btn btn-info"><i class="la la-scissors"></i></button>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon2">@</span></div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-describedby="btnGroupAddon2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->

                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Sizing</h3>
                      <span class="m-section__sub">
	Instead of applying button sizing classes to every button in a group, just add <code>.btn-group m-btn-group m-btn-group--air-*</code> to each <code>.btn-group m-btn-group m-btn-group--air</code>, including each one when nesting multiple groups.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group m-btn-group m-btn-group--air btn-group m-btn-group m-btn-group--air-lg" role="group" aria-label="Large button group">
                              <button type="button" class="btn btn-outline-success">Left</button>
                              <button type="button" class="btn btn-outline-success">Middle</button>
                              <button type="button" class="btn btn-outline-success">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group m-btn-group m-btn-group--air" role="group" aria-label="Default button group">
                              <button type="button" class="btn btn-outline-warning">Left</button>
                              <button type="button" class="btn btn-outline-warning">Middle</button>
                              <button type="button" class="btn btn-outline-warning">Right</button>
                            </div>
                            <div class="m--space-10"></div>
                            <div class="btn-group m-btn-group m-btn-group--air btn-group m-btn-group m-btn-group--air-sm" role="group" aria-label="Small button group">
                              <button type="button" class="btn btn-outline-info">Left</button>
                              <button type="button" class="btn btn-outline-info">Middle</button>
                              <button type="button" class="btn btn-outline-info">Right</button>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Nesting</h3>
                      <span class="m-section__sub">
	Place a .btn-group m-btn-group m-btn-group--air within another <code>.btn-group m-btn-group m-btn-group--air</code> when you want dropdown menus mixed with a series of buttons.
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group m-btn-group m-btn-group--air" role="group" aria-label="Button group with nested dropdown">
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-file-text-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-floppy-o"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-header"></i></button>
                              <button type="button" class="m-btn btn btn-secondary"><i class="la la-italic"></i></button>

                              <div class="btn-group m-btn-group " role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->


                    <!--begin::Section-->
                    <div class="m-section">
                      <h3 class="m-section__heading">Vertical</h3>
                      <span class="m-section__sub">
	Make a set of buttons appear vertically stacked rather than horizontally
	</span>
                      <div class="m-section__content">
                        <!--begin::Demo-->
                        <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                          <div class="m-demo__preview">
                            <div class="btn-group btn-group-vertical m-btn-group m-btn-group--air" role="group" aria-label="Vertical button group">
                              <button type="button" class="btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                              <button type="button" class="btn btn-secondary">Button</button>
                              <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                  <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Demo-->
                      </div>
                    </div>
                    <!--end::Section-->					</div>
                  <!--end::Air Buttons Tab-->
                </div>
                <!--end::Tab content-->
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