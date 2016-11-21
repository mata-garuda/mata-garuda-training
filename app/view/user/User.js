
Ext.define('Xtion.view.user.User', {
    extend: 'Ext.container.Container',
    xtype: 'menu.user',

    requires: [
        'Xtion.view.user.UserController',
        'Xtion.view.user.UserTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'user',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'useractionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'user.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});