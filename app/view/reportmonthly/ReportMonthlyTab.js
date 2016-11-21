Ext.define('Xtion.view.reportmonthly.ReportMonthlyTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.reportmonthly.ReportMonthlyPage',
        'Ext.ux.TabReorderer'
    ],

    controller: 'reportmonthly',

    plugins: 'tabreorderer',
    xtype: 'reportmonthly.tab',

    id: 'reportmonthlyTab',
    activeTab: 0,

    items: [
        {
            id: 'reportmonthly_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'reportmonthly.page',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
