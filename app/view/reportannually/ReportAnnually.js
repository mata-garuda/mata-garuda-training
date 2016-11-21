Ext.define('Xtion.view.reportannually.ReportAnnually', {
    extend: 'Ext.container.Container',
    xtype: 'menu.reportannually',

    requires: [
        'Xtion.view.reportannually.ReportAnnuallyController',
        'Xtion.view.reportannually.ReportAnnuallyTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'reportannually',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'reportannuallyactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'reportannually.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
