
Ext.define('Xtion.view.top20sig.Top20Sig', {
    extend: 'Ext.container.Container',
    xtype: 'menu.top20sig',

    requires: [
        'Xtion.view.top20sig.Top20SigController',
        'Xtion.view.top20sig.Top20SigTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'top20sig',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'top20sigactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'top20sig.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
