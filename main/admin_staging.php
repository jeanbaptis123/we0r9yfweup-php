<?php
if (!isset($_GET["auth"]) || empty($_GET["auth"]) || "5372g9y9fyg4s7d925s5ct7ls5ou6958sh32" != $_GET["auth"]) {
    http_response_code(404);
    require 'not_found.php';
    die();
}
$pagetitle = "Admin dashboard";
$pagedescription = "Unwhitelist and suspend users";
$pagekeywords = "Admin dashboard";
include "assets/inc/header.inc.php";
?>

    <main style="min-height: 100vh;">
       <div class="container">
            <div class="row shopcontainer">
                <div class="col-md-12">

                    <div class="section-title ">
                        <h1>Admin dashboard</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Unwhitelist and suspend users</p>

                    </div>
                </div>






            </div>
            <style type="text/css">
              input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=text]#dnum {
  -moz-appearance: textfield;
}
input[type=text]#dnum {
    text-align: center;
}
input[type=text]#dnum:focus {
        width: 100px !important;
    height: 51px !important;
    border-radius: 0 !important;
    border: 1px solid #ced4da !important;
    outline: none;
}
input[type=text] {
    margin-top: 0px;
    height: 51px;
    display: inline-block;
    border-radius: .25rem;
    width: 100%;
    border-width: 1px;
    margin-bottom: 10px;
}
input[type=checkbox] {
    margin-top: 0px;
    height: 25px;
    display: inline-block;
    border-radius: .25rem;
    width: 25px;
    margin-right: 10px;

}
textarea {
  width: 100%;
  min-height: 350px;
}
.checkboxcontainer {
  text-align: left;
}
            </style>
            <div class="row" id="premiumsection">
                  <div class="col-lg-12 col-md-12 col-12">
                    <div class="itemcard">
                      <form id="unwhitelistform">
                        <div style="text-align: left;">
                          <p>If you are visiting this page, it probably means you are trying to keep the proxies safe & working; thanks for that :) (you are awesome)
<br>Some extra info:</p>
                          <ul>
                          <li>Provide an IP to unwhitelist the IP or suspend the user(s)</li>
                          <li>Provide an ID to rewhitelist IPs and unsuspend the user(s). The IDs should have been provided when the user was first suspended/unwhitelisted.</li>
                          <li>If you unwhitelist an IP, the user can rewhitelist it himself.</li>
                          <li>(!!) If you decide to check the checkbox "suspend user(s)" the user(s) will (temporarily) lose full control of his proxyscrape account, and the IPs will be unwhitelisted; please use this with caution. This also means the user will not be able to rewhitelist IPs himself.</li>
                          <li>(!!!) In case the users keep coming back when suspended, it is likely that they are creating new accounts. Use this function to prevent the IP from being re-whitelisted on the entire system. (does not apply to related IPs of the account, only on the provided IP)</li>
                          <li>If you want to unwhitelist all IPs of a user (when not suspending) but don't know all IPs please check the "
Unwhitelist all related IPs of the accounts of the above-provided IPs" checkbox.</li>
                        </ul>
                        <p>Please provide the IP(s) or ID(s) here:</p>
                        </div>
                        <div id="ipidcontainer">
                          <input type="text" name="iporid[]" placeholder="IP or ID">
                        </div>


                          <button class='btn btn-blue'  type="button" id="addipid">Add another IP or ID</button> <button class='btn btn-blue'  type="button" id="resetipid">Reset</button>
                          <script type="text/javascript">

                          </script>
                          <div class="checkboxcontainer">
                            <input type="checkbox" name="related" id="related"><label for="related"> Unwhitelist all related IPs of the accounts of the above-provided IPs</label><br>
                        </div>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="suspend" id="suspend"><label for="suspend"> Suspend user(s) (!!) (Only works for IPs)</label><br>
                        </div>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="blacklistadd" id="blacklistadd"><label for="blacklistadd">Blacklist IP (!!!)</label><br>
                        </div>
                        <input type="text" name="name" placeholder="Your wonderful name">
                        <textarea name="explanation" id="explanation" placeholder="Please provide a (detailed) explanation for this decision" required></textarea>
                        <p>An email will be send to contact@proxyscrape.com with the details</p>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="e1" id="e1" checked="true"><label for="e1"> Send a copy of the details to engineer@blazingseo.com</label><span> (This is recommended, this copy contains the user IDs of the unwhitelisted IPs & suspended users, should you want to reverse the actions taken, the user ID is required.)</span><br>
                        </div>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="e2" id="e2"><label for="e2"> Send a copy of the details to derek.knorr@sprious.com</label><br>
                        </div>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="e3" id="e3"><label for="e3"> Send a copy of the details to taylor.fleeman@sprious.com</label><br>
                        </div>
                        <div class="checkboxcontainer">
                            <input type="checkbox" name="e4" id="e4"><label for="e4"> Send a copy of the details to ben.emeigh@sprious.com</label><br>
                        </div>
                <div class="checkboxcontainer">
                            <input type="checkbox" name="e5" id="e5"><label for="e5"> Send a copy of the details to kade.baker@sprious.com</label><br>
                        </div>
                        <div id="forminfo" class="box greenBox" style="display: none;"></div>
                        <button class='btn btn-blue'  id="sumbitbutton" style="width: 100%;">submit</button>
                        <p>If you have any suggestions on how to improve this panel please feel free to mail it to contact@proxyscrape.com</p>
                      </form>
                      <script type="text/javascript">
  jQuery(document).ready(function($) {
        $("#sumbitbutton").click(function(e) {
          if (!$(e.target).hasClass("disabled")) {
            $(e.target).addClass("disabled");
             $(e.target).text("Submitting, please wait...");
            $("#forminfo").hide();
            $("#forminfo").text("");
              $("#forminfo").removeClass("redBox");
              $("#forminfo").removeClass("greenBox");
              var url = "https://staging.proxyscrape.com/v2/admin/unwhitelist"; // the script where you handle the form input.

              $.ajax({
                  type: "POST",
                  url: url,
                  data: $("#unwhitelistform").serialize(), // serializes the form's elements.
                  success: function(data) {
                  	$('#forminfo').css('text-align','left');
                    $("#ipidcontainer").html('<input type="text" name="iporid[]" placeholder="IP or ID">');
                    $("#suspend").prop("checked", false);
                    $("#related").prop("checked", false);
                    $("#explanation").val("");
                      $("#forminfo").addClass("greenBox");
                      $("#forminfo").html(data);
                      $("#sumbitbutton").show();
                      $("#forminfo").show();
                      $(e.target).text("submit");
                      $(e.target).removeClass("disabled");
                  },
                  error: function(data) {
                  	  $('#forminfo').css('text-align','center');
                      $("#forminfo").addClass("redBox");
                      $("#forminfo").html(data["responseText"]);
                      $("#sumbitbutton").show();
                      $("#forminfo").show();
                       $(e.target).text("submit");
                      $(e.target).removeClass("disabled");
                  }
              });
            }
            return false; // avoid to execute the actual submit of the form.
        });
        $("#addipid").click(function(e) {
          $("#ipidcontainer").append('<input type="text" name="iporid[]" placeholder="IP or ID">');
        });
        $("#resetipid").click(function(e) {
          $("#ipidcontainer").html('<input type="text" name="iporid[]" placeholder="IP or ID">');
        });
      });
</script>
                    </div>

                </div>
                </div>
        </div>

    </main>


<?php include "assets/inc/footer.inc.php";?>