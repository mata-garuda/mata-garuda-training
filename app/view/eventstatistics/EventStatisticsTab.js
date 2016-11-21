Ext.define('Xtion.view.eventstatistics.EventStatisticsTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.eventstatistics.EventStatisticsGraph',
        'Ext.ux.TabReorderer'
    ],

    controller: 'eventstatistics',

    plugins: 'tabreorderer',
    xtype: 'eventstatistics.tab',

    id: 'eventstatisticsTab',
    activeTab: 0,

    items: [
        {
            id: 'eventstatistics_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'eventstatistics.graph',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
