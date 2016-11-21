Ext.define('Xtion.view.top20sig.Top20SigTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.top20sig.Top20SigGraph',
        'Ext.ux.TabReorderer'
    ],

    controller: 'top20sig',

    plugins: 'tabreorderer',
    xtype: 'top20sig.tab',

    id: 'top20sigTab',
    activeTab: 0,

    items: [
        {
            id: 'top20sig_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'top20sig.graph',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
