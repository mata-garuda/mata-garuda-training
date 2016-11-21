
Ext.define('Xtion.view.eventstatistics.EventStatistics', {
    extend: 'Ext.container.Container',
    xtype: 'menu.eventstatistics',

    requires: [
        'Xtion.view.eventstatistics.EventStatisticsController',
        'Xtion.view.eventstatistics.EventStatisticsTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'eventstatistics',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'eventstatisticsactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'eventstatistics.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
