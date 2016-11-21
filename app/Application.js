
Ext.Loader.setPath('Ext.ux', 'ext/packages/ux/classic/src');

Ext.define('Xtion.Application', {
    extend: 'Ext.app.Application',
    
    name: 'Xtion',

    views: [
        'Xtion.view.main.Main'
    ],
    
    requires: ['Ext.chart.*'],
    
    launch: function () {

        Ext.enableAriaPanels = false;
        Ext.enableAria = false;
        Ext.enableAriaButtons = false;

        var sourceId = location.href.split("source_id=")[1];

        if(sourceId === null || sourceId === undefined || sourceId === '') {
            window.location.href = 'index.php/auth/index';
        }
        else {

            Ext.Ajax.setDefaultHeaders({
                'X-API-KEY': sourceId
            });

            localStorage.setItem("appToken", sourceId);

            Ext.create({
                xtype: 'app-main'
            });
        }

    },

    onAppUpdate: function () {
        Ext.Msg.confirm('Application Update', 'This application has an update, reload?',
            function (choice) {
                if (choice === 'yes') {
                    window.location.reload();
                }
            }
        );
    }
});
