/**
 * This file will create the Center Panel and dock it to the viewport of the system.
 * @author Nam Hoang
 */
Ext.define('MeetingApp.view.CenterPanel', {
    extend: 'Ext.tab.Panel',
    activeItem: 0,
    margins: '5 5 5 5',
	region: 'center', // a center region is ALWAYS required for border layout
    deferredRender: false,
    activeTab: 0,     // first tab initially active
    alias: 'widget.CenterPanel',
	tabLists:[],
	//requires:['MeetingApp.view.ExTab'],
	requires:[
		//'MeetingApp.view.config.List',
	],
	 /**
     * This function is used to init it own component and call parent arguments
     * 
     * @author Nam Hoang
     * 
     * @return void
     */
    initComponent: function() {
		this.on('add',    this._onAdd, this);
		this.callParent(arguments);
		
		//this.openTab('ExTab');
    },
    
    
	/**
     * This function is used to init it own events and define news event
     * 
     * @author Nam Hoang
     * 
     * @return void
     */
	initEvents : function()
    {
        this.callParent();

    },
    
    /*
     * This private function is used to handle on add tab panel event
     * 
     * @author Nam Hoang
     * 
     * @param 	{object} 	container The center panel.
     * 			{object}	panel to be added to center panel
     * 			{int}		index of the tab panel
     * 
     * @return void
     * 
     */
	 _onAdd : function(container, component, index)
    {
		/*if(typeof this.tabLists[component.getId()] === 'undefined') {	//check if the tab is not exist - add to array
			this.tabLists[component.getId()] 	= component;
			component.on('destroy', function(component) {
				
					console.log(component);
					this._removeTabPanel(component.getId());
                }, this);
		}
		
		this.setActiveTab(component);*/
    },
    
	/*
     * This private function is used to delete on remove tab panel event
     * 
     * @author Nam Hoang
     * 
     * @param 	{string} 	the name of tab that removed
     * 
     * @return void
     * 
     */ 
	_removeTabPanel: function(tabname) {
		if(typeof this.tabLists[tabname] !== 'undefined') {
			delete this.tabLists[tabname];	//remove tab out of array.
		}
		else {
			return false;
		}
	},
	
	/**
     *
     * If tab don't exist - create and open the tab. If exist -> do nothing
     * 
     * @author Nam Hoang
     * 
     * @param	{string}	tabname name of the tab
     *			{object} 	params of the tab		
     *
     * @return void
     */
	openTab: function(tabname, objparams) {
		var newtab	= this.getTabPanel(tabname);	//get Tab Panel

		if(newtab === false) {	
			newtab	= Ext.createByAlias('widget.' + tabname);
			this.tabLists[tabname] 	= newtab;	//add tab name to array.
			newtab.on('destroy', function(component) {	//add the detroy event to the new tab
						this._removeTabPanel(component.getId());
						this.remove(component, true);
	                }, this);
	                
	        var obj	= {
				cancel:false
			};
	
			if(obj.cancel === false) {
				this.add(newtab);	//add new tab to center panel
			}
		}

		this.setActiveTab(newtab);	//set active the tab
	},
	
	/**
     *
     * Get the tab open by name
     * 
     * @author Nam Hoang
     * 
     * @param	{string} tabname	name of tab to be opended
     *
     * @return	void
     */ 
	getTabPanel: function(tabname) {
		if(typeof this.tabLists[tabname] === 'undefined') {
			return false;
		}
		else {
			return this.tabLists[tabname];
		}
	}
});