Ext.define('Xtion.view.main.Main', {
    extend: 'Ext.container.Container',
    xtype: 'app-main',
    plugins: 'viewport',

    requires: [
        'Xtion.view.layout.Header',
        'Xtion.view.layout.Panel',
        'Xtion.view.sidebar.Sidebar',
        'Xtion.view.main.MainController',
        'Xtion.view.main.MainModel'
    ],

    controller: 'main',
    viewModel: {
        type: 'main'
    },

    layout: {
        type: 'border'
    },

    items: [{
        region: 'center',
        xtype: 'layoutpanel'
    },{
        region: 'north',
        xtype: 'layoutheader'
    },{
        region: 'west',
        title: 'Navigation',
        iconCls: 'xtion-ico ic-module',
        scrollable: 'y',
        collapsible: true,
        split: true,
        width: 250,
        minWidth: 125,
        maxWidth: 250,
        items: [
            {
                xtype: 'sidebar'
            }
        ]
    }]

});
