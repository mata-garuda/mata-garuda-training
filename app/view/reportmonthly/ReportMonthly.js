Ext.define('Xtion.view.reportmonthly.ReportMonthly', {
    extend: 'Ext.container.Container',
    xtype: 'menu.reportmonthly',

    requires: [
        'Xtion.view.reportmonthly.ReportMonthlyController',
        'Xtion.view.reportmonthly.ReportMonthlyTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'reportmonthly',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'reportmonthlyactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'reportmonthly.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
