
// cookie handler
// ----------------------------------------
// Nick Nettleton, nick@plumdigitalmedia.com
// Copyright 2004. All rights reserved.
// Version 0.5b
//
// GNU Public License: free to use, but don't steal the credit.
//
// provides access to document cookies via the cookie object
// reading cookies :
// bob = cookie.get("bob") ;
// setting cookies:
// cookie.set("bob", "abc") ;
// cookie.set("bob", "abc", 365, "/", "subdomain.example.com") ;
// deleting cookies:
// cookie.unset("bob") ;

var cookie = {

	values : {} ,

	init : function()
	{
		var cookies = document.cookie.split(";") ;
		for(var i=0; i<cookies.length; i++){
			var parts	= cookies[i].split("=") ;
			var name	= this._trim(unescape(parts[0])) ;
			this.values[name] = this._trim(unescape(parts[1])) ;
		}	
	} ,
	
	get : function(name)
	{
		return this.values[name] ;
	} ,
	
	set : function(name, value, days, path, domain)
	{
		if(!days) days = 0 ;
		this.values[name] = (days >= 0) ? value : null ;
		var cookie = escape(name) + "=" + escape(value) ;
		if(days){
			var expires	= new Date((new Date().getTime()) + (days * 8640000)) ;
			cookie		+= "; expires=" + expires.toGMTString() ;
		}
		if(path)	cookie	+= "; path=" + path ;
		if(domain)	cookie	+= "; domain=" + domain ;
		document.cookie = cookie ;
	} ,
	
	unset : function(name)
	{
		this.set(name, null, -1*(1/86400)) ;
	} ,

	_trim : function(str)
	{
		while(str.charAt(0) == ' ') str = str.substring(1) ;
		while(str.charAt(str.length-1) == ' ') str = str.substring(-1) ;
		return str ;
	}
}
cookie.init();
