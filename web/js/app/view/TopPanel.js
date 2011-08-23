/**
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.TopPanel', {
	extend: 'Ext.tab.Panel',
    region: 'north',
	id: 'north-panel',
	alias: 'widget.TopPanel',
	//layout:'fit',
	autoScroll :true,
	//height: 32, // give north and south regions a height
    /*autoEl: {
        tag: 'div',
        html:"<table  id='tableHeader' width='100%' border='0' cellpadding='0' cellspacing='0'><tr><td width='233' id='header'></td><td id='header1' align = 'right'><span id='custLogo'></span></td><td width='23' id='header2' ></td></tr></table>"
    },*/
    initComponent: function() {
        this.callParent(arguments);
    }
});
