var httptotalrequests = 0;
var socks4totalrequests = 0;
var socks5totalrequests = 0;
var httpisrequesting = false;
var socks4isrequesting = false;
var socks5isrequesting = false;
var httpsimplified = false;
var socks4simplified = false;
var socks5simplified = false;

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
}


var descp = document.getElementById("descp");
descp.style.display = "none";
var descn = document.getElementById("descn");
var slide1 = document.getElementById("slide1");
var mslide1 = document.getElementById("mslide1");
var lslide2 = document.getElementById("lslide2");
var mslide2 = document.getElementById("mslide2");
var mslide3 = document.getElementById("mslide3");
var mslide4 = document.getElementById("mslide4");
var login = document.getElementById("login");
var buy = document.getElementById("buy");
var msgbox = document.getElementById("msgcontainer");
var msgtext = document.getElementById("msgtext");
var colorcontainer = document.getElementById("colorcontainer");


function toggle(className, displayState) {
    var elements = document.getElementsByClassName(className)
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.display = displayState;
    }
}
toggle('premium', 'none');
toggle('fakesliders', 'none')
let httptimeout = 10000;
let httpaveragetimeout = 10000;
let httpcountry = "all";
let httpport = "all";
let httporganization = "all";
let httpssl = "all";
let httpanonymity = "all";
let httpuptime = 0;
let httpstatus = "alive";
let httpage = "unlimited";
let httpscore = 0;
let socks4timeout = 10000;
let socks4averagetimeout = 10000;
let socks4country = "all";
let socks4port = "all";
let socks4organization = "all";
let socks4uptime = 0;
let socks4status = "alive";
let socks4age = "unlimited";
let socks4score = 0;
let socks5timeout = 10000;
let socks5averagetimeout = 10000;
let socks5country = "all";
let socks5port = "all";
let socks5organization = "all";
let socks5uptime = 0;
let socks5status = "alive";
let socks5age = "unlimited";
let socks5score = 0;

