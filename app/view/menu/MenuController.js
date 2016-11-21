Ext.define('Xtion.view.menu.MenuController', {
	extend: 'Ext.app.ViewController',

	alias: 'controller.menu',

	requires: [
		'Xtion.view.menu.MenuCreate'
	],

	onAddClick: function (sender, record) {

		var x = Ext.getCmp('menuTab');

		var t = x.items.findBy(
			function (tab){
				return tab.id === 'menu_tab_add';
			});

			if(!t) {

				this.loadCreateActionbar();

				t = x.add({
					id: 'menu_tab_add',
					title: "Add Menu",
					iconCls: "xtion-ico ic-add",
					closable: true,
					xtype: "menu.add"
				});
			}

			x.setActiveTab(t);
			
		},

		onRefreshClick: function () {

		},

		onTabChange: function(tabPanel, newTab, oldTab, eOpts)  {

			switch (newTab.id) {
				case 'menu_tab_list':
				this.loadViewActionbar();
				break;
				case 'menu_tab_add':
				this.loadCreateActionbar();
				break;
				default: break;
			}

		},

		loadViewActionbar: function () {

			var actionbar = Ext.getCmp("menuactionbar");

			if(actionbar != null) {

				actionbar.removeAll();

				actionbar.add([{
					xtype: 'button',
					iconCls: 'xtion-btn ic-create',
					text: 'Add',
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					},
					listeners: {
						click: 'onAddClick'
					}
				},{
					xtype: 'button',
					iconCls: 'xtion-btn ic-update-disable',
					text: 'Edit',
					disabled: true,
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					}
				},{
					xtype: 'button',
					iconCls: 'xtion-btn ic-remove-disable',
					text: 'Delete',
					disabled: true,
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					}
				},{
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
				}]);

			}

		},

		loadCreateActionbar: function () {

			var actionbar = Ext.getCmp("menuactionbar");

			if(actionbar != null) {

				actionbar.removeAll();

				actionbar.add([{
					xtype: 'button',
					iconCls: 'xtion-btn ic-save',
					text: 'Save',
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					},
					listeners: {
						click: 'save'
					}
				},{
					xtype: 'button',
					iconCls: 'xtion-btn ic-save-close',
					text: 'Save Exit',
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					}
				},{
					xtype: 'button',
					iconCls: 'xtion-btn ic-remove',
					text: 'Exit',
					scale:'large',
					iconAlign: 'top',
					style: {
						marginTop: '8px',
						marginLeft: '8px',
						marginBottom: '8px'
					}
				}]);

			}
		},

		save: function () {

			var form   = Ext.getCmp('menuTab').getComponent('menu_tab_add');
			var encode = Ext.String.htmlEncode;
			var s      = '';

			if(form.isValid()) {
				Ext.iterate(form.getValues(), function(key, value) {
					value = encode(value);

					s += Ext.util.Format.format("{0} = {1}<br />", key, value);
				}, this);

				this.showToast('You data is successfully save, click close if you want to exit', 'Successfully');
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
