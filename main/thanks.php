<?php
$pagetitle = "Thanks for buying";
$pagedescription = "Thanks for buying ProxyScrape premium.";
$pagekeywords = "Thanks for buying";
    include "assets/inc/header.inc.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Thanks for buying</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Hope you like it!</p>

                    </div>
                </div>
                <div class="col-12">
            <div class="imagecard">
               <button class="lets-play" data-video="https://vimeo.com/638182091" style=" background: none;
   color: inherit;
   border: none;
   padding: 0;
   width: 100%;
   font: inherit;
   outline: inherit;"><img src="https://cdn.proxyscrape.com/img/thankyouthumb2.png"></button>
               <div id="video-wrap"></div>   
            </div>
         </div>
                 
         <style type="text/css">
             #video-wrap:not(.active) {
    opacity: 0;
    visibility: hidden;
}
 #video-wrap .video-overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}
 #video-wrap .video-container {
    width: 95%;
    transition: all 0.3s ease-in-out;
    transform: scale(0.9);
}
 #video-wrap .close-video {
 background-color: rgb(72, 136, 199);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: 5%;
    top: 5%;
    width: 42px;
    height: 42px;
    border-radius: 100%;
    /* border: solid 2
px
 #000; */
    padding: 0;
    transition: all 0.3s ease-in-out;
    z-index: 150;
    border-style: none;
}
 #video-wrap .close-video:before, #video-wrap .close-video:after {
    content: "";
    width: 60%;
    height: 3px;
    background-color: #fff;
    position: absolute;
    transition: all 0.3s ease-in-out;
}
 #video-wrap .close-video:before {
    transform: rotate(42deg);
}
 #video-wrap .close-video:after {
    transform: rotate(-42deg);
}
 #video-wrap .close-video:focus {
    outline: none;
}
 #video-wrap .close-video:hover {
    background-color: #fff;
}
 #video-wrap .close-video:hover:before, #video-wrap .close-video:hover:after {
    background-color: rgb(72, 136, 199);
}
 #video-wrap video, #video-wrap iframe {
    position: relative;
    z-index: 10;
    border-radius: 12px;
    box-shadow: 0 0 19px rgba(0, 0, 0, 0.16);
    width: 100%;
    height: 100vh;
    max-height: 85vh;
    background-color: #000;
    object-fit: cover;
}
 #video-wrap.active {
    opacity: 1;
    visibility: visible;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    padding: 12px;
    height: 100vh;
    display: flex;
    transition: all 0.3s ease-in-out;
    z-index: 9991;
    align-items: center;
    justify-content: center;
}
 #video-wrap.active .video-container {
    transform: scale(1);
}
 @media (max-width: 1659px) and (min-width: 1330px) {
    #video-wrap .video-container {
       max-width: 978px;
   }
}
 @media (min-width: 1660px) {
    #video-wrap .video-container {
       max-width: 1431px;
   }
}
 
         </style>
         <script type="text/javascript">
            function videoId(button) {
                if (typeof(dataLayer) !== "undefined") {
                    dataLayer.push({'event' : 'GAEvent', 'eventAction' : 'watch-thankyou', 'eventCategory' : 'video'});
                } else {
                    console.log("datalayer not defined");
                }

                
  var $videoUrl = button.attr("data-video");
  if ($videoUrl !== undefined) {
    var $videoUrl = $videoUrl.toString();
    var srcVideo;
    
    if ($videoUrl.indexOf("youtube") !== -1) {
      var et = $videoUrl.lastIndexOf("&");
      if (et !== -1) {
        $videoUrl = $videoUrl.substring(0, et);
      }
      var embed = $videoUrl.indexOf("embed");
      if (embed !== -1) {
        $videoUrl =
          "https://www.youtube.com/watch?v=" +
          $videoUrl.substring(embed + 6, embed + 17);
      }
     
      srcVideo =
        "https://www.youtube.com/embed/" +
        $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
        "?autoplay=1&mute=1&loop=1&playlist=" +
        $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
        "";
    } else if ($videoUrl.indexOf("youtu") !== -1) {
      var et = $videoUrl.lastIndexOf("&");
      if (et !== -1) {
        $videoUrl = $videoUrl.substring(0, et);
      }
      var embed = $videoUrl.indexOf("embed");
      if (embed !== -1) {
        $videoUrl =
          "https://youtu.be/" +
          $videoUrl.substring(embed + 6, embed + 17);
      }
     
      srcVideo =
        "https://www.youtube.com/embed/" +
        $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
        "?autoplay=1&mute=1&loop=1&playlist=" +
        $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
        "";
      
      } else if ($videoUrl.indexOf("vimeo") !== -1) {
      srcVideo =
        "https://player.vimeo.com/video/" +
        $videoUrl
          .substring($videoUrl.indexOf(".com") + 5, $videoUrl.length)
          .replace("/", "") +
        "?autoplay=1";
      
      
    } else if ($videoUrl.indexOf("mp4") !== -1) {
      return (
        '<video loop playsinline autoplay><source src="' +
        $videoUrl +
        '" type="video/mp4"></video>'
      );
    } else {
      alert(
        "The video assigned is not from Youtube, Vimeo or MP4, remember to enter the correct complete video link .\n - Youtube: https://www.youtube.com/watch?v=43ngkc2Ejgw\n - Vimeo: https://vimeo.com/111939668\n - MP4 https://server.com/file.mp4"
      );
      return false;
    }
    return (
      '<iframe src="' +
      srcVideo +
      '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    );
  } else {
    alert("No video assigned.");
    return false;
  }
}

$(".lets-play").click(function (e) {
  e.preventDefault();
  var $theVideo = videoId($(this));
  if ($theVideo) {
    $("#video-wrap")
      .html(
        '<span class="video-overlay"></span><div class="video-container">' +
          $theVideo +
          '</div><button class="close-video"></button>'
      )
      .addClass("active");
  }
});

$(document).on("click", ".close-video, .video-overlay", function () {
  $("#video-wrap").empty().removeClass("active");
});

         </script>  
            </div>
        </div>
    </main>

<?php include "assets/inc/footer.inc.php";?>