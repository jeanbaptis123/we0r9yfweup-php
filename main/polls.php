<?php
$pagetitle = "ProxyScrape polls";
$pagedescription = "Help ProxyScrape improve";
$pagekeywords = "polls";
include "assets/inc/header.inc.php";
?>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "6d38fc16-4975-4058-9d83-244df047dafa",
      notifyButton: {
        enable: false,
      },
    });
  });
</script>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>ProxyScrape polls</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Help ProxyScrape improve</p>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 ">
                    <div class="itemcard full">
                        <div id="ad1" class="box greenBox">
                            <div id="subscriptiontext">Want to help ProxyScrape improve?</div>
                            <button class="btn" id="my-notification-button">Subscribe to Notifications</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 ">
                    <div class="itemcard full">
                        <iframe src="" style="width: 100%;height: 4500px;" frameborder="0" marginheight="0" marginwidth="0" id="pollframe">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>
    function onManageWebPushSubscriptionButtonClicked(event) {
        getSubscriptionState().then(function(state) {
            if (state.isPushEnabled) {
                /* Subscribed, opt them out */
                OneSignal.setSubscription(false);
            } else {
                if (state.isOptedOut) {
                    /* Opted out, opt them back in */
                    OneSignal.setSubscription(true);
                } else {
                    /* Unsubscribed, subscribe them */
                    OneSignal.registerForPushNotifications();
                }
            }
        });
        event.preventDefault();
    }

    function updateMangeWebPushSubscriptionButton(buttonSelector) {
        var hideWhenSubscribed = false;
        var subscribeText = "Subscribe to Notifications";
        var unsubscribeText = "Unsubscribe";

        getSubscriptionState().then(function(state) {
            var buttonText = !state.isPushEnabled || state.isOptedOut ? subscribeText : unsubscribeText;

            var element = document.querySelector(buttonSelector);
            if (element === null) {
                return;
            }

            element.removeEventListener('click', onManageWebPushSubscriptionButtonClicked);
            element.addEventListener('click', onManageWebPushSubscriptionButtonClicked);
            element.textContent = buttonText;

            if (state.hideWhenSubscribed && state.isPushEnabled) {
                element.style.display = "none";
            } else {
                $("#subscriptiontext").html("Want to help ProxyScrape improve?");
                if (state.isPushEnabled) {
                    $("#subscriptiontext").html("Don't want to help ProxyScrape anymore?");
                }
                element.style.display = "";
            }
        });
    }

    function getSubscriptionState() {
        return Promise.all([
          OneSignal.isPushNotificationsEnabled(),
          OneSignal.isOptedOut()
        ]).then(function(result) {
            var isPushEnabled = result[0];
            var isOptedOut = result[1];

            return {
                isPushEnabled: isPushEnabled,
                isOptedOut: isOptedOut
            };
        });
    }

    var OneSignal = OneSignal || [];
    var buttonSelector = "#my-notification-button";

    /* This example assumes you've already initialized OneSignal */
    OneSignal.push(function() {
        // If we're on an unsupported browser, do nothing
        if (!OneSignal.isPushNotificationsSupported()) {
            return;
        }
        updateMangeWebPushSubscriptionButton(buttonSelector);
        OneSignal.on("subscriptionChange", function(isSubscribed) {
            /* If the user's subscription state changes during the page's session, update the button text */
            updateMangeWebPushSubscriptionButton(buttonSelector);
        });
    });

    $(document).ready(function(){
    $('iframe#pollframe').attr('src', 'https://docs.google.com/forms/d/e/1FAIpQLSfvCHoeIRkCKRIqYKpvLlpFVV3EA3ODMJ6I90kw5tFwxj0oWg/viewform?embedded=true');
});
    </script>
    <style type="text/css">
        #my-notification-button {
            display: block;margin: auto;margin-top: 8px;
        }
    </style>
<?php include "assets/inc/footer.inc.php";?>