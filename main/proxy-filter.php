<?php
$pagetitle = "Online proxy filter";
$pagedescription = "Filter proxies to ip:port";
$pagekeywords = "proxy filter, online proxy filter, clean proxies, proxy cleaner, online proxy cleaner, clean proxies online, filter proxies online";
    include "assets/inc/header.inc.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Online proxy filter</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Filter proxies to ip:port</p>

                    </div>
                </div>
                <div class="col-md-12">
        <div class="itemcard">
            <h4 id="linesremoved"></h4>
        <div class="form-group">
          <textarea placeholder="1.1.1.1 8080
1.1.1.1 : 8080 OK
1.1.1.1:8080 01/01/00" id="inputtext" class="form-control" placeholder="Paste your list in here" style="height: 200px;"></textarea>
        </div>
        <div class="container" style="
    padding-top: 22px;
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0;
">
            <div class="row">
            <div class="col-lg-4 col-12">
              <button type="submit" onclick="filter()" class="btn btn-blue" style="
    width: 100%;
">Filter proxies</button>
          </div>
          <div class="col-lg-4 col-12">
              <button type="submit" onclick="savetofile()" class="btn btn-blue" style="
    width: 100%;
">Save to file</button>
          </div>
          
          <div class="col-lg-4 col-12">
              <div class="form-group">
                <input value="output.txt" type="text" class="form-control" id="outputname" name="outputname" style="
    width: 100%;
    margin: 8px 0 8px 0;
    height: 50.8px;
">
              </div>
          </div>

              
              <div class="row">
        </div>
        </div>
      </div> 
      <script type="text/javascript">
    function filter() {
    var lines = $('textarea').val().split('\n');
           var regex1 = /\s+/;
           var regex2 = /[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\:[0-9]{1,5}/;
           document.getElementById('inputtext').value = "";
for(var i = 0;i < lines.length;i++){
    output = lines[i].replace(regex1, ':');
    output = output.match(regex2);
    if (output !== null) {
    document.getElementById("inputtext").value += output + "\n";
    }
}
}

    function savetofile(){
    var text = document.getElementById("inputtext").value;
    text = text.replace(/\n/g, "\r\n"); // To retain the Line breaks.
    var blob = new Blob([text], { type: "text/plain"});
    var anchor = document.createElement("a");
    anchor.download = document.getElementById("outputname").value;
    anchor.href = window.URL.createObjectURL(blob);
    anchor.target ="_blank";
    anchor.style.display = "none"; // just to be safe!
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
 }
    </script>
            </div>
        </div>
        <?php
include "assets/inc/blogcard.inc.php";
?>
    </main>

<?php include "assets/inc/footer.inc.php";?>