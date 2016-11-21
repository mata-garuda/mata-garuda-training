Ext.define('Xtion.view.eventstatistics.EventStatisticsList', {
    extend: 'Ext.grid.Panel',
    xtype: 'eventstatistics.list',

    requires: [
        'Ext.data.*',
        'Ext.grid.*',
        'Ext.util.*',
        'Ext.toolbar.Paging',
        'Ext.grid.filters.Filters',
        'Ext.ux.form.SearchField',
        'Xtion.model.event.Statistics',
        'Xtion.store.EventStatisticsStore'
    ],

    layout: 'fit',

    plugins: 'gridfilters',


    initComponent: function() {

        var store = Ext.create('Xtion.store.EventStatisticsStore');
        var val   = '';

        Ext.apply(this, {
            store: store,
            viewConfig: {
                trackOver: false,
                stripeRows: true
            },

            columns: [
                { header: 'Date', dataIndex: 'date', flex: 1, filter: 'number' },
                { header: 'H0', dataIndex: 'h0', flex: 1, filter: 'number' },
                { header: 'H1', dataIndex: 'h1', flex: 1, filter: 'number' },
                { header: 'H2', dataIndex: 'h2', flex: 1, filter: 'number' },
                { header: 'H3', dataIndex: 'h3', flex: 1, filter: 'number' },
                { header: 'H4', dataIndex: 'h4', flex: 1, filter: 'number' },
                { header: 'H5', dataIndex: 'h5', flex: 1, filter: 'number' },
                { header: 'H6', dataIndex: 'h6', flex: 1, filter: 'number' },
                { header: 'H7', dataIndex: 'h7', flex: 1, filter: 'number' },
                { header: 'H8', dataIndex: 'h8', flex: 1, filter: 'number' },
                { header: 'H9', dataIndex: 'h9', flex: 1, filter: 'number' },
                { header: 'H10', dataIndex: 'h10', flex: 1, filter: 'number' },
                { header: 'H11', dataIndex: 'h11', flex: 1, filter: 'number' },
                { header: 'H12', dataIndex: 'h12', flex: 1, filter: 'number' },
                { header: 'H13', dataIndex: 'h13', flex: 1, filter: 'number' },
                { header: 'h14', dataIndex: 'h14', flex: 1, filter: 'number' },
                { header: 'H15', dataIndex: 'h15', flex: 1, filter: 'number' },
                { header: 'H16', dataIndex: 'h16', flex: 1, filter: 'number' },
                { header: 'H17', dataIndex: 'h17', flex: 1, filter: 'number' },
                { header: 'H18', dataIndex: 'h18', flex: 1, filter: 'number' },
                { header: 'H19', dataIndex: 'h19', flex: 1, filter: 'number' },
                { header: 'H20', dataIndex: 'h20', flex: 1, filter: 'number' },
                { header: 'H21', dataIndex: 'h21', flex: 1, filter: 'number' },
                { header: 'H22', dataIndex: 'h22', flex: 1, filter: 'number' },
                { header: 'H23', dataIndex: 'h23', flex: 1, filter: 'number' },
                /*
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
                */
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
