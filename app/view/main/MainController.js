Ext.define('Xtion.view.main.MainController', {
    extend: 'Ext.app.ViewController',

    requires: [
        'Xtion.view.event.Event',
        'Xtion.view.role.Role',
        'Xtion.view.menu.Menu',
        'Xtion.view.user.User',
        'Xtion.view.eventstatistics.EventStatistics',
        'Xtion.view.top20sig.Top20Sig',
        'Xtion.view.top20proto.Top20Proto',
        'Xtion.view.reportdaily.ReportDaily',
        'Xtion.view.reportmonthly.ReportMonthly',
        'Xtion.view.reportannually.ReportAnnually',
        'Xtion.view.sensorstatistics.SensorStatistics'
    ],

    alias: 'controller.main',

    onLogout: function (sender, record) {
        Ext.Msg.confirm('Confirm', 'Are you sure want to logout?', 'onConfirm', this);
    },

    onConfirm: function (choice) {
        if (choice === 'yes') {
            window.location.href = 'index.php/auth/index';
        }
    },

    onItemMenuSelected: function (sender, record) {

        if(record.data.expanded === false && record.data.leaf == true) {

            var x = Ext.getCmp('tabContainer');

            var t = x.items.findBy(
                function (tab){
                    return tab.title === record.data.description;
                });

            if(!t) {

                if(record.data.controller !== undefined || record.data.controller !== "") {
                    t = x.add({
                        title: record.data.description,
                        iconCls: record.data.iconCls,
                        closable: true,
                        xtype: record.data.controller
                    });
                }
                else {
                    t = x.add({
                        title: record.data.description,
                        iconCls: record.data.iconCls,
                        closable: true
                    });
                }
            }

            x.setActiveTab(t);

        }

    }

});
