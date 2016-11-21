Ext.define('Xtion.model.sidebar.Sidebar', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'menu_id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'controller', type: 'string' },
        { name: 'link', type: 'string' },
        { name: 'parent', type: 'int' },
        { name: 'iconCls', type: 'string',  defaultValue: null, persist: true },
        { name: 'index', type: 'int', defaultValue: -1, persist: true}
    ],

    proxy: {
        type: 'ajax',
        api: {
            read: 'index.php/menu/sidebar'
        }
    }

});