Ext.define('Xtion.view.reportannually.ReportAnnuallyTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.reportannually.ReportAnnuallyPage',
        'Ext.ux.TabReorderer'
    ],

    controller: 'reportannually',

    plugins: 'tabreorderer',
    xtype: 'reportannually.tab',

    id: 'reportannuallyTab',
    activeTab: 0,

    items: [
        {
            id: 'reportannually_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'reportannually.page',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
