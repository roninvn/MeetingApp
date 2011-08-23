/**
 * This file will define the class and function of ConfigController.
 * 
 * @author Nam Hoang
 * 
 */
Ext.define('MeetingApp.Utilities', {
    singleton: true,
    DATEFORMAT:'c', 	//Date format constant - default ISO
    
    /*
     * This function is used to validate the form after submiting not valid to server, 
     * getting error message repose from server and display them to the form.
     * 
     * @params	{object} 	form		The form
     * 			{object}	ErrorInfo	Data that reponsed from server	
     * 
     * @author Nam Hoang
     * 
     */
    markFormInvalidFromServerResponse: function(form, errorInfo) {
   		var res	= Ext.decode(errorInfo.responseText);	//decode the reponsed message from server
   		
   		//check if the Error Info not define or the form not define
   		if(!Ext.isDefined(res.ErrorInfo) || !Ext.isDefined(form) || !Ext.isDefined(form.getForm().markInvalid)) {
   			return;
   		}
   		
   		//If server repost system error
   		if(Ext.isDefined(res.ErrorInfo.System)) {
   			Ext.Msg.alert('Error', res.ErrorInfo.System);
   			return res.ErrorInfo.System;
   		}
   		
   		var errors	= [];
   		
   		var errorMsg = "";
			
   		for(k in res.ErrorInfo) {
   			var control	= form.down('[name=' + k +']');	//query to the control related to the error value that server reponsed
   			
   			//check if the control related to the error value that server reponsed exist
   			if(Ext.isDefined(control) && Ext.isDefined(control.getId) && Ext.isFunction(control.getId)) {   				
   					var fieldid	= control.getId();	//get the id of the control
   					var errmsg = res.ErrorInfo[k];	//get the error message
   					
   					errorMsg 	+= errmsg + "<br />";
   					
	   				errors.push({	//push the id and error message to the error array
						id:fieldid,
						msg:errmsg
					});
   			};
   		}

   		if(errors.length > 0) {	//if the items of error array exist
   			form.getForm().markInvalid(errors);	//mark invalid the form
   		}
   		
   		return errorMsg ;
    },
    /*
     * This function is used to bind the model values to the form
     * 
     * @params	{object} 	form	The form
     * 			{object}	model	The model	
     * 
     * @author Nam Hoang
     * 
     */
    bindModelToForm:function(form, model){
    	//check the form exist
    	if(!Ext.isDefined(form) || form === null || !Ext.isDefined(form.getForm().getFields)) {
    		return;
    	}
    	//check the model exist
    	if(!Ext.isDefined(model) || model === null) {
    		return;
    	}
    	
    	var allFields	= form.getForm().getFields();	//get all controls of the form
    	
    	//check all controls of the form exist
    	if(!Ext.isDefined(allFields) || !Ext.isDefined(allFields.keys)) {
    		return;
    	}
    	
    	//get each control and bind data got from model to the control.
    	Ext.each(allFields.keys, function(key, index) {
		    var control 	= form.down('#' + key);
		    
		    //check the control exist and have the function setValue or not
		    //fieldset contain not have setValue function
		    if(Ext.isDefined(control) && Ext.isDefined(control.setValue) && Ext.isDefined(control.getName)) {
		    	var val	= model.get(control.getName());
		    	 if(Ext.isDefined(val) && val !== "" && val !== null) {
			    	control.setValue(val);
			    }
		    }
		});
    },
     /*
     * This function is used to bind the values of the form to model
     * 
     * @params	{object} 	form	The form
     * 			{object}	model	The model	
     * 
     * @author Nam Hoang
     * 
     */
    bindFormValuesToModel:function(form, model){
    	//check the form exist
    	if(!Ext.isDefined(form) || form === null || !Ext.isDefined(form.getForm().getFields)) {
    		return;
    	}
    	//check the model exist
    	if(!Ext.isDefined(model) || model === null) {
    		return;
    	}
    	
    	var allFields	= form.getForm().getFields();	//get all controls of the form
    	
    	//check all controls of the form exist
    	if(!Ext.isDefined(allFields) || !Ext.isDefined(allFields.keys)) {
    		return;
    	}
    	
    	//get each control and bind data got from model to the control.
    	Ext.each(allFields.keys, function(key, index) {
		    var control 	= form.down('#' + key);
		    
		    //check the control exist and have the function setValue or not
		    //fieldset contain not have setValue function
		    if(Ext.isDefined(control) && Ext.isDefined(control.getValue) && Ext.isDefined(control.getName)) {
			  	model.set(control.getName(), control.getValue());
		    }
		});
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
    getValuesOfControlsInForm:function(form) {
    	var dateformat	= this.DATEFORMAT;	//get Date Format constant
    	
    	//check the form exist
    	if(!Ext.isDefined(form) || form === null || !Ext.isDefined(form.getForm().getFields)) {
    		return null;
    	}
    	
    	var allFields	= form.getForm().getFields();	//get all controls of the form
    	var values	= [];
    	
    	//get each control & value.
    	Ext.each(allFields.keys, function(key, index) {
		    var control 	= form.down('#' + key);   //down to the control
		    
		    //check the control exist and have the function setValue or not
		    if(Ext.isDefined(control) && Ext.isDefined(control.getValue) && Ext.isDefined(control.getXType) && Ext.isDefined(control.getName)) {
		    	
		    	var val	= control.getValue();	//get value of the control
		    	
		    	if(Ext.isDefined(val) && val !== "" && val !== null) {	
		    		if(control.getXType() == 'datefield' ) {	//check if the control is datefield
		    			val 	= Ext.Date.format(val, dateformat);	//format the datefield's value
		    		}
		    		values[control.getName()] 	= val;
		    	}
		    }
		});
		return values;
    },
    /*
     * This function is used to explode the string to array
     * 
     * @params	{string} 	delimiter	
     * @params	{string} 	the string want to explode	
     * @params	{integer} 	limit	
     * 
     * @return	{object}	values of all controls of the form
     * 
     * @author Kevin van Zonneveld
     * 
     */
    explode:function(delimiter, string, limit) {
    	 // http://kevin.vanzonneveld.net
	    // +     original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +     improved by: kenneth
	    // +     improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +     improved by: d3x
	    // +     bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // *     example 1: explode(' ', 'Kevin van Zonneveld');
	    // *     returns 1: {0: 'Kevin', 1: 'van', 2: 'Zonneveld'}
	    // *     example 2: explode('=', 'a=bc=d', 2);
	    // *     returns 2: ['a', 'bc=d']
	    var emptyArray = {
	        0: ''
	    };
	    // third argument is not required
	    if (arguments.length < 2 || typeof arguments[0] == 'undefined' || typeof arguments[1] == 'undefined') {
	        return null;
	    }
	
	    if (delimiter === '' || delimiter === false || delimiter === null) {
	        return false;
	    }
	
	    if (typeof delimiter == 'function' || typeof delimiter == 'object' || typeof string == 'function' || typeof string == 'object') {
	        return emptyArray;
	    }
	
	    if (delimiter === true) {
	        delimiter = '1';
	    }
	
	    if (!limit) {
	        return string.toString().split(delimiter.toString());
	    } else {
	        // support for limit argument
	        var splitted = string.toString().split(delimiter.toString());
	        var partA = splitted.splice(0, limit - 1);
	        var partB = splitted.join(delimiter.toString());
	        partA.push(partB);
	        return partA;
	    }
    },
    /*
     * This function is used to checks if the given value exists in the array 
     * 
     * @params	{string/integer} 	The searched value. 	
     * @params	{Array} 			The array. 
     * 
     * @return	{boolean}
     * 
     * @author Kevin van Zonneveld
     * 
     */
    in_array:function(needle, haystack, argStrict) {
    	 // http://kevin.vanzonneveld.net
	    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +   improved by: vlado houba
	    // +   input by: Billy
	    // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
	    // *     example 1: in_array('van', ['Kevin', 'van', 'Zonneveld']);
	    // *     returns 1: true
	    // *     example 2: in_array('vlado', {0: 'Kevin', vlado: 'van', 1: 'Zonneveld'});
	    // *     returns 2: false
	    // *     example 3: in_array(1, ['1', '2', '3']);
	    // *     returns 3: true
	    // *     example 3: in_array(1, ['1', '2', '3'], false);
	    // *     returns 3: true
	    // *     example 4: in_array(1, ['1', '2', '3'], true);
	    // *     returns 4: false
	    var key = '',
	        strict = !! argStrict;	// if argStrict == undefined, 
	
	    if (strict) {
	        for (key in haystack) {
	            if (haystack[key] === needle) {
	                return true;
	            }
	        }
	    } else {
	        for (key in haystack) {
	            if (haystack[key] == needle) {
	                return true;
	            }
	        }
	    }
	
	    return false;
    },
    /*
     * This function is used to checking loading data in load event
     */
    loadDataCallBack:function(operation, success, errMsg) {
		if (Ext.isDefined(operation.response))
		{
			var obj = Ext.decode(operation.response.responseText);
			if (!obj.Success) {
				if (Ext.isDefined(obj.ErrorInfo.System))
					Ext.MessageBox.alert("Warning", obj.ErrorInfo.System);
				else
					Ext.MessageBox.alert("Warning", "Loading data fail.");
			}
		} else if (!success)
		{
			Ext.MessageBox.alert("Warning", errMsg);
		}
	}
});
