
Ext.define('Xtion.view.menu.Menu', {
    extend: 'Ext.container.Container',
    xtype: 'menu.menu',

    requires: [
        'Xtion.view.menu.MenuController',
        'Xtion.view.menu.MenuTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'menu',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'menuactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'menu.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});