Ext.define('Xtion.view.reportannually.ReportAnnuallyPage', {
    extend: 'Ext.Panel',
    xtype: 'reportannually.page',
    controller: 'reportannually',
    id: 'reportannually_panel',

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
            id: "reportannually_framedata",
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src: "/iframes/reports/annually"
            }
        }],

        initComponent: function() {
      		Ext.apply(this,{
      			tbar: [{
      				xtype: 'datefield',
      				name: 'dateStart',
      				id: 'reportannually_date_picker',
      				fieldLabel: 'Select Date',
      				labelWidth: 65,
      				format: 'Y',
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
