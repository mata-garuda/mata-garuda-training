Ext.define('Xtion.view.reportdaily.ReportDailyPage', {
    extend: 'Ext.Panel',
    xtype: 'reportdaily.page',
    controller: 'reportdaily',
    id: 'reportdaily_panel',

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
            id: "reportdaily_framedata",
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src: "/iframes/reports/daily"
            }
        }],

        initComponent: function() {
      		Ext.apply(this,{
      			tbar: [{
      				xtype: 'datefield',
      				name: 'dateStart',
      				id: 'reportdaily_date_picker',
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
      			},{
              xtype: 'datefield',
              name: 'dateEnd',
              id: 'reportdaily_enddate_picker',
              fieldLabel: 'Select Date',
              labelWidth: 65,
              format: 'Y-m-d',
              value: new Date()
            },{
              xtype: 'button',
              text: 'Date Range',
              margin: '0 0 0 10',
              listeners: {
                click: 'submitrangebtn'
              }
            },{
              xtype: 'tbfill'
            },
            ]
      		});

          this.callParent();
        }
});
