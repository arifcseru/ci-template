<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $pageTitle; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  <!-- endinject -->
  <!-- link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" /-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>public-theme/images/demo-logo.png" />
</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="<?php echo base_url(); ?>" class="brand-logo">
						<!-- img src="images/logo.svg" alt="logo"-->
						<img src="<?php echo base_url(); ?>public-theme/images/demo-logo.png" alt="logo">
					</a>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo base_url(); ?>adminpanel">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">desktop_mac</i>
                Dashboard
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="purchase-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Manage Purchase
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="purchase-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>supplier">
                      Supplier
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>purchase">
                      Purchase
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="product-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Product
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="product-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>product/form">
                      Add Product
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>product">
                      Manage Product
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>damageProduct">
                      Damage Product
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>category">
                      Category
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
             <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="order-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Order Process
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="order-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>order/form">
                      New Order
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>order">
                      Manage Order
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>invoice">
                      Manage Invoice
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="customer-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Customer
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="customer-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>customer/form">
                      New Customer
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>customer">
                      Manage Customer
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="customer-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Email Campaign
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="customer-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>emailCampaign/form">
                      New Email Campaign
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>emailCampaign">
                      Manage Email Campaign
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="customer-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Reports
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="customer-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>purchaseReports">
                      Purchase Reports
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>salesReports">
                      Sales Reports
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="settings-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Settings
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="settings-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>companyProfile/form">
                      New Company
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>companyProfile">
                      Manage Company
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="customer-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Employee Management
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="customer-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>employee/form">
                      New Employee
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo base_url(); ?>employee">
                      Manage Employee
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
           
            
            <!-- div class="mdc-list-item mdc-drawer-item purchase-link">
              <a href="https://www.bootstrapdash.com/product/material-admin/" target="_blank" class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" data-mdc-auto-init="MDCRipple">
                Upgrade To Pro
              </a>
            </div-->
          </nav>
        </div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
      <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
          <span class="mdc-toolbar__input">
            <div class="mdc-text-field">
              <input type="text" class="mdc-text-field__input" id="css-only-text-field-box" placeholder="Search anything...">
            </div>
          </span>
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
          <div class="mdc-menu-anchor">
            <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown" toggle-dropdown="notification-menu" data-mdc-auto-init="MDCRipple">
              <i class="material-icons">notifications</i>
              <span class="dropdown-count">3</span>
            </a>
            <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="notification-menu">
              <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                <li class="mdc-list-item" role="menuitem" tabindex="0">
                  <i class="material-icons mdc-theme--primary mr-1">email</i>
                  One unread message
                </li>
                <li class="mdc-list-item" role="menuitem" tabindex="0">
                  <i class="material-icons mdc-theme--primary mr-1">group</i>
                  One event coming up
                </li>
                <li class="mdc-list-item" role="menuitem" tabindex="0">
                  <i class="material-icons mdc-theme--primary mr-1">cake</i>
                  It's Aleena's birthday!
                </li>
              </ul>
            </div>
          </div>
          <div class="mdc-menu-anchor">
            <a href="<?php echo base_url(); ?>globalSettings" class="mdc-toolbar__icon mdc-ripple-surface" data-mdc-auto-init="MDCRipple">
              <i class="material-icons">widgets</i>
            </a>
          </div>
          <div class="mdc-menu-anchor mr-1">
            <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown" toggle-dropdown="logout-menu" data-mdc-auto-init="MDCRipple">
              <i class="material-icons">more_vert</i>
            </a>
            <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="logout-menu">
                <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                  <li class="mdc-list-item" role="menuitem" tabindex="0">
                    <a href="<?php echo base_url(); ?>userProfile"><i class="material-icons mdc-theme--primary mr-1">settings</i>User Profile</a>                    
                  </li>
                  <li class="mdc-list-item" role="menuitem" tabindex="0">
                    <a href="<?php echo base_url(); ?>changePassword"><i class="material-icons mdc-theme--primary mr-1">settings</i>Change Password</a>                    
                  </li>
                  <li class="mdc-list-item" role="menuitem" tabindex="0">
                    <a href="<?php echo base_url(); ?>logout"><i class="material-icons mdc-theme--primary mr-1">power_settings_new</i>Logout</a>                    
                  </li>
                </ul>
            </div>
          </div>
        </section>
      </div>
    </header>