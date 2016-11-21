Ext.define('Xtion.view.menu.MenuList', {
    extend: 'Ext.grid.Panel',
    xtype: 'menu.list',

    requires: [
        'Ext.data.*',
        'Ext.grid.*',
        'Ext.util.*',
        'Ext.toolbar.Paging',
        'Ext.ux.form.SearchField',
        'Xtion.model.menu.Menu',
        'Xtion.store.MenuStore',
        'Xtion.view.main.MainModel'
    ],

    layout: 'fit',

    initComponent: function() {

        var store = Ext.create('Xtion.store.MenuStore');
        var val   = '';

        Ext.apply(this, {
            store: store,
            viewConfig: {
                trackOver: false,
                stripeRows: true
            },

            columns: [
                { header: 'No.', dataIndex: 'menuid', width: 30},
                { header: 'Name', dataIndex: 'menuname', flex: 1, renderer: function(str) { return store.highlight(str, val) }},
                { header: 'Description', dataIndex: 'menudescription', renderer: function(str) { return store.highlight(str, val)}, width: 120},
                { header: 'Alias', dataIndex: 'menualias', width: 120, renderer: function(str) { return store.highlight(str, val)}},
                { header: 'Code', dataIndex: 'menucode', flex: 1, renderer: function(str) { return store.highlight(str, val) }},
                {
                    header: 'Active',
                    dataIndex: 'menuactive',
                    width: 80,
                    renderer : function(val) {

                        var out = "";

                        if (val == 1) {
                            return '<span style="color:' + "green" + ';">Enable</span>';
                        } else {
                            return '<span style="color:' + "red" + ';">Disable</span>';
                        }
                    }
                }
            ],

            tbar: [{
                text: 'Show Sort',
                enableToggle: true,
                iconCls: 'xtion-ico ic-sort'
            },{
                text: 'Show Group',
                enableToggle: true,
                iconCls: 'xtion-ico ic-group'
            },{
                text: 'Show Custom Search',
                enableToggle: true,
                iconCls: 'xtion-ico ic-filter'
            },{
                xtype: 'tbfill'
            },{
                xtype: 'searchfield',
                store: store,
                listeners: {
                    render: function(c) {
                        c.getEl().on('keydown', function(e) {

                            if(e.keyCode == 13) {
                                val = this.getValue();

                                store.getProxy().setExtraParam("query", val);
                                store.getProxy().setExtraParam("page", 1);
                                store.getProxy().setExtraParam("start", 0);
                                store.reload();
                            }

                        }, c);

                        c.getEl().on('click', function(e) {

                            if(e.target.className === 'x-form-trigger x-form-trigger-toolbar x-form-clear-trigger x-form-clear-trigger-toolbar  x-form-trigger-focus x-form-trigger-over') {
                                val = '';

                                store.getProxy().setExtraParam("query", '');
                                store.getProxy().setExtraParam("page", 1);
                                store.getProxy().setExtraParam("start", 0);
                                store.reload();
                            }

                            if(e.target.className === 'x-form-trigger x-form-trigger-toolbar x-form-search-trigger x-form-search-trigger-toolbar  x-form-trigger-focus x-form-trigger-over') {
                                val = this.getValue();

                                store.getProxy().setExtraParam("query", val);
                                store.getProxy().setExtraParam("page", 1);
                                store.getProxy().setExtraParam("start", 0);
                                store.reload();
                            }

                        }, c);
                    }
                }
            }],

            bbar: Ext.create('Ext.PagingToolbar', {
                store: store,
                displayInfo: true,
                displayMsg: 'Displaying topics {0} - {1} of {2}',
                emptyMsg: "No roles to display"
            })

        });

        this.callParent();
    }

});