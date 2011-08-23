/**
 * @class App.view.ui.RibbonBar
 * @extend Ext.tab.Panel
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.RibbonBar', {
    extend: 'MeetingApp.lib.ux.Ribbon',
    alias: 'widget.uiribbonbar',
	id:'uiribbonbar',
    initComponent: function () {
        this.callParent(arguments);
    }
});