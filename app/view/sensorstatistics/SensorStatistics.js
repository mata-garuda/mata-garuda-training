Ext.define('Xtion.view.sensorstatistics.SensorStatistics', {
    extend: 'Ext.container.Container',
    xtype: 'menu.sensorstatistics',

    requires: [
        'Xtion.view.sensorstatistics.SensorStatisticsController',
        'Xtion.view.sensorstatistics.SensorStatisticsTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'sensorstatistics',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'sensorstatisticsactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'sensorstatistics.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
