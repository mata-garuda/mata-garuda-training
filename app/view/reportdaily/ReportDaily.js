Ext.define('Xtion.view.reportdaily.ReportDaily', {
    extend: 'Ext.container.Container',
    xtype: 'menu.reportdaily',

    requires: [
        'Xtion.view.reportdaily.ReportDailyController',
        'Xtion.view.reportdaily.ReportDailyTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'reportdaily',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'reportdailyactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'reportdaily.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
