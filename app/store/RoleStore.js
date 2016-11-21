Ext.define('Xtion.store.RoleStore', {
    extend: 'Ext.data.Store',

    alias: 'store.rolestore',
    model: 'Xtion.model.role.Role',

    autoLoad: true,

    pageSize: 50,
    remoteSort: true,

    highlight: function (str, val) {

        if(val != '') {
            var temp = str;

            var startIndex = str.toLowerCase().indexOf(val.toLowerCase());
            var lastIndex  = -1;
            var find       = '';

            if(startIndex >= 0) {
                lastIndex = (startIndex + val.length) > str.length ? str.length : (startIndex + val.length);

                find = str.substring(startIndex, lastIndex);

                str  = temp.replace(find, '<span style="background-color:' + "yellow" + ';color: #111;border: 1px solid #333;">' + find +'</span>');

            }
        }

        return str;
    }
    
});