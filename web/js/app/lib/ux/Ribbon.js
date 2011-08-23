/**
 * @class App.lib.ux.Ribbon
 * @extend Ext.tab.Panel
 * @author Nam Hoang
 */
Ext.define('MeetingApp.lib.ux.Ribbon', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.appuxribbon',
    cls: 'ui-ribbonbar',
    activeTab: 0,
    plain: true,
    unstyled: true,
    margin: '5 0 0 0',
    autoHeight: true,

    addTab: function (config, focus) {
        var tab = this.add(config);
        if (focus === true) this.setActiveTab(tab);
    },

    initComponent: function () {
        this.callParent(arguments);
    }
});