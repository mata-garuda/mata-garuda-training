
Ext.define('Xtion.view.role.RoleCreate', {
    extend: 'Ext.form.Panel',
    xtype: 'role.add',

    id: 'add',

    bodyPadding: 15,
    height: '100%',

    defaultType: 'textfield',

    fieldDefaults: {
        labelWidth: 110,
        anchor: '100%'
    },

    items: [{
        xtype: 'fieldcontainer',
        fieldLabel: 'Role Name',
        layout: 'hbox',
        combineErrors: true,
        defaultType: 'textfield',
        defaults: {
            hideLabel: 'true'
        },
        items: [{
            xtype: 'textfield',
            emptyText: 'Name',
            name: 'rolename',
            flex: 1,
            allowBlank: false
        },{
            xtype: 'textfield',
            emptyText: 'Description',
            name: 'roledescription',
            flex: 1,
            margin: '0 0 0 6',
            allowBlank: false
        }]
    },{
        width: 75,
        xtype: 'combo',
        queryMode: 'local',
        value: 1,
        triggerAction: 'all',
        forceSelection: true,
        editable: false,
        fieldLabel: 'Monitoring',
        name: 'monitoring',
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

});