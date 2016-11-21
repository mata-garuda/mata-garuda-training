Ext.define('Xtion.view.reportdaily.ReportDailyController', {
	extend: 'Ext.app.ViewController',
	alias: 'controller.reportdaily',

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

	loadViewActionBar: function(){
		alert('ian keren!');
	},

	submitbtn: function(){
		var txt = Ext.getCmp('reportdaily_date_picker').getValue();
		var oldDate = new Date(txt);
		var date = oldDate.getUTCFullYear()+"-"+('0' + (oldDate.getMonth()+1)).slice(-2)+"-"+('0' + oldDate.getDate()).slice(-2);
		var frame = Ext.getCmp("reportdaily_panel");
		if(frame != null){
			frame.removeAll();
		}
		var uri = "/iframes/reports/daily/"+date+"/";
		frame.add([{
			layout: 'fit',
			items : [{
				frame: false,
				border: false,
				id: "reportdaily_framedata",
				xtype : "component",
				autoEl : {
					tag : "iframe",
					src: uri
				}
			}]
		}]);
	},
	submitrangebtn:  function(){
		var txt = Ext.getCmp('reportdaily_date_picker').getValue();
		var txtend = Ext.getCmp('reportdaily_enddate_picker').getValue();
		var oldDate = new Date(txt);
		var oldDateEnd = new Date(txtend);
		var date = oldDate.getUTCFullYear()+"-"+('0' + (oldDate.getMonth()+1)).slice(-2)+"-"+('0' + oldDate.getDate()).slice(-2);
		var enddate = oldDateEnd.getUTCFullYear()+"-"+('0' + (oldDateEnd.getMonth()+1)).slice(-2)+"-"+('0' + oldDateEnd.getDate()).slice(-2);
		var frame = Ext.getCmp("reportdaily_panel");
		if(frame != null){
			frame.removeAll();
		}
		var uri = "/iframes/reports/daily/"+date+"/"+enddate;
		frame.add([{
			layout: 'fit',
			items : [{
				frame: false,
				border: false,
				id: "reportdaily_framedata",
				xtype : "component",
				autoEl : {
					tag : "iframe",
					src: uri
				}
			}]
		}]);
	}
});
