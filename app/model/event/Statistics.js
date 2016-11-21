Ext.define('Xtion.model.event.Statistics', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'date', type: 'string' },
        { name: 'h0', type: 'int' },
        { name: 'h1', type: 'int' },
        { name: 'h2', type: 'int' },
        { name: 'h3', type: 'int' },
        { name: 'h4', type: 'int' },
        { name: 'h5', type: 'int' },
        { name: 'h6', type: 'int' },
        { name: 'h7', type: 'int' },
        { name: 'h8', type: 'int' },
        { name: 'h9', type: 'int' },
        { name: 'h10', type: 'int' },
        { name: 'h11', type: 'int' },
        { name: 'h12', type: 'int' },
        { name: 'h13', type: 'int' },
        { name: 'h14', type: 'int' },
        { name: 'h15', type: 'int' },
        { name: 'h16', type: 'int' },
        { name: 'h17', type: 'int' },
        { name: 'h18', type: 'int' },
        { name: 'h19', type: 'int' },
        { name: 'h20', type: 'int' },
        { name: 'h21', type: 'int' },
        { name: 'h22', type: 'int' },
        { name: 'h23', type: 'int' },
        { name: 'counter', type: 'int' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            read: 'index.php/event/statistics'
        },
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total',
            successProperty: 'success'
        }
    }

});
