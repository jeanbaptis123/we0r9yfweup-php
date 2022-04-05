var wd_user_version = 20;
var debug = false;

function wd_toggle_debug() {
    if (debug === true) {
        debug = false
        document.cookie = "wd_debug=false; expires=Thu, 18 Dec 3000 12:00:00 UTC; path=/";
        console.log("wd debugging disabled");
    } else {
        debug = true
        document.cookie = "wd_debug=true; expires=Thu, 18 Dec 3000 12:00:00 UTC; path=/";
        console.log("wd debugging enabled");
    }
}

function wd_get_debug() {
    var name = "wd_debug";
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return (decodeURIComponent(cookiePair[1]) === 'true');
        }
    }
    
    // Return null if not found
    return false;
}

function wd_message_message(text) {
    if (debug === true) {
        console.log(text);
    }
}

function uuidv4() {
  return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
    (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
  );
}

async function get_wd_user() {
    wd_message_message("getting wd_user");
    cookie_name = wd_user_version + "_" + "wd_user";
    var dc = document.cookie;
    var prefix = cookie_name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) {
            var wd_cookie = null;
        }
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
        var wd_cookie = decodeURI(dc.substring(begin + prefix.length, end));
    }

    if (wd_cookie !== null) {
        wd_message_message(cookie_name + " found in cookies: " + wd_cookie);

        return Promise.resolve(wd_cookie);
    } else {
        wd_message_message("Cookie of " + cookie_name + " not set, getting from database");
        let url = 'https://api.proxyscrape.com/v2/create_wd_user';

        return fetch(url)
            .then((response) => response.json())
            .then((out) => {
                document.cookie = cookie_name + "=" + out["id"] + "; expires=Thu, 18 Dec 3000 12:00:00 UTC; path=/";
                wd_message_message('Got ID from database: ' + out["id"]);
                return out["id"];
            })
            .catch(err => {
                throw err
            });


    }
}

function send_data(data) {
    fetch('https://api.proxyscrape.com/v2/wd_log', {
        method: 'post',
        headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    wd_message_message(data);
}

window.addEventListener('CookiebotOnConsentReady', function(e) {
    debug = wd_get_debug();
    get_wd_user().then(response => {
        wd_user = response;
        wd_message_message("Got wd_user " + wd_user + " back from function get_wd_user().");
        return wd_user;
    }).then(wd_user => {
        //log page visits
        var visit_id = uuidv4();
        var timestamp = Date.now() / 1000;
        var page = document.location.toString();
        var data = {
            "visit_id": visit_id,
            "wd_user_version": wd_user_version,
            "data_type": "page_visit",
            "page": page,
            "user_timestamp": timestamp,
            "user": wd_user
        };
        send_data(data);

        //log element clicks
        document.addEventListener('click', function(event) {
            var element = event.target.tagName;
            var timestamp = Date.now() / 1000;
            var data = {
                "visit_id": visit_id,
                "wd_user_version": wd_user_version,
                "data_type": "element_click",
                "element": element,
                "user_timestamp": timestamp,
                "user": wd_user
            };

            if (element === "INPUT") {
                data["input_type"] = event.target.type;
                if (data["input_type"] === "checkbox") {
                    data["checkbox_checked"] = event.target.checked;
                }
            }

            if (event.target.name) {
                data["element_name"] = event.target.name;
            }

            if (event.target.href) {
                data["element_href"] = event.target.href;
            }

            if (event.target.getAttribute("wd_ename")) {
                data["wd_ename"] = event.target.getAttribute("wd_ename");
            }

            send_data(data);
        });
    });
}, false);