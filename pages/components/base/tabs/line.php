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
            <h1 class="h3">Line Tabs</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Default Line Tabs
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <ul class="nav nav-tabs  m-tabs-line" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_1_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_1_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_1_3" role="tab">Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_tabs_1_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Line Tabs States
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_2_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_2_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_2_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_2_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_2_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_2_3" role="tab">Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_2_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                  </div>
                  <div class="tab-pane" id="m_tabs_2_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                  </div>
                  <div class="tab-pane" id="m_tabs_2_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.
                  </div>
                </div>

                <div class="m-separator m-separator--dashed"></div>

                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--primary" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_3_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_3_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_3_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_3_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_3_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_3_3" role="tab">Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_3_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                  </div>
                  <div class="tab-pane" id="m_tabs_3_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                  </div>
                  <div class="tab-pane" id="m_tabs_3_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.
                  </div>
                </div>

                <div class="m-separator m-separator--dashed"></div>

                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--danger" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_46_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_4_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_4_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_4_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_4_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_4_3" role="tab">Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_4_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                  </div>
                  <div class="tab-pane" id="m_tabs_4_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                  </div>
                  <div class="tab-pane" id="m_tabs_4_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.
                  </div>
                </div>

                <div class="m-separator m-separator--dashed"></div>

                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--warning" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_5_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_5_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_5_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_5_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_5_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_5_3" role="tab">Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_5_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                  </div>
                  <div class="tab-pane" id="m_tabs_5_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                  </div>
                  <div class="tab-pane" id="m_tabs_5_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Bold Line Tabs
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--success" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_6_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">Logs</a>
                  </li>
                </ul>
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
          </div>
          <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Icon Tabs
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_7_1" role="tab"><i class="la la-cloud-upload"></i> Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="la la-cog"></i> Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_7_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_7_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_7_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_7_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_3" role="tab"><i class="la la-puzzle-piece"></i> Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_7_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to.
                  </div>
                  <div class="tab-pane" id="m_tabs_7_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
                  </div>
                  <div class="tab-pane" id="m_tabs_7_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
                </div>

                <div class="m-separator m-separator--dashed"></div>

                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--primary" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_8_1" role="tab"><i class="fa fa-cloud-upload"></i> Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i> Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_8_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_8_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_8_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_8_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_8_3" role="tab"><i class="fa fa-puzzle-piece"></i> Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_8_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to.
                  </div>
                  <div class="tab-pane" id="m_tabs_8_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
                  </div>
                  <div class="tab-pane" id="m_tabs_8_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
                </div>

                <div class="m-separator m-separator--dashed"></div>

                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--brand" role="tablist">
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_9_1" role="tab"><i class="flaticon-time-2"></i> Messages</a>
                  </li>
                  <li class="nav-item dropdown m-tabs__item">
                    <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="flaticon-placeholder-2"></i> Settings</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_9_2">Action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_9_2">Another action</a>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_9_2">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="tab" href="#m_tabs_9_2">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_9_3" role="tab"><i class="flaticon-multimedia"></i> Logs</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="m_tabs_9_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to.
                  </div>
                  <div class="tab-pane" id="m_tabs_9_2" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
                  </div>
                  <div class="tab-pane" id="m_tabs_9_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Portlet Tabs
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs-line m-tabs-line--right" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_tab_content" role="tab">
                        <i class="flaticon-multimedia"></i> Messages
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_2_tab_content" role="tab">
                        <i class="flaticon-cogwheel-2"></i> Settings
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_3_tab_content" role="tab">
                        <i class="flaticon-lifebuoy"></i> Logs
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="tab-content">
                  <div class="tab-pane active" id="m_portlet_base_demo_1_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_2_tab_content" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_3_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
              <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs-line m-tabs-line--success m-tabs-line--2x" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_1_1_tab_content" role="tab">
                        <i class="la la-cog"></i> Messages
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_2_tab_content" role="tab">
                        <i class="la la-briefcase"></i> Settings
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_1_3_tab_content" role="tab">
                        <i class="la la-bell-o"></i>Logs
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="tab-content">
                  <div class="tab-pane active" id="m_portlet_base_demo_1_1_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_1_2_tab_content" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_1_3_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                  </div>
                </div>
              </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
              <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs-line m-tabs-line--danger m-tabs-line--2x m-tabs-line--right" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_portlet_base_demo_2_3_tab_content" role="tab">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>Messages
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_2_2_tab_content" role="tab">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>Settings
                      </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_portlet_base_demo_2_3_tab_content" role="tab">
                        <i class="fa fa-tags" aria-hidden="true"></i>Logs
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="tab-content">
                  <div class="tab-pane active" id="m_portlet_base_demo_2_3_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_2_2_tab_content" role="tabpanel">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <div class="tab-pane" id="m_portlet_base_demo_2_3_tab_content" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                  </div>
                </div>
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