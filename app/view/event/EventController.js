Ext.define('Xtion.view.event.EventController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.event',
    
    onRefreshClick: function () {

    },

    onTabChange: function(tabPanel, newTab, oldTab, eOpts)  {

        switch (newTab.id) {
            case 'event_tab_list':
                this.loadViewActionbar();
                break;
            default: break;
        }

    },

    loadViewActionbar: function () {

        var actionbar = Ext.getCmp("eventactionbar");

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
            }]);

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
