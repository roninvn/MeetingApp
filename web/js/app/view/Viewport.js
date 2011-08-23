/*
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.Viewport', {
    extend: 'Ext.container.Viewport',

    requires: [
        'Ext.layout.container.Border',
		'MeetingApp.view.CenterPanel',
		'MeetingApp.view.LeftPanel',
		'MeetingApp.view.TopPanel',
		'MeetingApp.view.BottomPanel',
		'MeetingApp.lib.ux.Ribbon',
		'MeetingApp.lib.ux.RibbonTab',
		'MeetingApp.view.RibbonBar'
    ],

	layout: 'border',
	items: [{
				region: 'center',
				id:'centerpanel',
				xtype: 'CenterPanel'
			},{
				region: 'west',
				xtype: 'LeftPanel'
			},{
				region:'north',
				//height  : 88,
				id:'toppanel',
				xtype:'uiribbonbar'
			},{
				region:'south',
				bodyBorder:false,
				border  : false,
				height:22,
				xtype:'BottomPanel'
			}]
});
