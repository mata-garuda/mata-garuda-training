
Ext.define('Xtion.view.menu.MenuCreate', {
    extend: 'Ext.form.Panel',
    xtype: 'menu.add',

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
        fieldLabel: 'Name',
        layout: 'hbox',
        combineErrors: true,
        defaultType: 'textfield',
        defaults: {
            hideLabel: 'true'
        },
        items: [{
            xtype: 'textfield',
            emptyText: 'Name',
            name: 'name',
            flex: 1,
            allowBlank: false
        },{
            xtype: 'textfield',
            emptyText: 'Description',
            name: 'description',
            flex: 1,
            margin: '0 0 0 6',
            allowBlank: false
        }]
    },{
        xtype: 'textfield',
        fieldLabel: 'Controller',
        name: 'controller',
        width: '50%'
    },{
        xtype: 'textfield',
        fieldLabel: 'Link',
        name: 'link',
        width: '50%'
    },{
        xtype: 'combobox',
        reference: 'menus',
        publishes: 'menuid',
        fieldLabel: 'Select Parent',
        name: 'parent',
        flex: 2,
        displayField: 'menuname',
        store: {
            type: 'menustore'
        },

        minChars: 0,
        queryParam: 'search',
        queryMode: 'remote'
    },{
        width: 75,
        xtype: 'combo',
        queryMode: 'local',
        value: 1,
        triggerAction: 'all',
        forceSelection: true,
        editable: false,
        fieldLabel: 'Active',
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

});