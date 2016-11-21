Ext.define('Xtion.view.sensorstatistics.SensorStatisticsTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.sensorstatistics.SensorStatisticsPage',
        'Ext.ux.TabReorderer'
    ],

    controller: 'sensorstatistics',

    plugins: 'tabreorderer',
    xtype: 'sensorstatistics.tab',

    id: 'sensorstatisticsTab',
    activeTab: 0,

    items: [
        {
            id: 'sensorstatistics_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'sensorstatistics.page',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
