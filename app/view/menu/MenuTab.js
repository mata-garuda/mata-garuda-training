Ext.define('Xtion.view.menu.MenuTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.menu.MenuList',
        'Ext.ux.TabReorderer'
    ],

    controller: 'menu',

    plugins: 'tabreorderer',
    xtype: 'menu.tab',

    id: 'menuTab',
    activeTab: 0,

    items: [
        {
            id: 'menu_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Menu',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'menu.list',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});