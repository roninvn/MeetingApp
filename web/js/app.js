/*
 * @author Nam Hoang
 */
Ext.Loader.setPath('Ext.ux', '../ux/');
Ext.require([
   'Ext.grid.*',
    'Ext.data.*',
    'Ext.util.*',
    'Ext.grid.PagingScroller'
]);

Ext.application({
    name: 'MeetingApp',	//name of the application
    controllers: [],	//define controller here
    appFolder:'js/app',	//define app folder
    requires:['MeetingApp.view.Viewport','MeetingApp.Utilities', 'MeetingApp.MenuDefinition', 'MeetingApp.Configuration'],	
	
    /*views: [
        'user.List'
    ],*/

    launch: function() {
    	Ext.create('MeetingApp.view.Viewport').show();
    }
});
