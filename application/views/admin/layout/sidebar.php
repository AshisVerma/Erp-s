<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="<?php echo base_url() ?>/public/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?php echo base_url() ?>/public/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="#">
              <span class="btn btn-primary">+ Create new</span>
            </a>
          </li>
          <li class="nav-item dropdown d-none d-lg-flex">
            <div class="nav-link">
              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item font-weight-medium" href="#">
                  French
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Espanol
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Latin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Arabic
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
              <span class="count">25</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url() ?>/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url() ?>/public/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url() ?>/public/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url() ?>/public/images/faces/face5.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?php echo base_url() ?>/public/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="<?php echo base_url() ?>/public/images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Jane
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
         
         
          
         
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">PRODUCT</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?=site_url('category')?>">CATEGORY</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('brand')?>">BRAND</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('models')?>">MODEL</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('product/list')?>">PRODUCT LIST</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?=site_url('product')?>">ADD PRODUCT</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('unit')?>">UNIT TYPE</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('category/view_category')?>">VARIENT</a></li>
               
              </ul>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-columns menu-icon"></i>
              <span class="menu-title">SALE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('/feetype')?>">SALE</a></li>
                 <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('/feecategory')?>">SALE RETURN </a></li>
               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">CONTACTS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('contact') ?>">ADD CONTACTS</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">CUSTOMER</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">SUPPLIER</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">SETTINGS</a></li>
               
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="fas fa-clipboard-list menu-icon"></i>
              <span class="menu-title">INVENTORY</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">ADD OPENING STOCK</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">RECIEVE YOUR PROJECT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">PROJECT COSTING(SALE)</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">STOCK TRANSFER</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">PRODUCT MOVEMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">STOCK ADJUSTMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">PRODUCT INFO</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="fab fa-wpforms menu-icon"></i>
              <span class="menu-title">PURCHASE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">PURCHASE ORDER</a></li>                
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">STOCK ALERT</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">PURCHASE RETURN LIST</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">CNF</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="fas fa-pen-square menu-icon"></i>
              <span class="menu-title">ACCOUNT</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">ADD EXPENSE</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">EXPENSE LIST</a></li>
                 <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">ADD INCOMES</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">INCOMES LIST</a></li>
                   <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">BANK ACCOUNT</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">OPENING BALANCE</a></li>
                     <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">CHART OF ACCOUNT</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">REPORT</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">TRANSACTION</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">STATEMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">PROFIT & LOSS</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">ACCOUNT BALANCE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">INCOME BY CUSTOMER</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">EXPENSE BY SUPPLIER</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">SALES TAX</a></li>
                
              </ul>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#hr" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">HUMAN RESOURCE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="hr">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('staff') ?>">STAFF</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('role') ?>">ROLE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">DEPARTMENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">ATTENDENCE </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">EVENT</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">PAYROLL</a></li>
                 <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">PAYROLL HISTORY</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">LOAD APPLY</a></li>
                 <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">LOAD HISTORY</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">LOAD APPROVAL</a></li>
                
              </ul>
              </div>

          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">LEAVE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="leave">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">LEAVE TYPE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">LEAVE DEFINE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">APPLY LEAVE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">APPROVE LEAVE REQUEST</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">PENDING LEAVE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">HOLIDAY SETUP</a></li>
                 <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">CARRY FORWARD</a></li>
               
                
              </ul>
              </div>
              
          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#system" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-cog menu-icon"></i>
              <span class="menu-title">SYSTEM SETTING</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="system">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">SETTINGS</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">PAYMENT METHOD SETTING</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">TAX</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">CITY</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">STATE</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">COUNTRY</a></li>
                 <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">CURRENCY</a></li>
                   <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">LANGUAGE</a></li>
               
                
              </ul>
              </div>
              
          </li>
        
          
          
         
          
        
          
         
         
        </ul>
      </nav>