Ext.define('Xtion.view.top20proto.Top20ProtoGraph', {
    extend: 'Ext.Panel',
    xtype: 'top20proto.graph',
    controller: 'top20proto',
    id: 'top20proto_panel',

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
            id: "top20proto_framedata",
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src: "/iframes/statistics/top20proto"
            }
        }],

        initComponent: function() {
      		Ext.apply(this,{
      			tbar: [{
      				xtype: 'datefield',
      				name: 'dateStart',
      				id: 'top20proto_date_picker',
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
