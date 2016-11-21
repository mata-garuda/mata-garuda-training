Ext.define('Xtion.view.top20proto.Top20Proto', {
    extend: 'Ext.container.Container',
    xtype: 'menu.top20proto',

    requires: [
        'Xtion.view.top20proto.Top20ProtoController',
        'Xtion.view.top20proto.Top20ProtoTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'top20proto',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'top20protoactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'top20proto.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});
