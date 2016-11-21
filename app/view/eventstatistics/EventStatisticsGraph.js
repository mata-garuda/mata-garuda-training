Ext.define('Xtion.view.eventstatistics.EventStatisticsGraph', {
	extend: 'Ext.Panel',
	xtype: 'eventstatistics.graph',
	controller: 'eventstatistics',
	id: 'eventstatistics_panel',

	//batas

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

	//plugins: 'highcharts',

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
		id: "eventstatistics_framedata",
		xtype : "component",
		autoEl : {
			tag : "iframe",
			src: "/iframes/events/statistics"
		}
	}],

	initComponent: function() {
		var store = Ext.create('Xtion.store.EventStatisticsStore');
		var val   = '';

		Ext.apply(this,{
			tbar: [{
				xtype: 'datefield',
				name: 'dateStart',
				id: 'eventstatistics_date_picker',
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
