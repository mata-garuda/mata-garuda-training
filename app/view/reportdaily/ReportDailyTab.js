Ext.define('Xtion.view.reportdaily.ReportDailyTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.reportdaily.ReportDailyPage',
        'Ext.ux.TabReorderer'
    ],

    controller: 'reportdaily',

    plugins: 'tabreorderer',
    xtype: 'reportdaily.tab',

    id: 'reportdailyTab',
    activeTab: 0,

    items: [
        {
            id: 'reportdaily_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'reportdaily.page',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
