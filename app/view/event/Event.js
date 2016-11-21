
Ext.define('Xtion.view.event.Event', {
    extend: 'Ext.container.Container',
    xtype: 'menu.event',

    requires: [
        'Xtion.view.event.EventController',
        'Xtion.view.event.EventTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'event',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'eventactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'event.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});