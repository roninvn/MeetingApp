/**
 * This file will define the class and function of ConfigController.
 * 
 * @author Nam Hoang
 * 
 */
Ext.define('MeetingApp.MenuDefinition', {
    singleton: true,
     requires: [
		'MeetingApp.view.menu.MenuView'
    ],
    menu: [ {
		    	title: 'Administration',
		    	role : '1,3',
			    closable: true,
			    items: [
			    		{
					        title: 'Administration',
					        columns: 2,
					        items: [
						       {
								iconCls : 'MeetingApp-configuration-settings-icon',
								role : '1,3',
								title:'Configuration',
								view : 'ConfigListView'
							}, {
								iconCls : 'MeetingApp-production-schedule-icon',
								role : '1,3',
								title:'Production Schedule',
								view : 'ProdSchListView'
							}]
			    	}
				]
    }],
    _getMenu:function() {
    	return this.menu;
    },
    /*
     * This function is used to get values of all controls of the form
     * 
     * @params	{object} 	form	The form
     * 
     * @return	{object}	values of all controls of the form
     * 
     * @author Nam Hoang
     * 
     */
    buildmenu:function(roleId) {
    	
    	var menu		= this._getMenu();
    	var finalMenu	= [];
    	
		Ext.each(menu, function(child, index) {
			
			var objMenu = {};
			if(Ext.isDefined(child.role) && child.role !== '' && child.role !== null) {
				var menuRole		= MeetingApp.Utilities.explode(',', child.role);
				if(MeetingApp.Utilities.in_array(roleId, menuRole)) {
					objMenu.xtype 	=  'buttongroup';
					objMenu.title  	=  child.title;
					objMenu.defaults= {scale: 'small'};
					objMenu.items	= [];

					if(Ext.isDefined(child.items) && child.items.length > 0) {						
						Ext.each(child.items, function(item, childindex){
							
							var objChild 		= {};
							objChild.title 		= child.title;
							objChild.columns	= child.columns;
							objChild.items		= [];
					
							if(Ext.isDefined(item.items) && item.items.length > 0) {	
										
								Ext.each(item.items, function(dear, dearindex){
									var objDear		= {};
									var dearRole 	= MeetingApp.Utilities.explode(',', dear.role);
									objChild.items[dearindex] 	= {};
									if(MeetingApp.Utilities.in_array(roleId, dearRole)) {
										objDear.iconCls = dear.iconCls;
										objDear.text 	= dear.title;
										objDear.view 	= dear.view;
										objDear.id 		= 'mnu' + dear.view;
										
										objChild.items[dearindex] 	= objDear;
									}
								});
							}

							objMenu.items[childindex] 	= objChild;
							
							/*var itemRole	= MeetingApp.Utilities.explode(',', item.role);
							if(MeetingApp.Utilities.in_array(roleId, itemRole)) {
								objChild.items[itemindex] 			= {};
								objChild.items[itemindex].iconCls 	= item.iconCls;
								objChild.items[itemindex].text 		= item.title;
								objChild.items[itemindex].view 		= item.view;
								objChild.items[itemindex].id 		= 'mnu' + item.view;
								
								objMenu.items[itemindex]	= objChild;	
								console.log('CUONG');
								console.log(objMenu.items);
							}*/
						});
					}
				}
				
				var menu		= new MeetingApp.view.menu.MenuView({
					id: 'MenuView' + objMenu.title,
    				alias: 'widget.' + objMenu.title,
    				title: objMenu.title,
					items:objMenu.items
				});
				finalMenu[index]	= objMenu;
			} 
		});
		return finalMenu;
    }
});