Ext.define('Xtion.model.role.Role', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'roleid', type: 'int' },
        { name: 'rolename', type: 'string' },
        { name: 'roledescription', type: 'string' },
        { name: 'monitoring', type: 'int' }
    ],
    
    idProperty: 'roleid',

    proxy: {
        type: 'ajax',
        api: {
            create: 'index.php/role/create',
            read: 'index.php/role/get',
            update: 'index.php/role/update',
            destroy: 'index.php/role/delete'
        },
        reader: {
            type: 'json',
            rootProperty: 'data',
            successProperty: 'success'
        }
    }

});