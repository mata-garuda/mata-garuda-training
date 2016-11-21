
Ext.define('Xtion.view.role.Role', {
    extend: 'Ext.container.Container',
    xtype: 'role.role',

    requires: [
        'Xtion.view.role.RoleController',
        'Xtion.view.role.RoleTab'
    ],

    layout: {
        type: 'border'
    },

    controller: 'role',

    padding: 4,

    style: {
        backgroundColor: '#ffffff',
    },

    items: [{
        region: 'north',
        id: 'roleactionbar',
        iconCls: 'xtion-ico ic-module',
        title: 'Action',
        collapsible: true,
        bodyStyle: {
            backgroundColor: '#ebebeb'
        }
    },{
        region: 'center',
        xtype: 'role.tab',
        style: {
            'marginTop': '4px'
        }
    }],

    listeners: {
        boxready: 'loadViewActionbar'
    }

});