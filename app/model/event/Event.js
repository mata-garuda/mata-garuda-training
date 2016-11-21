Ext.define('Xtion.model.event.Event', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'cid', type: 'int' },
        { name: 'sid', type: 'int' },
        { name: 'signature', type: 'string' },
        { name: 'time', type: 'string' },
        { name: 'ipsource', type: 'string' },
        { name: 'ipdestination', type: 'string' },
        { name: 'sensor', type: 'string' },
        { name: 'severity', type: 'int' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            read: 'index.php/event/get'
        },
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total',
            successProperty: 'success'
        }
    }

});