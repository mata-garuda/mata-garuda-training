Ext.define('Xtion.model.menu.Menu', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'menuid', type: 'int' },
        { name: 'menuname', type: 'string' },
        { name: 'menudescription', type: 'string' },
        { name: 'menualias', type: 'string' },
        { name: 'menuicon', type: 'string' },
        { name: 'menucontroller', type: 'string' },
        { name: 'menulink', type: 'string' },
        { name: 'menuparent', type: 'int' },
        { name: 'menuactive', type: 'string' },
        { name: 'menucode', type: 'string' },
        { name: 'menuexpand', type: 'boolean' },
        { name: 'menuleaf', type: 'boolean' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            create: 'index.php/menu/add',
            read: 'index.php/menu/get',
            update: 'index.php/menu/update',
            destroy: 'index.php/menu/delete'
        },
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total',
            successProperty: 'success'
        }
    }

});