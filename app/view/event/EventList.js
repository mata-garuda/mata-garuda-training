Ext.define('Xtion.view.event.EventList', {
    extend: 'Ext.grid.Panel',
    xtype: 'event.list',

    requires: [
        'Ext.data.*',
        'Ext.grid.*',
        'Ext.util.*',
        'Ext.toolbar.Paging',
        'Ext.grid.filters.Filters',
        'Ext.ux.form.SearchField',
        'Xtion.model.event.Event',
        'Xtion.store.EventStore'
    ],

    layout: 'fit',

    plugins: 'gridfilters',

    initComponent: function() {

        var store = Ext.create('Xtion.store.EventStore');
        var val   = '';

        Ext.apply(this, {
            store: store,
            viewConfig: {
                trackOver: false,
                stripeRows: true
            },

            columns: [
                { header: 'ID.', dataIndex: 'cid', flex: 1, filter: 'number' },
                { header: 'Signature', dataIndex: 'signature', width: 120,renderer: function(str) { return store.highlight(str, val) }, filter: 'string' },
                { header: 'Time', dataIndex: 'time', width: 120, filter: 'string' },
                { header: 'IP Source', dataIndex: 'ipsource', flex: 1, filter: 'string' },
                { header: 'IP Destination', dataIndex: 'ipdestination', flex: 1, filter: 'string' },
                { header: 'Sensor', dataIndex: 'sensor', flex: 1, filter: 'string' },
                {
                    header: 'Severity',
                    dataIndex: 'severity',
                    width: 80,
                    filter: 'number',
                    renderer : function(val) {

                        if (val == 1) {
                            return '<span style="color:' + "green" + ';">' + val +'</span>';
                        } else {
                            return '<span style="color:' + "red" + ';">' + val +'</span>';
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
                onTriggerClick: function() {
                    this.reset();

                    store.getProxy().setExtraParam("search", this.getValue());
                    store.getProxy().setPageParam("page", 1);
                    store.getProxy().setStartParam("start", 0);
                    store.reload();

                    val = this.getValue();
                },
                listeners: {
                    render: function(c) {
                        c.getEl().on('keydown', function(e) {

                            if(e.keyCode == 13) {
                                store.getProxy().setExtraParam("search", this.getValue());
                                store.getProxy().setPageParam("page", 1);
                                store.getProxy().setStartParam("start", 0);
                                store.reload();

                                val = this.getValue();
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