
function getBrowserWidth(){
    if (window.innerWidth){
        return window.innerWidth;}  
    else if (document.documentElement && document.documentElement.clientWidth != 0){
        return document.documentElement.clientWidth;    }
    else if (document.body){return document.body.clientWidth;}      
        return 0;
}

 function disableLayout(description){
    var i, a;
    for(i=0; (a = document.getElementsByTagName("link")[i]); i++){
        if(a.getAttribute("title") == description){a.disabled = true;}
    }
 }

 function enableLayout(description){
    var i, a;
    for(i=0; (a = document.getElementsByTagName("link")[i]); i++){
        if(a.getAttribute("title") == description){a.disabled = false;}
    }
 }

function dynamicLayout(){
    var browserWidth = getBrowserWidth();
    if (browserWidth < 1366){
        enableLayout("narrow");
    }
    if (browserWidth >= 1366){
        disableLayout("narrow")
    }
}

function addEvent( obj, type, fn ){ 
    if (obj.addEventListener){ 
       obj.addEventListener( type, fn, false );
    }
    else if (obj.attachEvent){ 
       obj["e"+type+fn] = fn; 
       obj[type+fn] = function(){ obj["e"+type+fn]( window.event ); } 
       obj.attachEvent( "on"+type, obj[type+fn] ); 
    } 
 }
// addEvent(window, 'load', dynamicLayout);
if (getBrowserWidth() < 1366){
    enableLayout("narrow")
}
addEvent(window, 'resize', dynamicLayout);

