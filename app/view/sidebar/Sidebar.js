Ext.define('Xtion.view.sidebar.Sidebar', {
    extend: 'Ext.tree.Panel',

    requires: [
        'Xtion.model.sidebar.Sidebar',
        'Ext.tree.*',
        'Ext.data.*'
    ],

    controller: 'main',

    xtype: 'sidebar',
    useArrows: true,
    border: false,

    columns: [{
        header: 'Name',
        height: 0,
        xtype: 'treecolumn',
        dataIndex: 'name',
        border: false,
        flex: 1
    }],

    listeners: {
        select: 'onItemMenuSelected'
    },

    initComponent: function() {
        Ext.apply(this, {
            store: new Ext.data.TreeStore({

                model: Ext.create('Xtion.model.sidebar.Sidebar'),

                root: {
                    name: 'Main Menu',
                    iconCls: 'xtion-ico ic-home',
                    expanded: true
                }
            })
        });

        this.callParent();
    }

});