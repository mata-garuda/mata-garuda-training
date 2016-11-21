Ext.define('Xtion.view.layout.Header', {
    extend: 'Ext.toolbar.Toolbar',
    xtype: 'layoutheader',

    baseCls: 'xtion-toolbar',

    items: [{
        xtype: 'component',
        componentCls: 'xtion-app-name',
        bind: {
            html: '{appName}'
        }
    },{
        xtype: 'component',
        bind: {
            html: '{appNameSupport}'
        }
    },{
        xtype: 'tbfill'
    },{
        xtype: 'button',
        componentCls: 'xtion-app-nav-btn',
        ui: 'navigation',
        bind: {
            html: '{appHeaderAvatar}'
        },
        listeners: {
            click: 'onProfile'
        }
    },{
        xtype: 'component',
        componentCls: 'xtion-app-user',
        bind: {
            html: '{appHeaderUser}'
        }
    },{
        xtype: 'button',
        componentCls: 'xtion-app-nav-btn',
        ui: 'navigation',
        bind: {
            html: '{appHeaderConfig}'
        },
        listeners: {
            click: 'onConfig'
        }
    },{
        xtype: 'button',
        componentCls: 'xtion-app-nav-btn',
        ui: 'navigation',
        bind: {
            html: '{appHeaderLogout}'
        },
        listeners: {
            click: 'onLogout'
        }
    }
    ]

});