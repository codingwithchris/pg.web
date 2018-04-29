// This is the cleaner code per request of a thread in the LinkedIn group "WordPress"

// this is a modified file for demonstration purposes
// original repository https://github.com/filamentgroup/loadCSS/


/*!
loadCSS: load a CSS file asynchronously.
[c]2014 @scottjehl, Filament Group, Inc.
Licensed MIT
*/

function loadCSS( href, before, media ){
"use strict";
var ss = window.document.createElement( "link" );
var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
ss.rel = "stylesheet";
ss.href = href;
ss.media = "only x";
ref.parentNode.insertBefore( ss, ref );
setTimeout( function(){
ss.media = media || "all";
} );
return ss;
}

// load Font Awesome from CDN
loadCSS( "//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" );

