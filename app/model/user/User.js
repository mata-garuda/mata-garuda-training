Ext.define('Xtion.model.user.User', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'userid', type: 'int' },
        { name: 'roleid', type: 'int' },
        { name: 'username', type: 'string' },
        { name: 'userpassword', type: 'string' },
        { name: 'userfullname', type: 'string' },
        { name: 'useraddress', type: 'string' },
        { name: 'userphone', type: 'string' },
        { name: 'useractive', type: 'boolean' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            create: 'index.php/user/add',
            read: 'index.php/user/get',
            update: 'index.php/user/update',
            destroy: 'index.php/user/delete'
        },
        reader: {
            type: 'json',
            rootProperty: 'data',
            successProperty: 'success'
        }
    }

});