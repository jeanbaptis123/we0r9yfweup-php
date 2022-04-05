<?php
set_include_path('../');
$pagetitle = "Available proxy types";
$pagedescription = "The proxy types we have available";
$pagekeywords = "socks, socks5, socks4, http, https";
    include "assets/inc/header.inc.php";
?>

    <main>
       
<div class="">
<div class="container">
            <div class="row">
            
                <div class="row services">
       
                
                </div>
               
                <div class="row serviceusecases">
                    <div class="col-md-12">
                    <div class="section-title services">
                        <h2>Our proxy types</h2>
                        
                        <p>for all your proxy needs</p>

                    </div>
                </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <a href="/proxy-types/buy-socks5-proxy">
                        <div class="itemcard downloadcard">
                            <h2>Socks5 proxies</h2>
                        </div>
                    </a>
                </div>
                
               <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <a href="/proxy-types/buy-socks4-proxy">
                        <div class="itemcard downloadcard">
                            <h2>Socks4 proxies</h2>
                        </div>
                    </a>
                </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <a href="/proxy-types/buy-socks-proxy">
                        <div class="itemcard downloadcard">
                            <h2>Socks proxies</h2>
                        </div>
                    </a>
                </div>
                 <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <a href="/proxy-types/buy-http-proxy">
                        <div class="itemcard downloadcard">
                            <h2>HTTP proxies</h2>
                        </div>
                    </a>
                </div>
               <div class="col-xl-6 col-lg-4 col-md-6 col-12">
                    <a href="/proxy-types/buy-https-proxy">
                        <div class="itemcard downloadcard">
                            <h2>HTTPs proxies</h2>
                        </div>
                    </a>
                </div>
               
               

                </div>
               
            
            </div>
        </div>
        
    </main>
<style type="text/css">
   
    .btn-outline-jum {
    color: #3e445b;
    border-color: #3464e0;
    border-width: 3px;
    border-style: solid;
    border-radius: 5px;
    padding: 12px 40px;
    font-weight: 600;
    font-size: 14px;
    display: inline-block;
    text-transform: uppercase;
    outline: 0;
    margin: 8px 0 8px 0;
    text-align: center;
}
.btn-outline-jum:hover {
  text-decoration: none;
}
.jumbotron {
        background: url(https://cdn.proxyscrape.com/img/jumbotron-01.svg?v=3);
    background-repeat: no-repeat;
    background-position: right bottom;
    height: 100vh;
    max-height: 750px;
    border-radius: 0;
     display: flex;
    align-items: center;
margin-bottom: -1px;

}
.bottomjumbo{
    background: url(https://cdn.proxyscrape.com/img/jumbotron-02.svg?v=3);
    background-repeat: no-repeat;
    background-position: right top;

}

@media only screen and (min-width: 2316px) {
    .bottomjumbo{
        background-size: 55vw;
    }
    .jumbotron {
        background-size: 55vw;
    }
}



@media only screen and (max-width: 2315px) {
    .bottomjumbo{
        background-size: 60vw;
    }
    .jumbotron {
        background-size: 60vw;
    }
}

@media only screen and (max-width: 2115px) {
    .bottomjumbo{
        background-size: 70vw;
    }
    .jumbotron {
        background-size: 70vw;
    }
}

@media only screen and (max-width: 1815px) {
    .bottomjumbo{
        background-size: 75vw;
    }
    .jumbotron {
        background-size: 75vw;
    }
}

@media only screen and (max-width: 1700px) {
    .bottomjumbo{
       background-size: contain;
    background-position: right -20vw top;
    }
    .jumbotron {
       background-size: cover;
    background-position: right -20vw bottom;
    }
}

@media only screen and (max-width: 1300px) {

    .bottomjumbo{
           background: unset;
    }
    .jumbotron {
          background: url(https://cdn.proxyscrape.com/img/jumbotron-03.svg?v=3);
    background-repeat: no-repeat;
    background-size: cover;
    }
    .infotext  {
           background-color: white;
    padding: 30px;
    border-radius: 10px;
    }
}

@media only screen and (max-width: 1030px) {


    .jumbotron {
           background: url(https://cdn.proxyscrape.com/img/jumbotron-04.svg?v=3);
    background-repeat: no-repeat;
    background-size: cover;
    }
 
}

h1 {

    margin-bottom: 20px;
}

.text li {
        font-size: 17px;
}

.section-title.services{
    margin-bottom: 0;
}

.row.services div{
    padding-top: 40px;
}



.servicesdetail{
        width: 100%;
}
.servicesdetail div:nth-child(even) {
    min-height: 350px;
}

.proxynumber {
        font-size: 3.5rem;
    font-weight: 700;
    color: #3464e0;
}

.finaladv .itemcard.downloadcard .row div {
    font-size: 5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #3464e0;
    flex-direction: column;
}
.finaladv .itemcard.downloadcard .row div h2 {
    margin-bottom: 0;
}

.servicesdetail {
        padding-top: 60px;
}

.servicesdetail h2 {
    margin-bottom: 1rem;
}

.serviceusecases {
    padding-top: 60px;
}

.serviceusecases .section-title {
    padding-bottom: 20px;
}

.section-title.services.clients{
     padding-top: 60px;
 padding-bottom: 20px;
}
</style>
<?php include "assets/inc/footer.inc.php";?>