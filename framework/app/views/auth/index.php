<!DOCTYPE HTML>
<html manifest="">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="<?php echo base_url('assets/images/favicon/ic_logo_web.png'); ?>" rel="icon" type="image/png" sizes="16x16">

    <title>Authentication</title>

    <!-- include style and library javascript -->
    <link href="<?php echo base_url('assets/css/auth.css'); ?>" rel="stylesheet" type="text/css" />

</head>
<body>

    <div class="auth-container-overlay">

        <span class="auth-span-loader"></span>

        <div id="auth-animation-container" class="auth-container">
            <div class="auth-form-container">
                <?php echo form_open('auth/login', 'id="auth-generated-form" redirect="' . site_url() .'"'); ?>

                <div id="auth-form" class="auth-form auth-overflow-hidden">
                    <div class="auth-icon">
                        <img class="app-icon" src="<?php echo base_url('assets/images/favicon/ic_logo_auth.png'); ?>">
                    </div>

                    <div id="wait-loader" class="auth-waiting auth-hidden">
                        <img src="<?php echo base_url('assets/images/loader/waitloader.gif'); ?>">
                    </div>

                    <div id="auth-animation-content" style="left: -400px;">

                    <span class="field-tip">
                        <input id="username" name="username" class="auth-input auth-ic-user" type="text"/>
                        <span class="tip-content">USERNAME</span>
                    </span>

                        <span class="field-tip">
                        <input id="password" name="password" class="auth-input auth-ic-password" type="password"/>
                        <span class="tip-content">PASSWORD</span>
                    </span>

                        <button class="auth-button put-right" type="submit">Login</button>

                        <div class="switch-container">
                            <label class="switch">
                                <input name="remember" type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>

                        <span style="font-size: 12px;line-height: 26px;">Remember Session?</span>

                    </div>

                    <div class="clearfix"></div>
                </div>

                <?php echo form_close(); ?>

            </div>
            <div class="auth-shadow" />
        </div>
    </div>

    <div class="auth-message auth-hidden" style="top: -200px;">
        <img class="auth-btn-close-danger" src="<?php echo base_url('assets/images/icons/ic_close_danger.png'); ?>">
        <div class="auth-message-text"></div>
    </div>

    <div class="auth-overlay auth-hidden">
        <span class="auth-span-loader"></span>
        <div class="preloader" style="opacity: 0">
            <img src="<?php echo base_url('assets/images/loader/preloader.gif'); ?>" style="float: left;">
            <span class="auth-span-text">PLEASE WAIT...</span>
        </div>
    </div>

    <div class="auth-footer">Matagaruda - © 2016 <span style="color: #F1C905;">Politeknik Elektronika Negeri Surabaya</span></div>

    <!-- include javascript library -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/velocity.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/auth-handler.js'); ?>"></script>

</body>
</html>
