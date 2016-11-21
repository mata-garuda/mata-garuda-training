Ext.define('Xtion.view.top20sig.Top20SigGraph', {
    extend: 'Ext.Panel',
    xtype: 'top20sig.graph',
    controller: 'top20sig',
	id: 'top20sig_panel',

    width : 1100,
        height: 700,
        layout : 'fit',
        bodyStyle: {
            top: '25px',
            left: '80px',
            zindex: '1'
        },
        frame: false,
        border: false,
        closable: false,
        //renderTo: 'eventstatistics_tab_list',
        items : [{
            frame: false,
            border: false,
            xtype : "component",
			id: "top20sig_framedata",
            autoEl : {
                tag : "iframe",
                src: "/iframes/statistics/top20sig"
            }
        }],

		initComponent: function() {
			//var store = Ext.create('Xtion.store.EventStatisticsStore');
			//var val   = '';

			Ext.apply(this,{
				tbar: [{
					xtype: 'datefield',
					name: 'dateStart',
					id: 'top20sig_date_picker',
					fieldLabel: 'Select Date',
					labelWidth: 65,
					format: 'Y-m-d',
					value: new Date()
				},{
					xtype: 'button',
					text: 'Submit',
					margin: '0 0 0 10',
					listeners: {
						click: 'submitbtn'
					}
				},{
					xtype: 'tbfill'
				}]
			});


			this.callParent();
		}
});
