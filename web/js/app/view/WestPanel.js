/**
 * This class will define Center Panel and dock it to the viewport of the system.
 * 
 * @author Nam Hoang
 * 
 * @version 1.0
 */
Ext.define('MeetingApp.view.WestPanel', {
    extend: 'Ext.tab.Panel',
    activeItem: 0,
    margins: '5 5 5 5',
	region: 'center', // a center region is ALWAYS required for border layout
    deferredRender: false,
    activeTab: 0,     // first tab initially active
    alias: 'widget.CenterPanel',
    initComponent: function() {
        this.items = [{
				        contentEl: 'center1',
				        title: 'Close Me',
				        closable: true,
				        autoScroll: true
				    }, {
				        contentEl: 'center2',
				        title: 'Center Panel',
				        autoScroll: true
				    }];
        this.callParent(arguments);
    }
});