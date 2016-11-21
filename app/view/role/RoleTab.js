Ext.define('Xtion.view.role.RoleTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.role.RoleList',
        'Ext.ux.TabReorderer'
    ],

    controller: 'role',

    plugins: 'tabreorderer',
    xtype: 'role.tab',

    id: 'roleTab',
    activeTab: 0,

    items: [
        {
            id: 'role_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Role',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'role.list',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});