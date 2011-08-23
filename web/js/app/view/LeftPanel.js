/**
 * This file will define a left panel and dock it to the viewport 
 * 
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.LeftPanel', {
	extend: 'Ext.panel.Panel',
    region: 'west',
	id: 'west-panel', // see Ext.getCmp() below
	title: 'West',
	split: true,
	width: 200,
	minWidth: 175,
	maxWidth: 400,
	autoHeight: true,
	collapsible: true,
	animCollapse: true,
	margins: '0 0 0 5',
	layout: 'accordion',
    alias: 'widget.LeftPanel',
    collapsed : true,
    
    initComponent: function() {
    	//this.items = [];
        this.callParent(arguments);
        //this.collapse();
    }
});