Ext.define('Xtion.view.role.RoleController', {
    extend: 'Ext.app.ViewController',

    id: 'rolecontroller',

    alias: 'controller.role',

    requires: [
        'Xtion.view.role.RoleCreate',
        'Xtion.view.role.RoleEdit'
    ],

    onAddClick: function (sender, record) {

        var x = Ext.getCmp('roleTab');

        var t = x.items.findBy(
            function (tab){
                return tab.id === 'role_tab_add';
            });

        if(!t) {

            this.loadCreateActionbar();

            t = x.add({
                id: 'role_tab_add',
                title: "Add Role",
                iconCls: "xtion-ico ic-add",
                closable: true,
                xtype: "role.add"
            });
        }

        x.setActiveTab(t);

    },

    onEditClick: function (sender, record) {

        var x = Ext.getCmp('roleTab');

        var list   = Ext.getCmp('rolelist');
        var getRow = list.getSelectionModel().getSelection()[0];

        var t = x.items.findBy(
            function (tab){
                return tab.id === 'role_tab_edit';
            });

        if(!t) {

            this.loadCreateActionbar();

            t = x.add({
                id: 'role_tab_edit',
                title: "Edit Role",
                iconCls: "xtion-ico ic-add",
                closable: true,
                xtype: "role.edit",
                viewModel: {
                    data: {
                        title:'Add Customer',
                        theRole: getRow
                    }
                }
            });
        }

        x.setActiveTab(t);

    },

    onRowClick: function (sender, record) {

        var x = Ext.getCmp('roleTab');
        var t = x.items.findBy(
            function (tab){
                return tab.id === 'role_tab_edit';
            });

        if(t) {
            var list   = Ext.getCmp('rolelist');
            var getRow = list.getSelectionModel().getSelection()[0];

            var form   = Ext.getCmp('role_tab_edit').getViewModel();
            form.set('theRole', getRow);
        }else{
            var rolebtnEdit = Ext.getCmp('rolebtnEdit');

            rolebtnEdit.setIconCls('xtion-btn ic-update');
            rolebtnEdit.enable();
        }

    },
    
    onRefreshClick: function () {

        var list   = Ext.getCmp('rolelist');
        list.getXStore().reload();

    },

    onTabChange: function(tabPanel, newTab, oldTab, eOpts)  {

        switch (newTab.id) {
            case 'role_tab_list':
                this.loadViewActionbar();
                break;
            case 'role_tab_add':
                this.loadCreateActionbar();
                break;
            case 'role_tab_edit':
                this.loadEditActionbar();
                break;
            default: break;
        }

    },

    loadViewActionbar: function () {

        var actionbar = Ext.getCmp("roleactionbar");

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
                id: 'rolebtnEdit',
                disabled: true,
                scale:'large',
                iconAlign: 'top',
                style: {
                    marginTop: '8px',
                    marginLeft: '8px',
                    marginBottom: '8px'
                },
                listeners: {
                    click: 'onEditClick'
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

        var actionbar = Ext.getCmp("roleactionbar");

        if(actionbar != null) {

            actionbar.removeAll();

            actionbar.add([{
                xtype: 'button',
                iconCls: 'xtion-btn ic-save',
                id: 'btnSaveCreate',
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

    loadEditActionbar: function () {

        var actionbar = Ext.getCmp("roleactionbar");

        if(actionbar != null) {

            actionbar.removeAll();

            actionbar.add([{
                xtype: 'button',
                iconCls: 'xtion-btn ic-save',
                text: 'Save',
                scale:'large',
                id: 'btnSaveUpdate',
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

    save: function (button) {

        var list   = Ext.getCmp('rolelist');

        if(button.getId()==='btnSaveUpdate'){

            var edit_tab   = Ext.getCmp('roleTab').getComponent('role_tab_edit'),
                form       = edit_tab.down('form');
                console.log(form.getValues());

            if(form){
                if(form.isValid()) {

                    list.getXStore().update(form.getValues());
                    list.getXStore().sync();
                    list.getXStore().reload();

                    this.showToast('You data is successfully save, click close if you want to exit', 'Successfully');
                }
            }
        }else if(button.getId()==='btnSaveCreate'){
            var form   = Ext.getCmp('roleTab').getComponent('role_tab_add');
            if(form){
                if(form.isValid()) {
                    list.getXStore().add(form.getValues());
                    list.getXStore().sync();
                    list.getXStore().reload();

                    this.showToast('You data is successfully save, click close if you want to exit', 'Successfully');
                }
            }
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
