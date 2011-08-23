/*
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.BottomPanel', {
	extend: 'Ext.Component',
    region: 'south',
	id: 'footer',
	alias: 'widget.BottomPanel',
    autoEl: {
        tag: 'div'
    },
    initComponent: function() {
        this.callParent(arguments);
    }
});
