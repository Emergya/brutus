/**
 * brutus_core javascript core
 *
 * - Provides frequently used extensions to base javascript objects
 * - jQuery browser detection tweak
 * - Define functions used in events
 */
 

// Brutus Theme behavior
Drupal.attachBehaviors = function(context) {
      // Add Target _blank metoth
      $("a[href^=http://]").attr("target","_blank");    
};

// jQuery Browser Detect Tweak For IE7
jQuery.browser.version = jQuery.browser.msie && parseInt(jQuery.browser.version) == 6 && window["XMLHttpRequest"] ? "7.0" : jQuery.browser.version;

// Console.log wrapper to avoid errors when firebug is not present
// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if (this.console) {
    console.log(Array.prototype.slice.call(arguments));
  }
};

// init object
var brutus_core = brutus_core || {};

/**
 * Image handling functions
 */
brutus_core.image = { _cache : [] };

// preload images
brutus_core.image.preload = function() {
  for (var i = arguments.length; i--;) {
    var cacheImage = document.createElement('img');
    cacheImage.src = arguments[i];
    brutus_core.image._cache.push(cacheImage);
  }  
}
