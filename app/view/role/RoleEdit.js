
Ext.define('Xtion.view.role.RoleEdit', {
    extend: 'Ext.form.Panel',
    xtype: 'role.edit',

    id: 'edit',

    bodyPadding: 15,
    height: '100%',

    defaultType: 'textfield',

    fieldDefaults: {
        labelWidth: 110,
        anchor: '100%'
    },

    items: [{
        xtype: 'form',
        border: false,
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
                bind: '{theRole.rolename}',
                allowBlank: false
            },{
                xtype: 'textfield',
                name: 'roleid',
                hidden: true,
                flex: 1,
                bind: '{theRole.roleid}',
                allowBlank: false
            },{
                xtype: 'textfield',
                emptyText: 'Description',
                name: 'roledescription',
                flex: 1,
                margin: '0 0 0 6',
                bind: '{theRole.roledescription}',
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
            bind: {
                store: {
                    fields: ['monitoring', 'value'],
                    data: [
                        {name : 'Active',   value: 1},
                        {name : 'Inactive',  value: 0}
                    ]
                }
            }
        }]
    }]
});