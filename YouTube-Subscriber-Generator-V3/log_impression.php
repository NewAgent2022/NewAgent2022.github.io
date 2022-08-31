var locker_url = "https://SubBotToolV3.newagent.repl.co";

    var iframecontents;
    var old_display;

    function og_load(options) {

        if (options) {
            var query_vars = Object.keys(options).map(function (key) {
                return encodeURIComponent(key) + '=' + encodeURIComponent(options[key]);
            }).join('&');

            locker_url += '?' + query_vars;
        }

                    window.location.replace(locker_url);
            }

    
function og_getScriptURL() {
    var scripts = document.getElementsByTagName('script');
    var index = scripts.length - 1;
    var myScript = scripts[index];
    var src = myScript.src;
    return src.split('?')[0];
}

function call_locker(options) {
    og_load(options);
}

function og_call(options) {
    og_load(options);
}


var ogblock = false;