function httpbuilder() {
    var currentrequest = httptotalrequests + 1;
    httptotalrequests++;
    var httpbuild = [];
    httpbuild.push("&timeout=" + httptimeout);
    httpbuild.push("&country=" + httpcountry);
    httpbuild.push("&ssl=" + httpssl);
    httpbuild.push("&anonymity=" + httpanonymity);
    if (httpsimplified) {
        httpbuild.push("&simplified=true");
    }
    const waitforrequest = setInterval(() => {
        if (httpisrequesting == false) {
            if (httptotalrequests == currentrequest) {
                httpisrequesting = true
                fetch("https://api.proxyscrape.com/v2/?request=proxyinfo&protocol=http" + httpbuild.join("")).then(response => response.text()).then(function(data) {
                    var obj = JSON.parse(data);
                    $("#httpproxyamount").html(obj.proxy_count);
                    $("#httplastupdated").html(obj.last_updated);
                    if (httpsimplified === false) {
                        for (i = 0; i < httporganizationlist.length; i++) {
                            httporganizationlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['organizations'].forEach(function(entry) {
                                httporganizationlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < httpcountrylist.length; i++) {
                            httpcountrylist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['countries'].forEach(function(entry) {
                                httpcountrylist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < httpportlist.length; i++) {
                            httpportlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['ports'].forEach(function(entry) {
                                httpportlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                    }
                    httpsimplified = true;
                });
                httpisrequesting = false
                document.querySelector("#downloadhttp").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=http" + httpbuild.join("");
                document.querySelector("#sharehttp").href = "https://api.proxyscrape.com/v2/?request=share&protocol=http" + httpbuild.join("");
                document.querySelector("#downloadiconhttp").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=http" + httpbuild.join("");
                clearInterval(waitforrequest);
            } else {
                console.log("request dropped");
                clearInterval(waitforrequest);
            }
        } else {
            console.log("request test");
        }
    }, 50)
}

function socks4builder() {
    var currentrequest = socks4totalrequests + 1;
    socks4totalrequests++;
    var socks4build = [];
    socks4build.push("&timeout=" + socks4timeout);
    socks4build.push("&country=" + socks4country);
    if (socks4simplified) {
        socks4build.push("&simplified=true");
    }
    const waitforrequest = setInterval(() => {
        if (socks4isrequesting == false) {
            if (socks4totalrequests == currentrequest) {
                socks4isrequesting = true
                fetch("https://api.proxyscrape.com/v2/?request=proxyinfo&protocol=socks4" + socks4build.join("")).then(response => response.text()).then(function(data) {
                    var obj = JSON.parse(data);
                    $("#socks4proxyamount").html(obj.proxy_count);
                    $("#socks4lastupdated").html(obj.last_updated);
                    if (socks4simplified === false) {
                        for (i = 0; i < socks4organizationlist.length; i++) {
                            socks4organizationlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['organizations'].forEach(function(entry) {
                                socks4organizationlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < socks4countrylist.length; i++) {
                            socks4countrylist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['countries'].forEach(function(entry) {
                                socks4countrylist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < socks4portlist.length; i++) {
                            socks4portlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['ports'].forEach(function(entry) {
                                socks4portlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                    }
                    socks4simplified = true;
                });
                socks4isrequesting = false
                document.querySelector("#downloadsocks4").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=socks4" + socks4build.join("");
                document.querySelector("#sharesocks4").href = "https://api.proxyscrape.com/v2/?request=share&protocol=socks4" + socks4build.join("");
                document.querySelector("#downloadiconsocks4").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=socks4" + socks4build.join("");
                clearInterval(waitforrequest);
            } else {
                console.log("request dropped");
                clearInterval(waitforrequest);
            }
        } else {
            console.log("request test");
        }
    }, 50)
}

function socks5builder() {
    var currentrequest = socks5totalrequests + 1;
    socks5totalrequests++;
    var socks5build = [];
    socks5build.push("&timeout=" + socks5timeout);
    socks5build.push("&country=" + socks5country);
    if (socks5simplified) {
        socks5build.push("&simplified=true");
    }
    const waitforrequest = setInterval(() => {
        if (socks5isrequesting == false) {
            if (socks5totalrequests == currentrequest) {
                socks5isrequesting = true
                fetch("https://api.proxyscrape.com/v2/?request=proxyinfo&protocol=socks5" + socks5build.join("")).then(response => response.text()).then(function(data) {
                    var obj = JSON.parse(data);
                    $("#socks5proxyamount").html(obj.proxy_count);
                    $("#socks5lastupdated").html(obj.last_updated);
                    if (socks5simplified === false) {
                        for (i = 0; i < socks5organizationlist.length; i++) {
                            socks5organizationlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['organizations'].forEach(function(entry) {
                                socks5organizationlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < socks5countrylist.length; i++) {
                            socks5countrylist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['countries'].forEach(function(entry) {
                                socks5countrylist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                        for (i = 0; i < socks5portlist.length; i++) {
                            socks5portlist[i].innerHTML = "<li data-value='all' class='option'>all</li>";
                            obj['ports'].forEach(function(entry) {
                                socks5portlist[i].innerHTML += "<li data-value='" + entry + "' class='option'>" + entry + "</li>";
                            });
                        }
                    }
                    socks5simplified = true;
                });
                socks5isrequesting = false
                document.querySelector("#downloadsocks5").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=socks5" + socks5build.join("");
                document.querySelector("#sharesocks5").href = "https://api.proxyscrape.com/v2/?request=share&protocol=socks5" + socks5build.join("");
                document.querySelector("#downloadiconsocks5").href = "https://api.proxyscrape.com/v2/?request=getproxies&protocol=socks5" + socks5build.join("");
                clearInterval(waitforrequest);
            } else {
                console.log("request dropped");
                clearInterval(waitforrequest);
            }
        } else {
            console.log("request test");
        }
    }, 50)
}

$( document ).ready(function() {
    httpbuilder();
    socks4builder();
    socks5builder();
    fetch("https://api.proxyscrape.com/proxytable.php").then(response => response.text()).then(function(response) {
        var obj = JSON.parse(response);
        var tablebuilder = [];
        for(var item in obj) {
  for(var item2 in obj[item]) {
    if (obj[item][item2] == 1) {
        var anonymity = "Transparent";
    } else if (obj[item][item2] == 2) {
        var anonymity = "Anonymous";
    } else if (obj[item][item2] == 3) {
        var anonymity = "Elite";
    } else {
        var anonymity = "Unkown";
    }
    tablebuilder.push("<tr><td>"+item2+"</td><td>"+anonymity+"</td><td>"+item+"</td>/tr>");
  }
}
$("#proxytable").html(tablebuilder.join(""));
    });
});

const slider = document.querySelector("#httptimeoutslide");
const slider2 = document.querySelector("#socks4timeoutslide");
const slider3 = document.querySelector("#socks5timeoutslide");
const slider4 = document.querySelector("#httpuptimeslide");
const slider5 = document.querySelector("#socks4uptimeslide");
const slider6 = document.querySelector("#socks5uptimeslide");
const slider7 = document.querySelector("#httpaveragetimeoutslide");
const slider8 = document.querySelector("#socks4averagetimeoutslide");
const slider9 = document.querySelector("#socks5averagetimeoutslide");
const slider10 = document.querySelector("#httpstatusslide");
const slider11 = document.querySelector("#socks4statusslide");
const slider12 = document.querySelector("#socks5statusslide");
const slider13 = document.querySelector("#httpageslide");
const slider14 = document.querySelector("#socks4ageslide");
const slider15 = document.querySelector("#socks5ageslide");
const slider16 = document.querySelector("#socks5scoreslide");
const slider17 = document.querySelector("#socks4scoreslide");
const slider18 = document.querySelector("#httpscoreslide");
const httpoutput = document.querySelector("#httptimeoutoutput");
const socks5scoreoutput = document.querySelector("#socks5scoreoutput");
const socks4scoreoutput = document.querySelector("#socks4scoreoutput");
const httpscoreoutput = document.querySelector("#httpscoreoutput");
const httpuptimeoutput = document.querySelector("#httpuptimeoutput");
const httpaveragetimeoutoutput = document.querySelector("#httpaveragetimeoutoutput");
const httpstatusoutput = document.querySelector("#httpstatusoutput");
const httpageoutput = document.querySelector("#httpageoutput");
const httpdead = document.querySelector("#httpdead");
const httpold = document.querySelector("#httpold");

socks5scoreoutput.innerHTML = slider16.value;
slider16.addEventListener('input', () => {
    socks5scoreoutput.innerHTML = slider16.value;
    socks5score = slider16.value;
    socks5builder();
});

httpscoreoutput.innerHTML = slider18.value;
slider18.addEventListener('input', () => {
    httpscoreoutput.innerHTML = slider18.value;
    httpscore = slider18.value;
    httpbuilder();
});

socks4scoreoutput.innerHTML = slider17.value;
slider17.addEventListener('input', () => {
    socks4scoreoutput.innerHTML = slider17.value;
    socks4score = slider17.value;
    socks4builder();
});

httpuptimeoutput.innerHTML = slider4.value;
slider4.addEventListener('input', () => {
    httpuptimeoutput.innerHTML = slider4.value;
    httpuptime = slider4.value;
    httpbuilder();
});
httpoutput.innerHTML = httptimeout;
slider.addEventListener('input', () => {
    httptimeout = slider.value;
    httpoutput.innerHTML = httptimeout;
    httpbuilder();
});
httpaveragetimeoutoutput.innerHTML = httpaveragetimeout;
slider7.addEventListener('input', () => {
    httpaveragetimeout = slider7.value;
    httpaveragetimeoutoutput.innerHTML = httpaveragetimeout;
    httpbuilder();
});
httpdead.style.display = "none";
httpstatusoutput.innerHTML = httpstatus;
slider10.addEventListener('input', () => {
    if (slider10.value <= 0) {
        httpstatus = "alive";
        httpdead.style.display = "none";
    } else {
        httpstatus = slider10.value;
        httpdead.style.display = "inline";
    }
    httpstatusoutput.innerHTML = httpstatus;
    httpbuilder();
});
httpold.style.display = "none";
httpageoutput.innerHTML = httpage;
slider13.addEventListener('input', () => {
    if (slider13.value >= 100) {
        httpage = "unlimited";
        httpold.style.display = "none";
    } else {
        httpage = slider13.value;
        httpold.style.display = "inline";
    }
    httpageoutput.innerHTML = httpage;
    httpbuilder();
});
const socks4output = document.querySelector("#socks4timeoutoutput");
const socks4uptimeoutput = document.querySelector("#socks4uptimeoutput");
const socks4averagetimeoutoutput = document.querySelector("#socks4averagetimeoutoutput");
const socks4statusoutput = document.querySelector("#socks4statusoutput");
const socks4ageoutput = document.querySelector("#socks4ageoutput");
const socks4dead = document.querySelector("#socks4dead");
const socks4old = document.querySelector("#socks4old");
socks4uptimeoutput.innerHTML = socks4uptime;
slider5.addEventListener('input', () => {
    socks4uptime = slider5.value;
    socks4uptimeoutput.innerHTML = socks4uptime;
    socks4builder();
});
socks4output.innerHTML = socks4timeout;
slider2.addEventListener('input', () => {
    socks4timeout = slider2.value;
    socks4output.innerHTML = socks4timeout;
    socks4builder();
});
socks4averagetimeoutoutput.innerHTML = socks4averagetimeout;
slider8.addEventListener('input', () => {
    socks4averagetimeout = slider8.value;
    socks4averagetimeoutoutput.innerHTML = socks4averagetimeout;
    socks4builder();
});
socks4dead.style.display = "none";
socks4statusoutput.innerHTML = socks4status;
slider11.addEventListener('input', () => {
    if (slider11.value <= 0) {
        socks4status = "alive";
        socks4dead.style.display = "none";
    } else {
        socks4status = slider11.value;
        socks4dead.style.display = "inline";
    }
    socks4statusoutput.innerHTML = socks4status;
    socks4builder();
});
socks4old.style.display = "none";
socks4ageoutput.innerHTML = socks4age;
slider14.addEventListener('input', () => {
    if (slider14.value >= 100) {
        socks4age = "unlimited";
        socks4old.style.display = "none";
    } else {
        socks4age = slider14.value;
        socks4old.style.display = "inline";
    }
    socks4ageoutput.innerHTML = socks4age;
    socks4builder();
});
const socks5output = document.querySelector("#socks5timeoutoutput");
const socks5uptimeoutput = document.querySelector("#socks5uptimeoutput");
const socks5averagetimeoutoutput = document.querySelector("#socks5averagetimeoutoutput");
const socks5statusoutput = document.querySelector("#socks5statusoutput");
const socks5ageoutput = document.querySelector("#socks5ageoutput");
const socks5dead = document.querySelector("#socks5dead");
const socks5old = document.querySelector("#socks5old");
socks5uptimeoutput.innerHTML = socks5uptime;
slider6.addEventListener('input', () => {
    socks5uptime = slider6.value;
    socks5uptimeoutput.innerHTML = socks5uptime;
    socks5builder();
});
socks5output.innerHTML = socks5timeout;
slider3.addEventListener('input', () => {
    socks5timeout = slider3.value;
    socks5output.innerHTML = socks5timeout;
    socks5builder();
});
socks5averagetimeoutoutput.innerHTML = socks5averagetimeout;
slider9.addEventListener('input', () => {
    socks5averagetimeout = slider9.value;
    socks5averagetimeoutoutput.innerHTML = socks5averagetimeout;
    socks5builder();
});
socks5dead.style.display = "none";
socks5statusoutput.innerHTML = socks5status;
slider12.addEventListener('input', () => {
    if (slider12.value <= 0) {
        socks5status = "alive";
        socks5dead.style.display = "none";
    } else {
        socks5status = slider12.value;
        socks5dead.style.display = "inline";
    }
    socks5statusoutput.innerHTML = socks5status;
    socks5builder();
});
socks5old.style.display = "none";
socks5ageoutput.innerHTML = socks5age;
slider15.addEventListener('input', () => {
    if (slider15.value >= 100) {
        socks5age = "unlimited";
        socks5old.style.display = "none";
    } else {
        socks5age = slider15.value;
        socks5old.style.display = "inline";
    }
    socks5ageoutput.innerHTML = socks5age;
    socks5builder();
});
const httpcountrylist = document.querySelectorAll('ul.httpcountry');
for (let i = 0; i < httpcountrylist.length; i++) {
    httpcountrylist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.httpcountry > li.option.selected")) {
                httpcountry = document.querySelector("ul.httpcountry > li.option.selected").getAttribute("data-value");
                httpbuilder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}

const httpssllist = document.querySelectorAll('ul.httpssl');
for (let i = 0; i < httpssllist.length; i++) {
    httpssllist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.httpssl > li.option.selected")) {
                httpssl = document.querySelector("ul.httpssl > li.option.selected").getAttribute("data-value");
                httpbuilder();
                clearInterval(checkExist)
            }
        }, 100)
    })
}

const httpanonimitylist = document.querySelectorAll('ul.httpanonimity');
for (let i = 0; i < httpanonimitylist.length; i++) {
    httpanonimitylist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.httpanonimity > li.option.selected")) {
                httpanonymity = document.querySelector("ul.httpanonimity > li.option.selected").getAttribute("data-value");
                httpbuilder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}

const socks4countrylist = document.querySelectorAll('ul.socks4country');
for (let i = 0; i < socks4countrylist.length; i++) {
    socks4countrylist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks4country > li.option.selected")) {
                socks4country = document.querySelector("ul.socks4country > li.option.selected").getAttribute("data-value");
                socks4builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}

const socks5countrylist = document.querySelectorAll('ul.socks5country');
for (let i = 0; i < socks5countrylist.length; i++) {
    socks5countrylist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks5country > li.option.selected")) {
                socks5country = document.querySelector("ul.socks5country > li.option.selected").getAttribute("data-value");
                socks5builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}

const httpportlist = document.querySelectorAll('ul.httpport');
for (let i = 0; i < httpportlist.length; i++) {
    httpportlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.httpport > li.option.selected")) {
                httpport = document.querySelector("ul.httpport > li.option.selected").getAttribute("data-value");
                httpbuilder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}
const httporganizationlist = document.querySelectorAll('ul.httporganization');
for (let i = 0; i < httporganizationlist.length; i++) {
    httporganizationlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.httporganization > li.option.selected")) {
                httporganization = document.querySelector("ul.httporganization > li.option.selected").getAttribute("data-value");
                httpbuilder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}
const socks4portlist = document.querySelectorAll('ul.socks4port');
for (let i = 0; i < socks4portlist.length; i++) {
    socks4portlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks4port > li.option.selected")) {
                socks4port = document.querySelector("ul.socks4port > li.option.selected").getAttribute("data-value");
                socks4builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}
const socks4organizationlist = document.querySelectorAll('ul.socks4organization');
for (let i = 0; i < socks4organizationlist.length; i++) {
    socks4organizationlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks4organization > li.option.selected")) {
                socks4organization = document.querySelector("ul.socks4organization > li.option.selected").getAttribute("data-value");
                socks4builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}
const socks5portlist = document.querySelectorAll('ul.socks5port');
for (let i = 0; i < socks5portlist.length; i++) {
    socks5portlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks5port > li.option.selected")) {
                socks5port = document.querySelector("ul.socks5port > li.option.selected").getAttribute("data-value");
                socks5builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}
const socks5organizationlist = document.querySelectorAll('ul.socks5organization');
for (let i = 0; i < socks5organizationlist.length; i++) {
    socks5organizationlist[i].addEventListener('click', () => {
        const checkExist = setInterval(() => {
            if (document.querySelector("ul.socks5organization > li.option.selected")) {
                socks5organization = document.querySelector("ul.socks5organization > li.option.selected").getAttribute("data-value");
                socks5builder();
                clearInterval(checkExist);
            }
        }, 100)
    })
}

