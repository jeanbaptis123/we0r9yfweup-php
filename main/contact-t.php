<?php
$pagetitle = "Contact";
$pagedescription = "Contact the ProxyScrape support";
$pagekeywords = "contact, contact proxyscrape";
    include "assets/inc/header.inc.php";
?>
<style type="text/css">
  .form-control {
    margin-bottom: 10px;
  }
</style>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Contact ProxyScrape</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Contact us if the FAQ doesn't answer your question.</p>

                    </div>
                </div>
                <div class="col-md-12">
        <div class="itemcard">
        <div class="form-group">
          <div id="mailinfo" class="box" style="display: none;">

                            </div>
          <form id="mailform">
            <input type="text" name="name" class="form-control" placeholder="Your name">
          <input type="email" name="email" class="form-control" placeholder="Your email">
          <input type="text" name="subject" class="form-control" placeholder="Subject">
          <textarea placeholder="Write your message here. Please include all relevant information such as order ID, transaction ID, serial key, IP, etc." id="inputtext" class="form-control" placeholder="Paste your list in here" style="height: 200px; min-height: 200px;" name="message"></textarea>
          <p>or e-mail directly to <a href="mailto:support@proxyscrape.com" style="text-decoration: underline;">support@proxyscrape.com</a> or call us at <a href="tel:+32 478 69 58 06" style="text-decoration: underline;">+32 478 69 58 06</a></p>
          <button class="btn" id="sumbitbutton">submit</button>
          </form>

        </div>
      </div> 
      
            </div>
        </div>
    </main>
<script type="text/javascript">
  jQuery(document).ready(function($) {
        $("#sumbitbutton").click(function() {
          $("#sumbitbutton").hide();
            $("#mailinfo").removeClass("redBox");
            $("#mailinfo").removeClass("greenBox");
            var url = "https://api.proxyscrape.com/v2/contact.php"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: $("#mailform").serialize(), // serializes the form's elements.
                success: function(data) {
                    $("#mailinfo").addClass("greenBox");
                    $("#mailinfo").text(data); // show response from the php script.
                    $("#mailform").hide();
                },
                error: function(data) {
                    $("#mailinfo").addClass("redBox");
                    $("#mailinfo").text(data["responseText"]);
                    $("#sumbitbutton").show();
                }
            });
            $("#mailinfo").show();
            return false; // avoid to execute the actual submit of the form.
        });
      });
</script>
<?php include "assets/inc/footer.inc.php";?>