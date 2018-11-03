tables.php<!DOCTYPE html>
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
            <h1 class="h3">Draggable Portlets</h1>
          </div>
        </div>

        <div class="alert alert-info m-alert m-alert--icon m-alert--air m-alert--square m--margin-bottom-30" role="alert">
          <div class="m-alert__icon">
            <i class="flaticon-exclamation-1"></i>
          </div>
          <div class="m-alert__text">
            The draggable portlets powered with jQueryUI Sortable Plugin. You can use the jQueryUI Sortable API to store the portlet positions in your backend.
            <br>For more info please check out <a class="m-link m-link--brand m--font-bold" href="http://jqueryui.com/sortable/#portlets" target="_blank">the official documentation.</a>
          </div>
        </div>

        <div class="row ui-sortable" id="m_sortable_portlets">
          <div class="col-lg-6">
            <!--begin::Portlet-->

            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--mobile m-portlet--sortable" style="">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="la la-thumb-tack m--font-success"></i>
						</span>
                    <h3 class="m-portlet__head-text m--font-success">
                      Portlet Action Buttons
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="#" class="m-portlet__nav-link btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                        <i class="la la-tint"></i>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item">
                      <a href="#" class="m-portlet__nav-link btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                        <i class="la la-tags"></i>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                      <a href="#" class="m-portlet__nav-link btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill   m-dropdown__toggle">
                        <i class="la la-ellipsis-v"></i>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Quick Actions</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
              </div>
            </div><div class="m-portlet m-portlet--mobile m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-cogwheel-2"></i>
						</span>
                    <h3 class="m-portlet__head-text m--font-brand">
                      Portlet Action Buttons
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="#" class="m-portlet__nav-link btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                        <i class="la la-tint"></i>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item">
                      <a href="#" class="m-portlet__nav-link btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                        <i class="la la-tags"></i>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                      <a href="#" class="m-portlet__nav-link btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill   m-dropdown__toggle">
                        <i class="la la-ellipsis-v"></i>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Quick Actions</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--mobile m-portlet--sortable m-portlet--success m-portlet--head-solid-bg">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-placeholder-2"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Portlet Action Icons
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-close"></i></a>
                    </li>
                    <li class="m-portlet__nav-item">
                      <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-refresh"></i></a>
                    </li>
                    <li class="m-portlet__nav-item">
                      <a href="" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-angle-down"></i></a>
                    </li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                      <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-dropdown__toggle">
                        <i class="la la-ellipsis-v"></i>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Quick Actions</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-line-graph"></i>
						</span>
                    <h3 class="m-portlet__head-text m--font-success">
                      Dropdown Button
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                      <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn-sm  btn-metal m-btn m-btn--pill">
                        All
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Quick Actions</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!-- begin:Empty Portlet: sortable porlet required for each columns! -->
            <div class="m-portlet m-portlet--sortable-empty">
            </div>
            <!--end::Empty Portlet-->
          </div>
          <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs m-portlet--danger m-portlet--head-solid-bg m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Portlet Tabs
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs m-tabs-line  m-tabs-line--right" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        Logs
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        Messages
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        Settings
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--responsive-tablet-and-mobile m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-placeholder"></i>
						</span>
                    <h3 class="m-portlet__head-text">
                      Portlet Toolbar
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <div class="btn-group m-btn-group m-btn-group--pill" role="group" aria-label="...">
                    <button type="button" class="m-btn btn btn-brand">Left</button>
                    <button type="button" class="m-btn btn btn-brand">Middle</button>
                    <button type="button" class="m-btn btn btn-brand">Right</button>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs m-portlet--brand m-portlet--head-solid-bg m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Portlet Tabs <small>with lineawesome icons</small>
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand  m-tabs-line--right m-tabs-line-danger" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        <i class="la la-comments-o"></i>
                        Logs
                      </a>
                    </li>
                    <li class="nav-item dropdown m-tabs__item">
                      <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><i class="la la-map-marker"></i> Settings</a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Action</a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Another action</a>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Separated link</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered m-portlet--sortable">
              <div class="m-portlet__head ui-sortable-handle">
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        <i class="la la-cog"></i> Messages
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        <i class="la la-briefcase"></i> Settings
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        <i class="la la-bell-o"></i>Logs
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!-- begin:Empty Portlet: sortable porlet required for each columns! -->
            <div class="m-portlet m-portlet--sortable-empty">
            </div>
            <!--end::Empty Portlet-->
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
</div>
</body>
</html>