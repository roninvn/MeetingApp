/**
 * This class is used to create the Extab and dock it to center panel of the manin Viewport
 * 
 * @author Nam Hoang
 * 
 * @version 1.0
 */
Ext.define('MeetingApp.view.menu.MenuView', {
	extend: 'MeetingApp.lib.ux.RibbonTab',
    /**
     * This function is used to init it own component and call parent arguments
     * 
     * @return void
     */
    initComponent: function() {
        this.callParent(arguments);
    }
});