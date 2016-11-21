Ext.define('Xtion.view.layout.Panel', {
    extend: 'Ext.tab.Panel',

    requires: [
        'Ext.ux.TabReorderer'
    ],

    plugins: 'tabreorderer',
    xtype: 'layoutpanel',

    id: 'tabContainer',
    activeTab: 0,

    items: [
        {
            xtype: 'panel',
            closable: false,
            paddingTop: 4,
            iconCls: 'xtion-ico ic-home',
            title: 'Home',
            layout: 'fit'
        }
    ]
});