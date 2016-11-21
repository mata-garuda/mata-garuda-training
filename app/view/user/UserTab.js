Ext.define('Xtion.view.user.UserTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.user.UserList',
        'Ext.ux.TabReorderer'
    ],

    controller: 'user',

    plugins: 'tabreorderer',
    xtype: 'user.tab',

    id: 'userTab',
    activeTab: 0,

    items: [
        {
            id: 'user_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of User',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'user.list',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});