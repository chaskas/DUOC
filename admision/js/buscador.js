(function(){
	function o(c,d,b,e){
		var f={};
		c=c.split(b);
		for(b=0;b<c.length;b++){
			var h=c[b],i=h.indexOf(d);if(i>0){
			var m=h.substring(0,i);m=e?m.toUpperCase():m.toLowerCase();h=h.substring(i+1,h.length);f[m]=h}
		}
		return f
	}
	function n(c,d){return d?"&"+c+"="+encodeURIComponent(d):""}
	function q(){ 
		var c="http://";c+=a.googleSearchDomain?a.googleSearchDomain:"www.google.com";c+=a.googleSearchPath?a.googleSearchPath:"/custom";c+="?";if(a.googleSearchQueryString)a.googleSearchQueryString=a.googleSearchQueryString.toLowerCase();
		c=c;
		var d;
		var b=document.location.search;
		if(b.length<1){
			d="";
		} else { 
			b=b.substring(1,b.length);
			b=o(b,"=","&",false);
			if(a.googleSearchQueryString!="q"&&b[a.googleSearchQueryString]){
				b.q=b[a.googleSearchQueryString];
				delete b[a.googleSearchQueryString]}
				if(b.cof){
					var e=o(decodeURIComponent(b.cof),":",";",true);if(e=e.FORID)k=parseInt(e,10)
				}
				if(e=document.getElementById(a.googleSearchFormName)){
					if(e.q&&b.q&&(!b.ie||b.ie.toLowerCase()=="utf-8"))
						e.q.value=decodeURIComponent(b.q.replace(/\+/g," "));
						if(e.sitesearch)for(var f=0;f<e.sitesearch.length;f++)
							e.sitesearch[f].checked=b.sitesearch==g&&e.sitesearch[f].value==""?true:e.sitesearch[f].value==b.sitesearch?true:false
						}
						e="";
						for(d in b)
							e+="&"+d+"="+b[d];
							d=e.substring(1,e.length)
		}
		c=c+d;
		c+=n("ad","w"+l);
		c+=n("num",j);
		c+=n("adtest",a.googleAdtest);
		if(p){
			d=a.location.href;
			b=d.indexOf("#");
			if(b!=-1)d=d.substring(0,b);
				c+=n("rurl",d)
		}
		return c}
function r(){
	(l=a.googleSearchNumAds)||(l=9);
	j=(j=a.googleNumSearchResults)?Math.min(j,20):10;
	var c={};
	c[9]=750;
	c[10]=750;
	c[11]=500;
	var d={};
	d[9]=300+90*j;
	d[10]=300+50*Math.min(l,4)+90*j;
	d[11]=300+50*l+90*j;
	var b=q();
	if(!a.googleSearchFrameborder)a.googleSearchFrameborder="0";
		var e=document.getElementById(a.googleSearchIframeName);
		if(e&&c[k]){
			c=a.googleSearchFrameWidth?Math.max(a.googleSearchFrameWidth,c[k]):c[k];
			d=a.googleSearchFrameHeight?Math.max(a.googleSearchFrameHeight,d[k]):d[k];
			var f=document.createElement("iframe");
			b={name:"googleSearchFrame",src:b,frameBorder:a.googleSearchFrameborder,width:c,height:d,marginWidth:"0",marginHeight:"0",hspace:"0",vspace:"0",allowTransparency:"true",scrolling:"no"};
			for(var h in b)f.setAttribute(h,b[h]);
				e.appendChild(f);f.attachEvent?f.attachEvent("onload",function(){window.scrollTo(0,0)}):f.addEventListener("load",function(){window.scrollTo(0,0)},false);
				p&&a.setInterval(function(){
				if(a.location.hash&&a.location.hash!="#"){
					var i=a.location.hash.substring(1)+"px";if(f.height!=i&&i!="0px")f.height=i}
				},10)
		}
		a.googleSearchIframeName=g;
		a.googleSearchFormName=g;
		a.googleSearchResizeIframe=g;
		a.googleSearchQueryString=g;
		a.googleSearchDomain=g;
		a.googleSearchPath=g;
		a.googleSearchFrameborder=g;
		a.googleSearchFrameWidth=g;
		a.googleSearchFrameHeight=g;
		a.googleSearchNumAds=g;
		a.googleNumSearchResults=g;
		a.googleAdtest=g
	}
	var g=null,a=window,p=a.googleSearchResizeIframe||a.googleSearchPath&&a.googleSearchPath=="/cse"&&typeof a.googleSearchResizeIframe=="undefined",k,l,j;r()})();
