function getInternetExplorerVersion()
// Returns the version of Windows Internet Explorer or a -1
// (indicating the use of another browser).
{
   var rv = -1; // Return value assumes failure.
   if (navigator.appName == 'Microsoft Internet Explorer')
   {
      var ua = navigator.userAgent;
      var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
      if (re.exec(ua) != null)
         rv = parseFloat( RegExp.$1 );
   }
   return rv;
}

jQuery(document).ready(function($) {
   var version = getInternetExplorerVersion();
   alert(version);

   if (version > -1) {
      if (version < 9.0) {
         alert('Your using an outdated version of internet explorer. Please use an updated browser.');
      }
   }
});
