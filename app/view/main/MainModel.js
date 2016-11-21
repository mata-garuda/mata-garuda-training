/**
 * This class is the view model for the Main view of the application.
 */
Ext.define('Xtion.view.main.MainModel', {
    extend: 'Ext.app.ViewModel',

    alias: 'viewmodel.main',

    data: {
        appName: 'MATAGARUDA',
        appNameSupport: '<span class="xtion-app-name-support">V2</span>',
        appHeaderIcon: '<div><img src="assets/images/icons/ic_dashboard_48px.png" class="xtion-app-avatar" /></div>',
        appHeaderAvatar: '<div><img src="assets/images/avatar.jpg" class="xtion-app-avatar" /></div>',
        appHeaderConfig: '<div><img src="assets/images/icons/ic_config_48px.png" class="xtion-app-avatar" /></div>',
        appHeaderLogout: '<div><img src="assets/images/icons/ic_exit_48px.png" class="xtion-app-avatar" /></div>',
        appHeaderUser: '<b>HELLO</b>, DEVELOPER',
        appFooter: 'PT. Xtion Network Indonesia &copy; 2016',
        clearClass: 'x-form-trigger x-form-trigger-toolbar x-form-clear-trigger x-form-clear-trigger-toolbar  x-form-trigger-focus x-form-trigger-over',
        searchClass: 'x-form-trigger x-form-trigger-toolbar x-form-search-trigger x-form-search-trigger-toolbar  x-form-trigger-focus x-form-trigger-over'
    }

});