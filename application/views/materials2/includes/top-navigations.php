<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                        <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo"><?php echo $this->lang->line('moduleTitle_label'); ?></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <span class="bmd-form-group">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="<?php echo $this->lang->line('search_label'); ?>...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </span>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="material-icons">dashboard</i>
                            <p class="d-lg-none d-md-block">
                                Stats
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <select class="nav-link basic-selec2" class="form-control" onchange="javascript:window.location.href='<?php echo base_url(); ?>MultiLanguageSwitcher/switch/'+this.value;">
                            <option value="english" <?php if ($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                            <option value="bengali" <?php if ($this->session->userdata('site_lang') == 'bengali') echo 'selected="selected"'; ?>>Bengali</option>
                            <option value="hindi" <?php if ($this->session->userdata('site_lang') == 'hindi') echo 'selected="selected"'; ?>>Hindi</option>
                            <option value="french" <?php if ($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>French</option>
                            <option value="german" <?php if ($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>German</option>
                        </select>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">
                                Some Actions
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                <?php echo $this->lang->line('header_account_label'); ?>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>common/userAccount"><?php echo $this->lang->line('header_profile_label'); ?></a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>common/globalSettings"><?php echo $this->lang->line('header_settings_label'); ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>logout"><?php echo $this->lang->line('header_logout_label'); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>