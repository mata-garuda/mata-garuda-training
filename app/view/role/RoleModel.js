Ext.define('Xtion.view.role.RoleModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.rolemodel',

    stores: {
        // Define a store of Role records that links to the Session.
        roles: {
            model: Ext.create('Xtion.model.role.Role'),
            autoLoad: true,
            session: true
        }
    }
});