Ext.define('Xtion.view.reportmonthly.ReportMonthlyPage', {
    extend: 'Ext.Panel',
    xtype: 'reportmonthly.page',
    controller: 'reportmonthly',
    id: 'reportmonthly_panel',

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
            id: "reportmonthly_framedata",
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src: "/iframes/reports/monthly"
            }
        }],

        initComponent: function() {
      		Ext.apply(this,{
      			tbar: [{
      				xtype: 'datefield',
      				name: 'dateStart',
      				id: 'reportmonthly_date_picker',
      				fieldLabel: 'Select Date',
      				labelWidth: 65,
      				format: 'Y-m',
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
