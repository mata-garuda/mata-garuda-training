Ext.define('Xtion.view.top20proto.Top20ProtoController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.top20proto',

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
  		var txt = Ext.getCmp('top20proto_date_picker').getValue();
  		var oldDate = new Date(txt);
  		var date = oldDate.getUTCFullYear()+"-"+('0' + (oldDate.getMonth()+1)).slice(-2)+"-"+('0' + oldDate.getDate()).slice(-2);
  		var frame = Ext.getCmp("top20proto_panel");
  		if(frame != null){
  			frame.removeAll();
  		}
  		var uri = "/iframes/statistics/top20proto/"+date+"/";
  		frame.add([{
  			layout: 'fit',
  			items : [{
  				frame: false,
  				border: false,
  				id: "top20proto_framedata",
  				xtype : "component",
  				autoEl : {
  					tag : "iframe",
  					src: uri
  				}
  			}]
  		}]);
      },
});
