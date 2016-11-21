
Ext.define('Xtion.view.user.UserCreate', {
    extend: 'Ext.form.Panel',
    xtype: 'user.add',

    id: 'add',

    bodyPadding: 15,
    height: '100%',

    defaultType: 'textfield',

    fieldDefaults: {
        labelWidth: 110,
        anchor: '100%'
    },

    items: [{
        xtype: 'textfield',
        fieldLabel: 'User Full Name',
        layout: 'hbox',
        combineErrors: true,
        defaultType: 'textfield',
        defaults: {
            hideLabel: 'true'
        }
    },{
        xtype: 'textfield',
        fieldLabel: 'Username',
        layout: 'hbox',
        combineErrors: true,
        defaultType: 'textfield',
        defaults: {
            hideLabel: 'true'
        }
    },{
        xtype: 'fieldcontainer',
        fieldLabel: 'Password',
        layout: 'hbox',
        combineErrors: true,
        defaultType: 'password',
        defaults: {
            hideLabel: 'true'
        },
        items: [{
            xtype: 'textfield',
            emptyText: 'Password',
            name: 'password',
            flex: 1,
            allowBlank: false
        },{
            xtype: 'textfield',
            emptyText: 'Retype Password',
            name: 'retypepassword',
            flex: 1,
            margin: '0 0 0 6',
            allowBlank: false
        }]
    },{
        xtype: 'fieldcontainer',
        fieldLabel: 'Role Name',
        layout: 'hbox',
        combineErrors: true,
        defaults: {
            hideLabel: 'true'
        },
        items: [{
            xtype: 'combobox',
            reference: 'roles',
            publishes: 'roleid',
            fieldLabel: 'Role',
            name: 'role',
            flex: 1,
            displayField: 'rolename',
            store: {
                type: 'rolestore'
            },

            minChars: 0,
            queryParam: 'search',
            queryMode: 'remote'
        },{
            xtype: 'combo',
            queryMode: 'local',
            value: 1,
            flex: 1,
            margin: '0 0 0 6',
            triggerAction: 'all',
            forceSelection: true,
            editable: false,
            fieldLabel: 'Monitoring',
            name: 'active',
            displayField: 'name',
            valueField: 'value',
            store: {
                fields: ['name', 'value'],
                data: [
                    {name : 'Active',   value: 1},
                    {name : 'Nonactive',  value: 0}
                ]
            }
        }]
    }]

});