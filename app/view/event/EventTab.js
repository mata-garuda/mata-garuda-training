Ext.define('Xtion.view.event.EventTab', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Xtion.view.event.EventList',
        'Ext.ux.TabReorderer'
    ],

    controller: 'event',

    plugins: 'tabreorderer',
    xtype: 'event.tab',

    id: 'eventTab',
    activeTab: 0,

    items: [
        {
            id: 'event_tab_list',
            region: 'center',
            xtype: 'panel',
            closable: false,
            iconCls: 'x-tree-icon x-tree-icon-leaf',
            title: 'List of Event',
            border: false,
            layout: 'fit',
            items: [{
                xtype: 'event.list',
                border: false
            }]
        }
    ],

    listeners: {
        tabchange: 'onTabChange'
    },

});