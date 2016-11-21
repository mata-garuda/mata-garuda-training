Ext.define('Xtion.view.eventstatistics.EventStatisticsController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.eventstatistics',

    onAxisLabelRender: function (axis, label, layoutContext) {
        return Ext.util.Format.number(label, '0.0');
    },

    onSeriesTooltipRender: function(tooltip, record, item) {
        var fieldIndex = Ext.Array.indexOf(item.series.getYField(), item.field),
            browser = item.series.getTitle()[fieldIndex];

        tooltip.setHtml(browser + ' on ' + record.get('month') + ': ' +
            record.get(item.field) + '%');
    },

    onColumnRender: function (v) {
        return v + '%';
    },

    onPreview: function () {
        var chart = this.lookupReference('chart');
        chart.preview();
    },

	submitbtn: function(){
		var txt = Ext.getCmp('eventstatistics_date_picker').getValue();
		var oldDate = new Date(txt);
		var date = oldDate.getUTCFullYear()+"-"+('0' + (oldDate.getMonth()+1)).slice(-2)+"-"+('0' + oldDate.getDate()).slice(-2);
		var frame = Ext.getCmp("eventstatistics_panel");
		if(frame != null){
			frame.removeAll();
		}
		var uri = "/iframes/events/statistics/"+date+"/";
		frame.add([{
			layout: 'fit',
			items : [{
				frame: false,
				border: false,
				id: "eventstatistics_framedata",
				xtype : "component",
				autoEl : {
					tag : "iframe",
					src: uri
				}
			}]
		}]);
    },

    loadViewActionbar: function () {

        var actionbar = Ext.getCmp("eventstatisticsactionbar");

        if(actionbar != null) {

            actionbar.removeAll();

            actionbar.add([{
                xtype: 'button',
                iconCls: 'xtion-btn ic-refresh',
                text: 'Refresh',
                scale:'large',
                iconAlign: 'top',
                style: {
                    marginTop: '8px',
                    marginLeft: '8px',
                    marginBottom: '8px'
                },
                listeners: {
                    click: 'onRefreshClick'
                }
            },{
                xtype: 'button',
                iconCls: 'xtion-btn ic-print',
                text: 'Print',
                scale:'large',
                iconAlign: 'top',
                style: {
                    marginTop: '8px',
                    marginLeft: '8px',
                    marginBottom: '8px'
                }
            },{
                xtype: 'button',
                iconCls: 'xtion-btn ic-export',
                text: 'Export',
                scale:'large',
                iconAlign: 'top',
                style: {
                    marginTop: '8px',
                    marginLeft: '8px',
                    marginBottom: '8px'
                }
            },{
                xtype: 'button',
                iconCls: 'xtion-btn ic-calendar',
                text: 'Time Filter',
                scale:'large',
                iconAlign: 'top',
                style: {
                    marginTop: '8px',
                    marginLeft: '8px',
                    marginBottom: '8px'
                },
                listeners: {
                  click: 'calendar'
                }
            }/*,{
        xtype: 'container',
        layout: 'hbox',
        margin: '0 0 20 0',
        items: [{
            title: 'Date Picker',
            margin: '0 20 0 0',
            items: {
                xtype: 'datepicker'
            }
        }, {
            title: 'Month Picker',
            items: {
                xtype: 'monthpicker'
            }
        }]
    } */

          ]);

        }

    },

    showToast: function(s, t) {
        Ext.toast({
            html: s,
            title: t,
            closable: true,
            align: 'br',
            slideInDuration: 400,
            style: {
                border: 'none',
                padding: '0px',
                backgroundColor: '#e8e8e8',
                boxShadow: '0px 0px 10px rgba(0,0,0,.2)'
            }
        });
    }
});
