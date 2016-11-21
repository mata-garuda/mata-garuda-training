Ext.define('Xtion.view.top20proto.Top20ProtoTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.top20proto.Top20ProtoGraph',
        'Ext.ux.TabReorderer'
    ],

    controller: 'top20proto',

    plugins: 'tabreorderer',
    xtype: 'top20proto.tab',

    id: 'top20protoTab',
    activeTab: 0,

    items: [
        {
            id: 'top20proto_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'top20proto.graph',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});
