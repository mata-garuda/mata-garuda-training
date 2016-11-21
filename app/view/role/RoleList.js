Ext.define('Xtion.view.role.RoleList', {
    extend: 'Ext.grid.Panel',
    xtype: 'role.list',

    xstore: null,
    requires: [
        'Ext.data.*',
        'Ext.grid.*',
        'Ext.util.*',
        'Ext.toolbar.Paging',
        'Ext.grid.filters.Filters',
        'Xtion.model.role.Role',
        'Xtion.view.role.RoleModel',
        'Xtion.store.RoleStore'
    ],

    id: 'rolelist',

    layout: 'fit',

    viewModel: {
        type: 'rolemodel'
    },

    controller: 'role',

    plugins: 'gridfilters',

    getXStore: function () {
        return this.xstore;
    },

    setXStore: function (store) {
        this.xstore = store;
    },

    listeners: {
        select: 'onRowClick'
    },

    initComponent: function() {

        var store = Ext.create('Xtion.store.RoleStore');
        var val   = '';

        this.setXStore(store);

        Ext.apply(this, {
            store: store,
            viewConfig: {
                trackOver: false,
                stripeRows: true
            },
            
            columns: [
                { header: 'No.', dataIndex: 'roleid', width: 30, filter: 'number' },
                { header: 'Name', dataIndex: 'rolename', flex: 1, renderer: function(str) { return store.highlight(str, val) }, filter: 'string' },
                { header: 'Description', dataIndex: 'roledescription', flex: 1, width: 120, filter: 'string' },
                {
                    header: 'Monitoring',
                    dataIndex: 'monitoring',
                    width: 30,
                    filter: 'number',
                    flex: 1,
                    renderer : function(val) {

                        var out = "";

                        if (val == 1) {
                            return '<span style="color:' + "green" + ';">Active</span>';
                        } else {
                            return '<span style="color:' + "red" + ';">Inactive</span>';
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