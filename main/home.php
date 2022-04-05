<?php

$pagetitle = "ProxyScrape | Unlock the power of the web with proxies";
$pagedescription = "ProxyScrape, all in one for your proxy needs";
$pagekeywords = "proxyscrape home, proxyscrape home page, home page, proxyscrape";
    include "assets/inc/header.inc.php";
?>

<main>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 infotext">
                    <div class="text">
                        <div class="row">
                            <div class="col-12">
                                <h1>Scrape websites without limits</h1>
                            </div>
                        </div>
                        <ul>
                            <li>Up to 50 000 datacenter proxies</li>
                            <li>99% uptime guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <div class="row">
                            <div class="col-lg-5 col-12"><a class="btn w-100" href="/premium?ref=home">Start now</a>
                            </div>
                            <div class="col-lg-5 col-12"><button id="playvideo" onclick="videoId();"
                                    class="lets-play btn-outline-jum w-100" data-video="https://vimeo.com/644945961"
                                    style="background-color: unset; display: flex;justify-content: center;"><svg
                                        style="width: 20px; margin-right: 5px;" aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="play-circle" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="svg-inline--fa fa-play-circle fa-w-16">
                                        <path fill="currentColor"
                                            d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"
                                            class=""></path>
                                    </svg>Welcome video</button></div>
                        </div>


                        <div id="video-wrap"></div>


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
                            /* border: solid 2px#000; */
                            padding: 0;
                            transition: all 0.3s ease-in-out;
                            z-index: 150;
                            border-style: none;
                        }

                        #video-wrap .close-video:before,
                        #video-wrap .close-video:after {
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

                        #video-wrap .close-video:hover:before,
                        #video-wrap .close-video:hover:after {
                            background-color: rgb(72, 136, 199);
                        }

                        #video-wrap video,
                        #video-wrap iframe {
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
                        function videoId() {
                            if (typeof(dataLayer) !== "undefined") {
                                dataLayer.push({
                                    'event': 'GAEvent',
                                    'eventAction': 'watch-welcometops',
                                    'eventCategory': 'video'
                                });
                            } else {
                                console.log("datalayer not defined");
                            }
                            var $videoUrl = document.getElementById("playvideo").getAttribute("data-video");
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

                        $(".lets-play").click(function(e) {
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

                        $(document).on("click", ".close-video, .video-overlay", function() {
                            $("#video-wrap").empty().removeClass("active");
                        });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottomjumbo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title services" id="services">
                        <h2>Our services</h2>

                        <p>for your proxy needs</p>

                    </div>
                </div>
                <div class="row services">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <a href="/residential-proxies"><svg version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="273.6px" height="404.2px" viewBox="0 0 273.6 404.2"
                                    style="height: 142px !important;" xml:space="preserve">

                                    <g>
                                        <path d="M237,374.9c-0.9-56.7-1.3-113.5-2.6-170.2c-0.3-12-5.6-15.2-15.1-24.5c-10.2-10-20-25.3-30.7-34.9
        c-23.5-21.3-44.4-44.8-62.6-69.8c-1.9-2.6-6.8-3.3-8.9-0.8c-29.3,35.2-63.8,77.6-102.4,104.7c-3,2.1-2.5,5.6-0.5,7.7
        c-8,52.9-12.4,95.4-13.8,149c-0.4,13.6-0.5,27.2-0.4,40.8c0,8.7,0.5,17.6,11.5,20.9c12,3.6,27.3,1.7,39.7,2
        c16.1,0.4,32.1,0.8,48.2,1.2c30.9,0.8,61.8,1.6,92.6,2.4c8,0.2,16.1,0.4,24.1,0.6c4.9,0.1,10.7,0.8,15.1-1.4
        C240.7,397.8,237.1,383.1,237,374.9z" style="fill:#ECECEC;"></path>
                                        <path d="M237.1,197.3c-6-11.3-13.3-21.6-21.3-31.4c2.1-18.7,4.5-37.7,5-56.5c0.2-5.3,0.4-10-4.6-13
        c-6-3.6-16.7-3.2-23.4-3.4c-2.4-0.1-5.3,1.9-5.8,4.4c-2,10.8-3.5,21.6-4.5,32.6c-19.3-19.9-38.6-39.7-57.8-59.6
        c-2.2-2.3-6.2-2.3-8.4,0C78.8,109.2,41.3,148.1,3.8,187c-5.3,5.5,3.1,14,8.4,8.4C48.3,158,84.4,120.6,120.5,83.1
        c19.2,19.8,38.3,39.5,57.5,59.3c18.2,18.8,36.4,37.6,48.7,60.9C230.4,210.1,240.7,204.1,237.1,197.3z"
                                            style="fill:#EF86B0;"></path>
                                        <path d="M156.6,194c-2.5-17.1-17.3-32.9-34.6-33.7c-0.4-0.1-0.7-0.1-1.1-0.2c-0.9-0.8-2.2-1.3-3.9-1.1
        c-20.6,2-35.3,19.3-34.3,40.1c1.1,21.8,15.8,36.9,37.9,34.6c8.7-0.9,16.8-4.3,22.9-9.6c1.6-1.1,3.1-2.3,4.4-3.4
        C155.6,214,158,204,156.6,194z" style="fill:#B4C7E7;"></path>
                                        <path d="M160.1,358.2c-0.3-10.5,0.1-21.6-3.4-31.7c-5.5-16-21.6-29.8-38.4-32.5c-17.3-2.8-32.4,8.9-39.1,24.3
        c-5.5,12.8-5.5,26.4-5.3,40c-1.8,12.5-2.4,25.3-3.6,36.9c-0.3,3.2,2.8,6.1,5.9,6.1c26.2-0.1,52.5,0.1,78.7,0.6
        c3.1,0.1,6.2-2.6,6.1-5.9C160.7,383.5,160.4,370.8,160.1,358.2z" style="fill:#C39A8A;"></path>
                                        <path d="M152,348.7c-7.7,0-7.7,11.9,0,11.9C159.7,360.7,159.7,348.7,152,348.7z"
                                            style="fill:#57455D;"></path>
                                        <path d="M158,193.7c-11.9-1.3-23.7-2.2-35.6-2.5c0.5-10.2,1.1-20.4,2.1-30.6c0.7-7.6-11.2-7.6-11.9,0
        c-0.9,10.1-1.6,20.2-2.1,30.4c-10,0-20,0.3-30,1c-7.6,0.5-7.7,12.5,0,11.9c9.9-0.7,19.7-1,29.6-1c-0.2,8.6-0.3,17.3-0.1,25.9
        c0,0.1,0,0.2,0,0.4c0,0.7,0,1.3,0.1,2c0.2,7.7,12.1,7.7,11.9,0c-0.2-9.4-0.2-18.7,0.1-28.1c12,0.3,24.1,1.2,36.1,2.5
        C165.6,206.5,165.5,194.5,158,193.7z" style="fill:#57455D;"></path>
                                        <path d="M264.1,14.7c0-10.1-11.5-17.1-21.6-13.8c-13.1,4.3-19.8,18.9-21.3,32.1c-16.9,4.9-22.5,24.1-15.9,40.5
        c1.2,3.1,4.2,4.2,6.8,3.9c1.3,1.4,3.1,2.6,5.3,3.2c7,1.9,12.1-1.7,15.5-6.9c10.3,4.4,26.2-8.1,30-18.6c1.6-4.3,1.4-7.3,4.2-10.8
        c2.9-3.7,5.5-6.4,6.3-11.3C274.6,24.9,270.5,18.3,264.1,14.7z" style="fill:#74A2D6;"></path>
                                    </g>
                                </svg>
                                <h2>Residential proxies</h2>
                            </a>
                            <p>Residential proxies are a fantastic alternative to datacenter proxies. Residential
                                proxies are less likely to be blocked on superior targets.</p>
                            <div class="downloadbtn"><a href="/residential-proxies">Learn more</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <a href="/premium?ref=home"><svg id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 221.29 306.59">
                                    <title>ProxyScrape premium</title>
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: none;
                                        }

                                        .cls-2 {
                                            clip-path: url(#clip-path);
                                        }

                                        .cls-3 {
                                            fill: #b6c8e8;
                                        }

                                        .cls-4 {
                                            clip-path: url(#clip-path-2);
                                        }

                                        .cls-5 {
                                            fill: #f087b1;
                                        }

                                        .cls-6 {
                                            fill: #f7d16f;
                                        }

                                        .cls-7 {
                                            fill: #74a3d7;
                                        }

                                        .cls-8 {
                                            fill: #fff;
                                        }

                                        .cls-9 {
                                            fill: #57455e;
                                        }
                                        </style>
                                        <clipPath id="clip-path" transform="translate(0 0)">
                                            <rect class="cls-1" x="50.49" y="9.65" width="170.8" height="296.94"></rect>
                                        </clipPath>
                                        <clipPath id="clip-path-2" transform="translate(0 0)">
                                            <rect class="cls-1" width="201.35" height="296.99"></rect>
                                        </clipPath>
                                    </defs>
                                    <g class="cls-2">
                                        <g id="Ð_Ð_Ð_Ð__2QBo2t2K81viZ5OwcrGHO2"
                                            data-name="Ð¡Ð»Ð¾Ð¹_2QBo2t2K81viZ5OwcrGHO2">
                                            <g id="Capa_1QBo2t2K81viZ5OwcrGHO2" data-name="Capa 1QBo2t2K81viZ5OwcrGHO2">
                                                <path class="cls-3"
                                                    d="M140.29,10.06c-55,5.61-77.44,71.13-48.86,114.25,4.64,7.07,11.73,13.89,14.41,21.44,5.62,15.83-5.61,22.65-16.36,30.69C78.73,184.72,67,192.28,59.67,204.21c-16.37,26.56-9.77,59.93,11.24,81.37a18.86,18.86,0,0,0,6.6,4.14,41.18,41.18,0,0,0,32.24,16.8C135.89,308,150.8,286.06,154,262.43c2-13.39,0-27.77,2.69-41.41,2.69-15.83,11.24-30.21,20-43.12,14.9-22.65,33-44.09,41-70.64C233.61,57.08,194.28,4.46,140.29,10.06Z"
                                                    transform="translate(0 0)"></path>
                                            </g>
                                        </g>
                                    </g>
                                    <g class="cls-4">
                                        <g id="Ð_Ð_Ð_Ð__21IrXAlRoho3ejyisBB7uh"
                                            data-name="Ð¡Ð»Ð¾Ð¹_21IrXAlRoho3ejyisBB7uh">
                                            <g id="Capa_11IrXAlRoho3ejyisBB7uh" data-name="Capa 11IrXAlRoho3ejyisBB7uh">
                                                <path class="cls-5"
                                                    d="M53.23,118a1.79,1.79,0,0,0,.16-2.72c-4.5-4.7-8.67-10.08-13.65-14.25-3.32-2.8-7.74-4.86-12.23-3.28-4.25,1.49-6.6,5.54-8.06,9.35-2.19,5.63-3.48,11.63-5,17.38C7.66,149.82,2.52,175.62.7,201.66Q0,211.32,0,221.1c0,6.07-.16,12.31.89,18.31.77,4.61,3,9,7.37,11.54a11.07,11.07,0,0,0,12.52-.85c4.09-3.2,7-8.14,9.72-12.31a124,124,0,0,0,8.26-14.87,145.74,145.74,0,0,0,10.49-31C54.56,167.68,54.89,142.65,53.23,118Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-5"
                                                    d="M201.05,195.91c-1.13-11.63-4.78-22.92-7.9-34.06C187,139.78,180.31,117.66,170,97c-3.57-7.21-10.17-19.44-20.86-15-5.31,2.11-9,7.53-12.15,11.91a71,71,0,0,0-7.57,13.36c-1.22-.89-3.73.08-3.28,2.07,4.94,22.92,9.47,46.53,20.65,67.63a93.26,93.26,0,0,0,18.43,24.38,76,76,0,0,0,12,9.12c3.92,2.43,8.74,5.3,13.44,5.75C202.27,217.09,201.74,203,201.05,195.91Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-6"
                                                    d="M128,242.6c-1.3-3.8-2.71-7.57-4.33-11.29-1.3-3-2.52-7.38-5.15-9.48-2.43-2-6.44-1.14-9.39-1.05-4.54.16-9.2.08-13.81.36-5.76.36-12.36,2.43-14.75,7.53a1.76,1.76,0,0,0-1.74,1.38A111.94,111.94,0,0,0,75,255.85c-.16,6.6-1.21,16.08,4.1,21.26,1,.89,3.11.61,3.4-.85.24-1.05.36-2.11.52-3.2.61,2.51,1.3,5,2.11,7.53,1.82,5.31,3.89,13.57,9.8,16.16a2,2,0,0,0,3-1.13,77,77,0,0,0,1.82-8.34,49.2,49.2,0,0,0,4.17,8.18,2.09,2.09,0,0,0,2.27.85,5.74,5.74,0,0,0,4.09-3.93,63.18,63.18,0,0,0,2.59-10.61c.08-.29.08-.53.16-.85,1.22,2.59,3.57,4.94,6.44,2.59,3.57-2.79,3.2-9.48,3.73-13.37.44-3.32.85-6.68,1.13-10,.69,1.66,1.38,3.28,2.11,4.94s3.12.85,3.73-.44C133.29,257.63,130.26,249.41,128,242.6Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-7"
                                                    d="M135,200.69c-2.95-1-6.15,0-9.11.44a120.59,120.59,0,0,1-14.66,1.14c-9.8.24-19.6-.37-29.44-.29-4.7.08-9.36.25-14,.77-3.29.37-6.93.37-9,3.2a.65.65,0,0,0-.24.45,1.73,1.73,0,0,0-.61,1.37c.17,5.76,1,12.92,7.54,15.56,1.37.52,3.72.36,4.61,1.5.77.89.53,2.71.61,3.8.24,2.88.77,5.39,2.67,7.74,4.34,5.38,11.83,6.6,18.59,7a85.76,85.76,0,0,0,24.14-1.58c6.16-1.37,12.6-4.86,13.73-11.21.29-1.66-.16-3.2,1.5-4.34,1.05-.69,2.35-1,3.32-1.82a13.49,13.49,0,0,0,4.5-8.14C140.06,212.07,140.58,202.59,135,200.69Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-8"
                                                    d="M153.26,162.13a417.43,417.43,0,0,0-7.65-55.32,422.93,422.93,0,0,0-15.39-54.56q-4.8-13.43-10.53-26.4c-2.8-6.36-6.24-12.84-11.75-17.46-5.1-4.33-11.74-6.31-18.39-3.72-7.45,2.87-13.2,9.88-17.53,16-10,13.9-14.66,30.5-18.59,46.7A432.22,432.22,0,0,0,42.29,197.73a1.45,1.45,0,0,0,.37,1,1.81,1.81,0,0,0,.52,1.22c11.38,12,28,18.3,44.92,19.19a99.46,99.46,0,0,0,29.16-3c8.42-2.07,17.37-4.7,24.74-9.2,6.68-4.09,10.94-9.8,11.91-17.29C155,180.6,153.87,171.08,153.26,162.13Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-5"
                                                    d="M123,84.65a31.6,31.6,0,0,0-11-15.39c-1-1-2.11-2-3.28-3a25.4,25.4,0,0,0-10.08-5.75,20.64,20.64,0,0,0-7.82-1.22,2.24,2.24,0,0,0-1.66.69,18.6,18.6,0,0,0-8.87,4.09A31.92,31.92,0,0,0,65,82.43C61.65,93.52,64.89,107.25,75.5,114c10.09,6.36,25.27,5.14,35.44-.53a27,27,0,0,0,7.45-6.07,2.24,2.24,0,0,0,1.3-1,19.79,19.79,0,0,0,1-2.35A23.47,23.47,0,0,0,123,84.65Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-3"
                                                    d="M114.18,82.39c-3-6.44-6.68-11.75-13.29-13.89a13,13,0,0,1-2.26-.9,10.68,10.68,0,0,0-4.34-.68,31.22,31.22,0,0,0-7,1.37c-.29.08-.53.08-.85.16a1.92,1.92,0,0,0-.9.45A25.4,25.4,0,0,0,71.33,82.1a22.79,22.79,0,0,0,6.24,26A25.35,25.35,0,0,0,106,110.41C116,104.46,118.88,92.31,114.18,82.39Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-6"
                                                    d="M66.35,147c-.08-3.88.69-9.8-4-11.62-2.43-1-5.55-.77-8.14-.85a92.13,92.13,0,0,0-11.14.53,2.06,2.06,0,0,0-1.9,2.2,2.13,2.13,0,0,0,.4,1.08,172.72,172.72,0,0,0-2.43,31.95c.08,5.63.53,11.22,1.14,16.85.24,1.9.16,4.7,1.29,6.36s2.88,1.58,4.7,1.58c2.88.08,5.75,0,8.59-.08,2.18-.08,4.94.08,7-.85,4.25-1.91,3.4-7.9,3.65-11.46C66.27,171,66.59,159,66.35,147Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-6"
                                                    d="M154.6,158.49a228.35,228.35,0,0,0-6.08-38.64,1.85,1.85,0,0,0-1.13-1.3,2.48,2.48,0,0,0-2.35-.36l-7.9,3.28c-1.9.77-4.33,1.38-5.75,2.87A6.3,6.3,0,0,0,130,128.6c-.16,2.87-.16,5.83-.24,8.75-.16,10.77.08,21.7,2.11,32.31.44,2.43,1.05,5,1.74,7.38.61,2.06,1,4.77,2.59,6.35,2.67,2.88,8.67.85,11.91,0,4.41-1.21,6.92-3.48,7-7.89A159.16,159.16,0,0,0,154.6,158.49Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M102.23,175.21l-9.88,1.22c-2.88.36-2.88,4.94,0,4.53l9.88-1.21C105.15,179.38,105.15,174.81,102.23,175.21Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M100.89,164.64c-2.87.08-5.83.25-8.74.29s-3,4.61,0,4.53,5.83-.24,8.74-.28S103.85,164.56,100.89,164.64Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M101.34,154a50.93,50.93,0,0,0-8.18.69c-2.88.45-1.66,4.86,1.21,4.41a45.24,45.24,0,0,1,7-.52C104.3,158.57,104.3,154,101.34,154Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M100.49,143.18A42.41,42.41,0,0,1,93,144c-3,.08-3,4.61,0,4.53a48.56,48.56,0,0,0,8.66-1.05C104.58,146.94,103.36,142.57,100.49,143.18Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M61,154.48c-.24-3.28,0-7.37-1.21-10.41-1-2.43-3.57-3.2-5.92-3.93A38.59,38.59,0,0,0,43,138.4c-3-.08-3,4.49,0,4.53A33.86,33.86,0,0,1,50.8,144c.89.24,2.34.36,3.11,1,2.19,1.5,2.07,3.64,2.27,5.83.45,5.47.77,10.94.77,16.48,0,2.52-.08,5-.16,7.54-.08,2.71.24,6.32-.53,8.95-.44,1.5-.16,2-2,2.35a17.74,17.74,0,0,1-3.57,0h-8.5c-3,0-3,4.53,0,4.53h12c2.1,0,4.17-.24,5.47-2.1,1.57-2.43,1.21-6.44,1.45-9.28.25-4.25.37-8.5.37-12.67S61.33,158.49,61,154.48Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M153.46,171.65l-8.06,1.58c-.28.08-3,.77-3,1.21a15.31,15.31,0,0,1-.69-3.28c-1.22-5.55-1.3-11.22-1.3-16.85,0-5.14.24-10.4-.08-15.63-.16-3.28-1.13-5.91,1.74-8.14,2.19-1.66,5.47-2.67,7.9-3.93,2.67-1.29.28-5.22-2.27-3.93-4.62,2.27-12.51,4.18-12.35,10.53.08,3.65.61,7.38.61,11,0,4-.08,8.06-.08,12.07a79.44,79.44,0,0,0,.68,11.22c.37,2.79.61,6.44,2.07,9,1.13,2,2.71,2,4.78,1.66,3.81-.61,7.65-1.5,11.38-2.27C157.59,175.42,156.38,171.08,153.46,171.65Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M120.17,228.88a97.9,97.9,0,0,1-51.47-5.31c-2.72-1-3.93,3.32-1.22,4.41a101.17,101.17,0,0,0,53.91,5.31C124.26,232.8,123.05,228.39,120.17,228.88Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M88.42,261.8a15.47,15.47,0,0,1-.24-5.47,2.27,2.27,0,0,0-2.27-2.26,2.31,2.31,0,0,0-2.27,2.26A20.61,20.61,0,0,0,84,263C84.69,265.89,89.11,264.68,88.42,261.8Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M96.76,273.55a2.31,2.31,0,0,0-2.26-2.27,2.26,2.26,0,0,0-2.27,2.27c.16,1.37.36,2.71.52,4A2.32,2.32,0,0,0,95,279.82a2.26,2.26,0,0,0,2.27-2.26A40.29,40.29,0,0,0,96.76,273.55Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M106.36,257.27c-.85-2.8-5.22-1.58-4.41,1.21a11.21,11.21,0,0,1,.36,4.5,2.27,2.27,0,0,0,2.27,2.26,2.31,2.31,0,0,0,2.27-2.26A14.13,14.13,0,0,0,106.36,257.27Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M118,254.27a2.29,2.29,0,1,0-4,2.27,3.9,3.9,0,0,1,.6,3.28c-.77,2.79,3.65,4,4.42,1.21A8.52,8.52,0,0,0,118,254.27Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-9"
                                                    d="M111.42,284c-.16-1-.28-2.07-.52-3a2.24,2.24,0,0,0-2.73-1.6l-.07,0a2.25,2.25,0,0,0-1.58,2.79c.17,1,.29,2.07.53,3a2.24,2.24,0,0,0,2.73,1.6l.06,0A2.24,2.24,0,0,0,111.42,284Z"
                                                    transform="translate(0 0)"></path>
                                                <path class="cls-7"
                                                    d="M128.27,41.52a148.94,148.94,0,0,0-14.05-28.23C109.36,5.92,101.91-1.21,92.35.17c-4.54.61-7.57,3.4-10.61,6.6C78.25,10.42,74.81,14.14,71.65,18c-6.15,7.53-11.3,15.8-13.56,25.44a2.16,2.16,0,0,0,.77,2.26c-1.46,1-1.67,3.65.52,4a134.81,134.81,0,0,0,67.31-5.38A2.31,2.31,0,0,0,128.27,41.52Z"
                                                    transform="translate(0 0)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h2>Premium proxies</h2>
                            </a>
                            <p>Are you tired of free proxies that always die? Do you want proxies that work and are
                                online whenever you need them? Than you should try out ProxyScrape premium!</p>
                            <div class="downloadbtn"><a href="/premium?ref=home">Tell Me More</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <a href="/dedicated-proxies?ref=home"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="299.86568" height="251.15546" viewBox="0 0 299.86568 251.15546" x="0px"
                                    y="0px" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <title>computer2</title>
                                    <g id="Слой_2" data-name="Слой 2">
                                        <g id="Capa_1" data-name="Capa 1">
                                            <g>
                                                <path
                                                    d="M293.33161,120.41019c1-14.2,2-28.3,3.2-42.3,1-14.4,4-30.1,3.2-44.5-.6-8.7-5.5-11.1-13.3-12.9-13.3-3-26.7-6.1-40-8.7-26.9-5.5-54-10.1-81.5-11.5-7.9-.4-15.6-.6-23.5-.4-5.9,0-14.4-.6-20.2,1-11.5,3.6-9.3,18.2-10.1,27.7-2.2,28.9-4.2,58-6.5,86.9a635.73834,635.73834,0,0,0-102.5,68.5,6.08461,6.08461,0,0,0,1.8,10.3c26.5,10.3,53.2,20.6,79.7,30.9,25.3,9.7,50.9,19.4,77.6,24.9,21.8,4.4,42.5-9.3,60.9-19.8,20.4-11.7,41-25.5,58.2-41.9,7.3-6.9,8.5-14.2,9.3-23.9C291.03162,150.11018,292.03162,135.41019,293.33161,120.41019Z"
                                                    style="
        fill: #b6c8e8;
      "></path>
                                                <path
                                                    d="M273.63159,44.01018c0-3.4-2-6.1-5.5-6.5-26.5-4-53-8.1-79.5-12.1-12.9-2-25.9-3.8-38.8-5.9-6.3-1-15.2-1.4-16.6,5.7a5.18928,5.18928,0,0,0-1.6,3.8c-.8,16.8-1.6,33.6-2.4,50.3-.4,7.7-.8,15.6-1.2,23.3-.2,5.3-1.8,11.9,0,17,1.4,3.8,4.4,5.9,8.3,7.1,8.1,2.8,16.8,4.7,25.1,6.9,16,4.4,32.1,8.7,48.1,13.1,14.6,4,29.1,9.3,44.1,11.9,11.1,2,16-4.7,17.2-15C274.53162,110.91019,273.63159,77.01018,273.63159,44.01018Z"
                                                    style="
        fill: #57455e;
      "></path>
                                                <path
                                                    d="M242.53162,168.71018q-60.9-18.15-121.9-36.2a6.45253,6.45253,0,0,0-8.3-1,424.17385,424.17385,0,0,0-40.8,30.9c-3.6,3.2-2.2,8.5,1.8,10.3,31.5,14.8,63.5,28.7,95.6,41.9,13.3,5.5,23.7,11.7,35.8,1.4,13.7-11.7,26.5-24.9,39.4-37.2C247.43161,176.21018,247.2316,170.21018,242.53162,168.71018Z"
                                                    style="
        fill: #56597a;
      "></path>
                                                <path
                                                    d="M128.13159,203.31019a87.834,87.834,0,0,0-14.8-7.9c-4.2-1.8-8.5-3.4-12.9-2a4.92945,4.92945,0,0,0-3.4,1.6c-3.8,3.6-9.3,8.5-5.1,14.2,3.2,4.4,11.1,6.5,16,8.7,4.9,2.4,10.3,6.1,15.8,3.2,4.7-2.4,6.3-7.5,6.9-12.3A6.29013,6.29013,0,0,0,128.13159,203.31019Z"
                                                    style="
        fill: #56597a;
      "></path>
                                                <path
                                                    d="M239.33161,63.81019c-27.5-5.7-55-11.3-82.5-17-7.7-1.6-8.5,10.5-1,12.1,27.5,5.7,55,11.3,82.5,17C245.93161,77.61019,247.03162,65.41019,239.33161,63.81019Z"
                                                    style="
        fill: #f087b1;
      "></path>
                                                <path
                                                    d="M242.93161,85.81019c-16.4-3.4-32.8-6.7-49.1-10.1-7.7-1.6-8.5,10.5-1,12.1,16.4,3.4,32.8,6.7,49.1,10.1C249.63159,99.41019,250.43161,87.51018,242.93161,85.81019Z"
                                                    style="
        fill: #74a3d7;
      "></path>
                                                <path
                                                    d="M210.63159,105.11018c-3-.8-6.3-1.4-9.3-2.2s-6.7.2-7.7,3.6c-.8,2.8.4,7.1,3.6,7.7l9.3,2.2c3,.8,6.7-.2,7.7-3.6C215.03162,110.11018,213.83161,105.91019,210.63159,105.11018Z"
                                                    style="
        fill: #f7d16f;
      "></path>
                                                <path
                                                    d="M240.13159,109.71018a33.6187,33.6187,0,0,0-15.4-2.2c-3.2.2-5.5,4-4.9,7.1.6,3.4,3.8,5.1,7.1,4.9a19.5501,19.5501,0,0,1,8.9,1.6,6.0941,6.0941,0,0,0,4.3-11.4Z"
                                                    style="
        fill: #f7d16f;
      "></path>
                                                <path
                                                    d="M234.83161,179.71018c-8.7-2.4-17.2-4.9-25.7-7.5,2.4-2.6,4.7-5.5,7.1-8.1,5.1-5.9-3.6-14.6-8.5-8.5-3.6,4.2-7.3,8.5-11.1,12.7-6.7-2.2-13.1-4.4-19.8-6.7,2-2,3.8-4,5.9-6.1,5.5-5.7-3-14.2-8.5-8.5-3.2,3.4-6.7,6.7-9.9,10.1-8.3-3-16.4-6.3-24.5-9.5a30.76,30.76,0,0,0,2.4-2.6c5.3-5.7-3.2-14.4-8.5-8.5-2,2-3.8,4-5.9,6.1-8.5-3.6-17-7.3-25.3-11.1-7.1-3.2-13.1,7.1-6.1,10.5,7.5,3.4,14.8,6.7,22.2,9.9l-8.9,8.9c-8.3-3.4-16.4-7.1-24.7-10.7-7.1-3.2-13.3,7.3-6.1,10.5,7.1,3,14.2,6.3,21.2,9.3-2.2,2.2-4.7,4.2-6.9,6.5-5.9,5.3,2.8,13.7,8.5,8.5,3.6-3.2,7.1-6.5,10.7-9.7,8.1,3.4,16.2,6.7,24.5,10.1l-4.9,4.9c-5.5,5.7,3,14.2,8.5,8.5,2.8-2.8,5.7-5.7,8.5-8.7,6.7,2.6,13.3,5.3,20,7.9-3,3.2-6.3,6.3-9.3,9.5-5.7,5.5,3,14.2,8.5,8.5,4.4-4.4,8.9-8.9,13.1-13.3,10.9,4,21.8,8.1,32.8,11.9,7.3,2.6,10.5-9.1,3.2-11.7-9.1-3.2-18-6.5-26.9-9.7,3.2-3.4,6.5-7.1,9.7-10.5,10.3,3.2,20.8,6.3,31.3,9.1C239.13159,193.41019,242.33161,181.71018,234.83161,179.71018Zm-88.7-4.1c-8.1-3.2-16-6.5-24.1-9.9,3-2.8,5.9-5.9,8.9-8.9,8.1,3.2,16,6.5,24.3,9.5Zm32.1,12.6c-6.7-2.4-13.3-5.1-20-7.7,3-3,6.1-6.3,9.1-9.3,6.7,2.4,13.3,4.7,20.2,7.1C184.7316,181.5102,181.53162,184.91019,178.2316,188.21018Z"
                                                    style="fill: #57455e;"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h2 style="">Dedicated proxies</h2>
                            </a>
                            <p>Do you want proxies that are only used by you and have connection speeds of up to 1Gbps?
                                Then dedicated proxies are the right choice!</p>
                            <div class="downloadbtn"><a href="/dedicated-proxies?ref=home" style="">Get dedicated
                                    proxies</a></div>
                        </div>
                    </div>

                </div>
                <div class="row servicesdetail">
                    <div class="col-md-6 col-12">
                        <img src="https://cdn.proxyscrape.com/img/service_icons-02.svg?v=3" alt="">

                    </div>
                    <div class="col-md-6 col-12 d-flex align-items-center">
                        <div>
                            <h2><span class="proxynumber">40k+</span><br>Datacenter proxy pool</h2>
                            <p>Thanks to the enormous growth, ProxyScrape can host its own dedicated proxy pool. By
                                pooling its customers together, we make sure you get <strong>the best datacenter
                                    proxies</strong> at an affordable price.</p>
                            <div class="row">
                                <div class="col-xl-5 col-12"><a class="btn w-100" href="/premium?ref=home">Learn
                                        more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-md-none d-block">
                        <img src="https://cdn.proxyscrape.com/img/service_icons-01.svg?v=3" alt="">
                    </div>
                    <div class="col-md-6 col-12 d-flex align-items-center">
                        <div>
                            <h2>7 million residential proxies</h2>
                            <p>
                                Residential proxies are the perfect alternative to other proxy variants when your target
                                quickly bans you or when you need proxies from a specific location. With the 7 million
                                ProxyScrape residential proxies, you are sure to get the best possible results.</p>
                            <div class="row">
                                <div class="col-xl-5 col-12"><a class="btn w-100"
                                        href="/residential-proxies?ref=home">Learn more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-md-block d-none">
                        <img src="https://cdn.proxyscrape.com/img/service_icons-01.svg?v=3" alt="">
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="https://cdn.proxyscrape.com/img/service_icons-03.svg?v=3" alt="">
                    </div>
                    <div class="col-md-6 col-12 d-flex align-items-center">
                        <div>
                            <h2>Dedicated proxies</h2>
                            <p>Proxies that are only used by you with an internet speed of 1GBPs and unlimited
                                bandwidth. Do you need proxies that you only use to ensure the best possible quality?
                                Then dedicated proxies is the best choice!</p>
                            <div class="row">
                                <div class="col-xl-5 col-12"><a class="btn w-100"
                                        href="/dedicated-proxies?ref=home">Learn more</a></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row serviceusecases">
                    <div class="col-md-12">
                        <div class="section-title services">
                            <h2>Our proxy services</h2>

                            <p>for all your needs</p>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="f1431ca5-1023-4257-8068-85c1859ae18b" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 904.12 977.29">
                                <defs>
                                    <style>
                                    .ff6ace2c-6c78-4b79-b2cc-18e4aaa49649 {
                                        fill: #fff;
                                    }

                                    .b04392f0-949b-4de5-8669-e1d476642392 {
                                        fill: #57b7ff;
                                    }

                                    .eaca1e21-f5af-4224-8a82-e42c433493b3 {
                                        fill: #1684f2;
                                    }

                                    .af685eb8-a4e2-4a2f-a7c7-fa8f6a0a545d {
                                        fill: #c0e7ff;
                                    }
                                    </style>
                                </defs>
                                <polygon class="ff6ace2c-6c78-4b79-b2cc-18e4aaa49649"
                                    points="29.43 194.94 72.06 173.62 846.73 173.62 885.31 212.2 885.31 751.32 16.22 751.32 16.22 222.35 29.43 194.94" />
                                <rect class="b04392f0-949b-4de5-8669-e1d476642392" x="21.8" y="746.35" width="857.41"
                                    height="96.96" rx="21.52" />
                                <path class="b04392f0-949b-4de5-8669-e1d476642392"
                                    d="M390.47,859h161.2a39.72,39.72,0,0,1,39.72,39.72V956a0,0,0,0,1,0,0H315.73a0,0,0,0,1,0,0V933.79A74.74,74.74,0,0,1,390.47,859Z" />
                                <path class="eaca1e21-f5af-4224-8a82-e42c433493b3"
                                    d="M830.44,775.61h92.2v27a42.59,42.59,0,0,1-42.54,42.54H119.91a42.58,42.58,0,0,1-42.54-42.54v-27H830.44ZM810.1,746.19H77.37V397.59a14.72,14.72,0,1,0-29.43,0v405a72,72,0,0,0,72,72H372.05l-36.19,84.67h-70.7a14.71,14.71,0,0,0,0,29.42H734.84a14.71,14.71,0,0,0,0-29.42h-70.7L628,874.55H880.09a72,72,0,0,0,72-72V244a72,72,0,0,0-72-72H119.91a72,72,0,0,0-72,72V448.21a14.72,14.72,0,0,0,29.43,0V244a42.59,42.59,0,0,1,42.54-42.54H880.1A42.6,42.6,0,0,1,922.64,244V746.19H810.1Zm-178,213H367.86L393,900.39H607Z"
                                    transform="translate(-47.94 -11.36)" />
                                <path class="eaca1e21-f5af-4224-8a82-e42c433493b3"
                                    d="M512.71,798.58A14.71,14.71,0,0,0,485.79,806c-.64,13.3,16.08,20.53,25.3,10.9A14.8,14.8,0,0,0,512.71,798.58Z"
                                    transform="translate(-47.94 -11.36)" />
                                <path class="b04392f0-949b-4de5-8669-e1d476642392"
                                    d="M131.33,15.71H869.12V493.12H131.33Z" transform="translate(-47.94 -11.36)" />
                                <rect class="af685eb8-a4e2-4a2f-a7c7-fa8f6a0a545d" x="82.94" width="737.74"
                                    height="102.73" />
                                <circle class="eaca1e21-f5af-4224-8a82-e42c433493b3" cx="139.81" cy="49.64" r="20.66" />
                                <circle class="b04392f0-949b-4de5-8669-e1d476642392" cx="201.54" cy="49.64" r="20.66" />
                                <circle class="b04392f0-949b-4de5-8669-e1d476642392" cx="263.28" cy="49.64" r="20.66" />
                            </svg>
                            <h2>Web scraping</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="e042f26c-e462-440f-9e8d-2d4a8defd05a" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 978.24 978.01">
                                <defs>
                                    <style>
                                    .a793efcb-175b-4146-944c-1eff4b2a8d6f {
                                        fill: #fff;
                                    }

                                    .e7f4b4b6-62ad-4bed-963b-29ec367ce900 {
                                        fill: #57b7ff;
                                    }

                                    .f89d464a-49fb-415c-8ef0-7a499a5e2d94 {
                                        fill: #1684f2;
                                    }

                                    .f43297c9-b7d6-491b-94d0-14d679cf0b01 {
                                        fill: #c0e7ff;
                                    }
                                    </style>
                                </defs>
                                <path class="a793efcb-175b-4146-944c-1eff4b2a8d6f"
                                    d="M96.49,135.93H490.54s37.64-62.45,84.76-80,86.89-31.77,141.5-11,83.8,69.12,83.8,69.12l25.6,52.5h40.67v519H34V174.28S50.47,135.93,96.49,135.93Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="e7f4b4b6-62ad-4bed-963b-29ec367ce900"
                                    d="M30,685.57H866.87v56.59a57.38,57.38,0,0,1-57.39,57.38H87.37A57.38,57.38,0,0,1,30,742.16Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="f89d464a-49fb-415c-8ef0-7a499a5e2d94"
                                    d="M812.44,114.11H800.6l17.5,38.25A35.6,35.6,0,0,1,848,187.45V666.67H48.89V187.45a35.58,35.58,0,0,1,35.53-35.54H498.11l15.67-37.8H84.42a73.42,73.42,0,0,0-73.33,73.34v517H885.77v-517A73.42,73.42,0,0,0,812.44,114.11Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="e7f4b4b6-62ad-4bed-963b-29ec367ce900"
                                    d="M281.77,969.9H615.25V947.15a49.75,49.75,0,0,0-49.75-49.74h-234a49.75,49.75,0,0,0-49.75,49.74Z"
                                    transform="translate(-10.88 -10.99)" />
                                <rect class="e7f4b4b6-62ad-4bed-963b-29ec367ce900" x="376.49" y="788.55" width="122.28"
                                    height="97.87" />
                                <rect class="f43297c9-b7d6-491b-94d0-14d679cf0b01" x="204.51" y="458.82" width="108.86"
                                    height="121.9" />
                                <rect class="f43297c9-b7d6-491b-94d0-14d679cf0b01" x="381.42" y="398.3" width="108.86"
                                    height="182.42" />
                                <rect class="f43297c9-b7d6-491b-94d0-14d679cf0b01" x="558.32" y="355.51" width="108.86"
                                    height="225.21" />
                                <path class="e7f4b4b6-62ad-4bed-963b-29ec367ce900"
                                    d="M799.89,280.15,956.21,436.47a47.25,47.25,0,0,1,0,66.82h0a47.25,47.25,0,0,1-66.82,0L733.07,347Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="f89d464a-49fb-415c-8ef0-7a499a5e2d94"
                                    d="M435,726.21a19.08,19.08,0,1,0,13.5-5.6A19.18,19.18,0,0,0,435,726.21Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="f89d464a-49fb-415c-8ef0-7a499a5e2d94"
                                    d="M969.72,423,831.32,284.55a191.53,191.53,0,0,0,17.83-80.89C849.15,97.42,762.72,11,656.48,11,582.63,11,518.36,52.76,486,113.91H84.42a73.62,73.62,0,0,0-73.54,73.54V745.11a73.61,73.61,0,0,0,73.54,73.53H368.26V878.3H331.52a68.93,68.93,0,0,0-68.85,68.85V969.9A19.11,19.11,0,0,0,281.78,989H615.25a19.11,19.11,0,0,0,19.1-19.11V947.15A68.93,68.93,0,0,0,565.5,878.3H528.76V818.64H766.82a19.11,19.11,0,1,0,0-38.21H84.42a35.37,35.37,0,0,1-35.33-35.32V704.68H847.76v40.43a35.36,35.36,0,0,1-35.32,35.32h-58a19.11,19.11,0,1,0,0,38.21h58A73.62,73.62,0,0,0,886,745.11v-220A66.36,66.36,0,0,0,969.72,423ZM596.14,947.15v3.64H300.88v-3.64a30.67,30.67,0,0,1,30.64-30.63h234A30.67,30.67,0,0,1,596.14,947.15Zm-105.6-128.5V878.3H406.47V818.65ZM656.48,49.21c85.17,0,154.46,69.29,154.46,154.45S741.65,358.12,656.48,358.12,502,288.83,502,203.66,571.31,49.21,656.48,49.21ZM588.3,383.86a191.75,191.75,0,0,0,68.18,12.47c.83,0,1.65,0,2.47,0V572.61H588.3Zm-84.81-63.23a194.3,194.3,0,0,0,46.6,43.58v208.4H520.27V409.3a19.12,19.12,0,0,0-19.11-19.11H392.3a19.11,19.11,0,0,0-19.11,19.11V572.61H343.36V469.81a19.1,19.1,0,0,0-19.1-19.1H215.39a19.1,19.1,0,0,0-19.1,19.1v102.8H141V301.3a19.11,19.11,0,1,0-38.22,0V591.72a19.11,19.11,0,0,0,19.11,19.1H775a19.11,19.11,0,0,0,0-38.21H697.17V392a191.26,191.26,0,0,0,40.34-13.56L847.76,488.69V666.47H49.09v-479a35.36,35.36,0,0,1,35.33-35.32h386.4a192.63,192.63,0,0,0,12.06,135.06m-.83,285.42H411.4V428.4h70.65Zm-176.9,0H234.5V488.92h70.65ZM942.7,489.78a28.15,28.15,0,0,1-39.8,0L771.36,358.24a194.48,194.48,0,0,0,39.79-39.81L942.7,450A28.18,28.18,0,0,1,942.7,489.78Z"
                                    transform="translate(-10.88 -10.99)" />
                                <path class="f89d464a-49fb-415c-8ef0-7a499a5e2d94"
                                    d="M656.48,260.08c-12.19,0-22.11-8.21-22.11-18.3a19.11,19.11,0,0,0-38.21,0c0,24.92,17.31,46.11,41.25,53.6a19.08,19.08,0,0,0,38.15,0c23.94-7.49,41.24-28.68,41.24-53.6,0-31.16-27.06-56.51-60.32-56.51-12.19,0-22.11-8.21-22.11-18.3s9.92-18.3,22.11-18.3,22.11,8.21,22.11,18.3a19.11,19.11,0,1,0,38.21,0c0-24.9-17.29-46.08-41.21-53.59v-.81a19.11,19.11,0,0,0-38.22,0v.81c-23.92,7.51-41.21,28.69-41.21,53.59,0,31.16,27.06,56.51,60.32,56.51,12.19,0,22.11,8.21,22.11,18.3S668.67,260.08,656.48,260.08Z"
                                    transform="translate(-10.88 -10.99)" />
                            </svg>
                            <h2>Market research</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="bfce0a68-962c-4c19-aa8c-fbcac747fc66" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 988.9 893.23">
                                <defs>
                                    <style>
                                    .a76c997d-c9fd-4295-ac3d-a93112aa3d30 {
                                        fill: #fff;
                                    }

                                    .a2b8c2d5-083e-407c-b3cf-97857e403575 {
                                        fill: #c0e7ff;
                                    }

                                    .a15acb39-2695-4ebf-8370-215fc73f6e4f {
                                        fill: #57b7ff;
                                    }

                                    .a663cadf-4262-435c-90bc-27e8671f6562 {
                                        fill: #1684f2;
                                    }
                                    </style>
                                </defs>
                                <rect class="a76c997d-c9fd-4295-ac3d-a93112aa3d30" x="32.19" y="24.32" width="924.53"
                                    height="625.77" />
                                <rect class="a2b8c2d5-083e-407c-b3cf-97857e403575" x="679.6" y="247.53" width="191.01"
                                    height="183.23" />
                                <rect class="a15acb39-2695-4ebf-8370-215fc73f6e4f" x="23.85" y="640.65" width="937.82"
                                    height="106.05" rx="21.52" />
                                <path class="a15acb39-2695-4ebf-8370-215fc73f6e4f"
                                    d="M420.08,763.91h187a39.72,39.72,0,0,1,39.72,39.72V870a0,0,0,0,1,0,0H345.34a0,0,0,0,1,0,0V838.65a74.74,74.74,0,0,1,74.74-74.74Z" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M848.6,284.12H178a57.63,57.63,0,0,0-57.56,57.57V449.16A57.63,57.63,0,0,0,178,506.73H302.62a16.09,16.09,0,0,0,0-32.18H178a25.41,25.41,0,0,1-25.38-25.38V341.69A25.41,25.41,0,0,1,178,316.31H848.6A25.41,25.41,0,0,1,874,341.69V449.17a25.41,25.41,0,0,1-25.38,25.38H696.43V308.94a16.1,16.1,0,0,0-32.19,0V474.55H305.51a16.09,16.09,0,1,0,0,32.18H848.6a57.63,57.63,0,0,0,57.57-57.57V341.69A57.63,57.63,0,0,0,848.6,284.12Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M832.15,423.65l-15.38-15.38a45.84,45.84,0,1,0-19.88,19.83l15.4,15.4a14,14,0,1,0,19.86-19.85Zm-38.68-18.83a24.65,24.65,0,1,1,0-34.87h0a24.66,24.66,0,0,1,0,34.87Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M861.43,713.61H962.27v29.5a46.58,46.58,0,0,1-46.53,46.53H84.26a46.59,46.59,0,0,1-46.53-46.53v-29.5h823.7Zm-22.25-32.19H37.73V300.14a16.09,16.09,0,0,0-32.18,0v443a78.8,78.8,0,0,0,78.71,78.72H360.05l-39.59,92.6H243.14a16.1,16.1,0,0,0,0,32.19H756.86a16.1,16.1,0,0,0,0-32.19H679.54L640,821.83H915.74a78.8,78.8,0,0,0,78.71-78.72v-611a78.81,78.81,0,0,0-78.71-78.72H84.26A78.81,78.81,0,0,0,5.55,132.1V355.51a16.09,16.09,0,0,0,32.18,0V132.1A46.58,46.58,0,0,1,84.26,85.57H915.74a46.58,46.58,0,0,1,46.53,46.53V681.42H839.18Zm-194.65,233H355.47L383,850.09H617Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M513.9,738.73a16.08,16.08,0,0,0-29.44,8.14c-.71,14.55,17.58,22.46,27.67,11.92A16.19,16.19,0,0,0,513.9,738.73Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M191.85,408.73l22.8-2.32c1,9.76,6.22,13.52,15.64,13.52,7.52,0,10.66-2.53,10.66-6.42,0-4.17-3.9-6.08-16.33-8.95-20.21-4.64-30.73-11.33-30.73-28.06,0-18.37,15.1-27.93,33.67-27.93,22.74,0,35,10.1,36.95,31.41L243.2,382.3c-1.43-9.76-6.62-14-15.23-14-7,0-10,3.07-10,6.63,0,4.37,3.28,6.41,19.87,10.65,17.76,4.57,27.46,11.27,27.46,26.29,0,17.28-14.35,27.93-34.83,27.93S193.28,431.2,191.85,408.73Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M276.6,349.8h60.91v20.48h-37V384h31.14v18.57H300.5v15.5h38.38v20.49H276.6Z"
                                    transform="translate(-5.55 -53.38)" />
                                <path class="a663cadf-4262-435c-90bc-27e8671f6562"
                                    d="M346.39,394.18c0-26.9,15.3-45.61,44.8-45.61S436,367.28,436,394.18s-15.3,45.62-44.8,45.62S346.39,421.09,346.39,394.18Zm65,0c0-15.7-6.55-25.67-20.21-25.67S371,378.48,371,394.18s6.56,25.68,20.22,25.68S411.4,409.89,411.4,394.18Z"
                                    transform="translate(-5.55 -53.38)" />
                            </svg>
                            <h2>SEO monitoring</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="a4175bd9-18c6-45d3-9439-768a653825be" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 837.17 847">
                                <defs>
                                    <style>
                                    .a7bd5169-d8f9-44a2-af1f-7f1cec166443 {
                                        fill: #fff;
                                    }

                                    .b3858626-c146-4fdd-af8e-0f7574616cbf {
                                        fill: #c0e7ff;
                                    }

                                    .a11d6ec4-36e1-4fd0-a724-1c7f35ef815b {
                                        fill: #1684f2;
                                    }
                                    </style>
                                </defs>
                                <polygon class="a7bd5169-d8f9-44a2-af1f-7f1cec166443"
                                    points="137.52 399.78 644.3 399.78 585.04 637.46 197.78 637.46 137.52 399.78" />
                                <path class="b3858626-c146-4fdd-af8e-0f7574616cbf"
                                    d="M880.3,384.59c0,92.08-123.27,269.32-173.46,268-32.5-.89,25.21-170.08-34.42-170.08-151.7,0-341.51,53.84-341.51-97.87s123-274.69,274.7-274.69S880.3,232.89,880.3,384.59Z"
                                    transform="translate(-81.31 -76.76)" />
                                <circle class="b3858626-c146-4fdd-af8e-0f7574616cbf" cx="247.92" cy="770.16"
                                    r="45.56" />
                                <circle class="b3858626-c146-4fdd-af8e-0f7574616cbf" cx="542.52" cy="758.01"
                                    r="42.52" />
                                <path class="a11d6ec4-36e1-4fd0-a724-1c7f35ef815b"
                                    d="M167.4,425.47l6.74,26.4,74.17,290.41h442l11-58.66q13.9-4.39,27.45-10.1A310.56,310.56,0,0,0,610.37,76.79c-.83,0-1.66,0-2.49,0s-1.65,0-2.48,0A310.32,310.32,0,0,0,297.29,387.35a313,313,0,0,0,5.17,56.73l-72.45,0-19.08-74.69H81.31v28h0v28H167.4Zm187.48-10.09h79.17q.69,14.47,2.12,28.65l-76.51,0A256.42,256.42,0,0,1,354.88,415.38Zm47.05-177.67A366.81,366.81,0,0,0,449,256.59a523.59,523.59,0,0,0-14.95,102.73H354.88A251.83,251.83,0,0,1,401.93,237.71ZM485,164.3q-2.88,5-5.62,10.34c-4.73,9.12-9.12,18.71-13.16,28.7q-12.64-4.12-24.33-9A254.67,254.67,0,0,1,485,164.3ZM774,194.43q-11.72,4.88-24.41,9-6.07-15-13.19-28.81-2.76-5.29-5.63-10.34A254.63,254.63,0,0,1,774,194.43Zm86.93,164.89H781.72a523.55,523.55,0,0,0-14.93-102.63,366.51,366.51,0,0,0,47.15-18.85A252,252,0,0,1,860.89,359.32ZM813.32,537.7A363.61,363.61,0,0,0,766.54,519a523.07,523.07,0,0,0,15.18-103.64h79.17A251.89,251.89,0,0,1,813.32,537.7ZM490.17,415.38h89.69V444l-87.36,0Q490.94,429.91,490.17,415.38Zm13.07-144.84a540.74,540.74,0,0,0,76.62,9.23v79.55H490.17A464.94,464.94,0,0,1,503.24,270.54ZM725.6,359.32H635.91V279.79a541.25,541.25,0,0,0,76.64-9.18A464.89,464.89,0,0,1,725.6,359.32Zm-2.32,84.61-87.37,0V415.38H725.6Q724.84,429.85,723.28,443.93ZM694.47,217a488.41,488.41,0,0,1-58.56,6.65V141c18.28,10.53,35.89,31,50.68,59.49Q690.75,208.45,694.47,217ZM579.86,141v82.72A490,490,0,0,1,521.32,217q3.73-8.55,7.86-16.54C544,171.92,561.58,151.48,579.86,141ZM730.73,610.39q2.88-5,5.63-10.34,6.85-13.24,12.77-27.75,12.39,4,23.89,8.76A253.84,253.84,0,0,1,730.73,610.39Zm-382-110.27h30.82l65.25,0h57.41l32.92,0h44.72l56,0,42.81,0-10.3,55-11.65,62.11-3.9,20.82L649,658.62l-1.6,8.53-3.58,19.07h-352L244.33,500.15l74.09,0Z"
                                    transform="translate(-81.31 -76.76)" />
                                <path class="a11d6ec4-36e1-4fd0-a724-1c7f35ef815b"
                                    d="M618.94,923.76a82.77,82.77,0,0,0,0-165.53h-300a82.73,82.73,0,1,0,78.34,56H540.6a82.77,82.77,0,0,0,78.34,109.48ZM345.61,841a26.71,26.71,0,1,1-26.71-26.71A26.74,26.74,0,0,1,345.61,841Zm300,0a26.71,26.71,0,1,1-26.71-26.71A26.74,26.74,0,0,1,645.65,841Z"
                                    transform="translate(-81.31 -76.76)" />
                            </svg>
                            <h2>Ecommerce</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="e4293d22-ad9e-4a72-964a-2ed4d8a560f1" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 985.65 985.65">
                                <defs>
                                    <style>
                                    .bf7f25f0-efcc-4632-baef-15f9cf720b02 {
                                        fill: #c0e7ff;
                                    }

                                    .a1e2b069-5e36-41bc-a167-6d36e54209bf {
                                        fill: #fff;
                                    }

                                    .fb9190f5-897a-4589-9e12-2bcb6886765e {
                                        fill: #1684f2;
                                    }

                                    .bcb51ac6-2192-496c-b31a-ca978cbb1de3 {
                                        fill: #57b7ff;
                                    }
                                    </style>
                                </defs>
                                <path class="bf7f25f0-efcc-4632-baef-15f9cf720b02"
                                    d="M935.07,238.19V877.32H7.17V238.19l57.76-57.76H877.32Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf"
                                    d="M124.61,357.54V530.8H530.8V357.54Z" transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf"
                                    d="M124.61,588.55V761.81H530.8V588.55Z" transform="translate(-7.17 -7.17)" />
                                <path class="fb9190f5-897a-4589-9e12-2bcb6886765e" d="M7.17,7.17h927.9v231H7.17Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf" d="M704.06,93.8H819.57v57.76H704.06Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf" d="M530.8,93.8H646.31v57.76H530.8Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf"
                                    d="M182.31,122.68A28.88,28.88,0,1,1,153.43,93.8,28.89,28.89,0,0,1,182.31,122.68Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf"
                                    d="M297.81,122.68A28.88,28.88,0,1,1,268.94,93.8,28.88,28.88,0,0,1,297.81,122.68Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="a1e2b069-5e36-41bc-a167-6d36e54209bf"
                                    d="M413.32,122.68A28.88,28.88,0,1,1,384.44,93.8,28.89,28.89,0,0,1,413.32,122.68Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="bcb51ac6-2192-496c-b31a-ca978cbb1de3"
                                    d="M778.89,530.8h23.6a17.08,17.08,0,0,1,17.08,17.08v69.55H761.81V547.88A17.08,17.08,0,0,1,778.89,530.8Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="bcb51ac6-2192-496c-b31a-ca978cbb1de3"
                                    d="M649.92,609.08l38.69,38.69L647.77,688.6l-38.68-38.69a17.06,17.06,0,0,1,0-24.14l16.69-16.69A17.06,17.06,0,0,1,649.92,609.08Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="fb9190f5-897a-4589-9e12-2bcb6886765e"
                                    d="M790.69,588.55c-111.46,0-202.14,90.68-202.14,202.14s90.68,202.14,202.14,202.14,202.14-90.68,202.14-202.14S902.15,588.55,790.69,588.55Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="bf7f25f0-efcc-4632-baef-15f9cf720b02"
                                    d="M790.69,646.31A144.38,144.38,0,1,0,935.07,790.69,144.43,144.43,0,0,0,790.69,646.31Z"
                                    transform="translate(-7.17 -7.17)" />
                                <path class="bcb51ac6-2192-496c-b31a-ca978cbb1de3"
                                    d="M877.32,790.69h0a28.88,28.88,0,0,1-28.88,28.88H761.81V732.94a28.88,28.88,0,0,1,28.88-28.88h0a28.88,28.88,0,0,1,28.88,28.88v28.87h28.87A28.88,28.88,0,0,1,877.32,790.69Z"
                                    transform="translate(-7.17 -7.17)" />
                            </svg>
                            <h2>Website testing</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="e3c55ece-843a-4d6d-bb9d-949359cf83af" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 970 876.16">
                                <defs>
                                    <style>
                                    .a27cd0f8-9ddd-46f3-8cb9-fd51cbbe62b4 {
                                        fill: #fff;
                                        stroke: #231f20;
                                        stroke-miterlimit: 10;
                                    }

                                    .ece533ed-f95e-43ab-88bd-b1aa20d57ed4 {
                                        fill: #57b7ff;
                                    }

                                    .edd55486-ac8d-499c-a5fd-9acb4075b736 {
                                        fill: #1684f2;
                                    }

                                    .f8792fcd-4f79-4c7d-be69-fc2ade597ac8 {
                                        fill: #c0e7ff;
                                    }
                                    </style>
                                </defs>
                                <path class="a27cd0f8-9ddd-46f3-8cb9-fd51cbbe62b4"
                                    d="M104.53,78.57H919.31l40.63,30.5V690.32H40.06V139.13S6.5,78.57,104.53,78.57Z"
                                    transform="translate(-15 -61.92)" />
                                <rect class="ece533ed-f95e-43ab-88bd-b1aa20d57ed4" x="25.06" y="628.4" width="919.89"
                                    height="104.03" rx="21.52" />
                                <path class="ece533ed-f95e-43ab-88bd-b1aa20d57ed4"
                                    d="M411.87,749.31H593.15A39.72,39.72,0,0,1,632.87,789v64.31a0,0,0,0,1,0,0H337.13a0,0,0,0,1,0,0V824A74.74,74.74,0,0,1,411.87,749.31Z" />
                                <path class="edd55486-ac8d-499c-a5fd-9acb4075b736"
                                    d="M907.79,61.92H75.88A60.88,60.88,0,0,0,15,122.8v632a60.89,60.89,0,0,0,60.88,60.89H362.72L323.9,906.51H240.47c-15.86,13.91-6.2,31.57,7.58,31.57H759.53c15.86-13.91,6.2-31.57-7.58-31.57H676.1l-38.82-90.83H924.12A60.89,60.89,0,0,0,985,754.79V139.13C985,96.56,985,61.92,907.79,61.92Zm-266,844.59H358.23l27-63.11H614.8ZM953.43,754.79a29.31,29.31,0,0,1-29.31,29.31H75.88a29.31,29.31,0,0,1-29.31-29.31V709.53H953.43Zm0-76.83H46.57V122.8A29.31,29.31,0,0,1,75.88,93.49H924.12a29.31,29.31,0,0,1,29.31,29.31Z"
                                    transform="translate(-15 -61.92)" />
                                <path class="edd55486-ac8d-499c-a5fd-9acb4075b736"
                                    d="M513.13,734.17a15.77,15.77,0,0,0-28.87,8c-.69,14.27,17.25,22,27.14,11.69A15.86,15.86,0,0,0,513.13,734.17Z"
                                    transform="translate(-15 -61.92)" />
                                <path class="edd55486-ac8d-499c-a5fd-9acb4075b736"
                                    d="M585.73,206.21c8.13,60.43,53.37,85.75,77.09,95a22.11,22.11,0,0,1,14,21.81c-10.41,181.05-182.5,273.63-182.5,273.63S322.07,504.06,311.66,323a22.11,22.11,0,0,1,14-21.81c23.72-9.24,69-34.56,77.09-95a22.28,22.28,0,0,1,22-19.49h139a22.28,22.28,0,0,1,22,19.49Z"
                                    transform="translate(-15 -61.92)" />
                                <path class="ece533ed-f95e-43ab-88bd-b1aa20d57ed4"
                                    d="M494.38,550.37a387.82,387.82,0,0,1-58.77-50.16c-46.77-48.92-73.77-103.3-80.4-161.81,44.53-21.72,75.08-59,86.36-105.41H546.93c11.28,46.37,41.83,83.69,86.36,105.4C620.44,451,534.25,522.81,494.38,550.37Z"
                                    transform="translate(-15 -61.92)" />
                                <path class="f8792fcd-4f79-4c7d-be69-fc2ade597ac8"
                                    d="M533.7,361.18a39.45,39.45,0,1,0-56.94,35.36v47.6a17.49,17.49,0,0,0,35,0v-47.6a39.45,39.45,0,0,0,22-35.36Z"
                                    transform="translate(-15 -61.92)" />
                            </svg>
                            <h2>Cybersecurity</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="e6c12887-9d2c-4f4a-b47c-571be50fe934" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 999.99 1000">
                                <defs>
                                    <style>
                                    .af64b4d5-5d74-418a-937d-78dbbb795d9e {
                                        fill: #1684f2;
                                    }

                                    .b730eec4-596a-4b85-aa68-66a5365d22cc {
                                        fill: #57b7ff;
                                    }

                                    .a920b286-fea2-4c1c-8925-06e1b1bfbbf2 {
                                        fill: #c0e7ff;
                                    }
                                    </style>
                                </defs>
                                <path class="af64b4d5-5d74-418a-937d-78dbbb795d9e"
                                    d="M656.24,0H93.75A93.89,93.89,0,0,0,0,93.75V614.58a93.89,93.89,0,0,0,93.75,93.75l409.9-2.75V585.17c0-53.34,9.93-68.22,60.34-85.31l177.09-60.41a71.88,71.88,0,0,1,9.16-2.08L750,93.75A93.89,93.89,0,0,0,656.24,0Z" />
                                <path class="b730eec4-596a-4b85-aa68-66a5365d22cc"
                                    d="M971.74,548.49,794.66,488.24a41.78,41.78,0,0,0-26.83,0L590.74,548.49A41.73,41.73,0,0,0,562.49,588V725.53c0,152.09,146.25,242,199.59,269.75a41.29,41.29,0,0,0,38.33,0C853.74,967.53,1000,877.66,1000,725.53V588a41.73,41.73,0,0,0-28.25-39.46ZM929.16,684.7l-125,166.67a41.53,41.53,0,0,1-30.38,16.54c-1,0-2,.08-2.95.08a41.42,41.42,0,0,1-29.46-12.21L658,772.45A41.66,41.66,0,0,1,717,713.53l49.38,49.38,96.2-128.25a41.66,41.66,0,1,1,66.63,50Z" />
                                <path class="a920b286-fea2-4c1c-8925-06e1b1bfbbf2"
                                    d="M297.2,404.8H215l-12.5,44.14h-71l75.59-239.08h98L380.7,448.94h-71Zm-12.87-45.61L256.19,259,227.87,359.19Z" />
                                <path class="a920b286-fea2-4c1c-8925-06e1b1bfbbf2"
                                    d="M404.61,209.86h94.9c83.86,0,123.22,44.88,123.22,119.54S583.37,448.94,499.51,448.94h-94.9Zm95.27,185.75c40.09,0,56.64-19.5,56.64-66.21S540,263.2,499.88,263.2H469V395.61Z" />
                            </svg>
                            <h2>Ad verification</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="itemcard downloadcard">
                            <svg id="f525ff82-12f0-42be-b0ab-54c6822ce644" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 882.18 989.48">
                                <defs>
                                    <style>
                                    .a7a51a11-0b85-4d41-a1c2-3d6311a805fd {
                                        fill: #1684f2;
                                    }

                                    .fd5e2310-a0e2-4a60-9248-111c035aefe9 {
                                        fill: #c0e7ff;
                                    }

                                    .b4d5aa29-f79a-4fc9-8627-6dc77577d374 {
                                        fill: #fff;
                                    }

                                    .fb6f4d93-b04c-4d59-941e-9fb434ebbb18 {
                                        fill: #57b7ff;
                                    }
                                    </style>
                                </defs>
                                <path class="a7a51a11-0b85-4d41-a1c2-3d6311a805fd"
                                    d="M500,993.57c259.13-64.23,441.09-296.52,441.09-563.12V115.23A930.73,930.73,0,0,1,500,4.09,930.73,930.73,0,0,1,58.91,115.23V430.45C58.91,697.05,240.87,929.34,500,993.57Z"
                                    transform="translate(-58.91 -4.09)" />
                                <path class="fd5e2310-a0e2-4a60-9248-111c035aefe9"
                                    d="M155.59,207.17V430.45A482.86,482.86,0,0,0,500,893.49a482.85,482.85,0,0,0,344.41-463V207.17A1032.35,1032.35,0,0,1,500,112.28,1032.35,1032.35,0,0,1,155.59,207.17Z"
                                    transform="translate(-58.91 -4.09)" />
                                <ellipse class="b4d5aa29-f79a-4fc9-8627-6dc77577d374" cx="441.09" cy="494.74"
                                    rx="203.77" ry="203.47" />
                                <path class="fb6f4d93-b04c-4d59-941e-9fb434ebbb18"
                                    d="M382.83,498.83c0,64.51,52.56,117,117.17,117,25.89,0,49.15-8.51,67.27-24.62a99.68,99.68,0,0,0,10-10.31,25.46,25.46,0,0,0-39-32.69,49.27,49.27,0,0,1-4.87,5C524.63,561,513.39,565,500,565a66.13,66.13,0,1,1,37-121,25.45,25.45,0,1,0,28.52-42.15,116.67,116.67,0,0,0-65.53-20c-64.61,0-117.17,52.48-117.17,117Z"
                                    transform="translate(-58.91 -4.09)" />
                            </svg>

                            <h2>Brand protection</h2>
                        </div>
                    </div>
                    <div class="col-12 text-center"><a class="btn" href="#services">Start now</a></div>

                </div>
                <div class="col-12">
                    <div class="section-title services clients">
                        <h2>What our clients say</h2>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <!--<p>for your proxy needs</p>-->
                    </div>

                </div>
                <div class="col-12">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-c349f1d8-7c7e-4b27-93c1-be19944e141b"></div>
                </div>
                <?php include "assets/inc/blogcard.inc.php";?>
                <div class="col-12" style="
                            display: flex;
                            justify-content: center;
                            padding-top: 60px;
                        padding-bottom: 20px;">
                    <img src="https://cdn.proxyscrape.com/img/logo/dark_text_logo.png" id="toplogo"
                        alt="dark proxyscrape logo" style="
    width: 20%;
    min-width: 170px;

">
                </div>
                <div class="row finaladv w-100">
                    <div class="col-12">
                        <div class="itemcard downloadcard">
                            <div class="row">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 894.07 988.83">
                                        <defs>
                                            <style>
                                            .fab293c4-4e9c-445f-ac92-3ef45eb1f83b {
                                                fill: #57b7ff;
                                            }

                                            .a6aeeaa0-907e-48cb-89c7-ef3d858367c7 {
                                                fill: #1684f2;
                                            }

                                            .e14bbcc2-1383-4845-b11c-99f1f0cd6ee0 {
                                                fill: #166bb2;
                                                opacity: 0.31;
                                                isolation: isolate;
                                            }

                                            .bf39dba0-1691-4268-8e64-6d960c9b07ec {
                                                fill: #c0e7ff;
                                            }
                                            </style>
                                        </defs>
                                        <g id="a24715d8-dc28-475b-a000-25891d30b8dd" data-name="Layer 5">
                                            <path class="fab293c4-4e9c-445f-ac92-3ef45eb1f83b"
                                                d="M947,786.84,947,667.52,909,653.43s-99.14,23.32-108.38,26.73c-3,1.11-6,6.72-8.59,13.78L511.37,560.31a30,30,0,0,0-26,.09L147.23,724c-5.74-10-12.46-20.65-13.14-20.79-1.21-.24-43.25-28.92-43.25-28.92L53,668.51V789.39h0a29.61,29.61,0,0,0,17.46,26.36L432.52,981.93a141.47,141.47,0,0,0,116.36.75l380.25-168.6A29.64,29.64,0,0,0,947,786.84Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="a6aeeaa0-907e-48cb-89c7-ef3d858367c7"
                                                d="M929.13,694.52,548.88,863.12a141.51,141.51,0,0,1-116.36-.75l-362-166.19c-19.18-8.81-22.65-32.83-10.16-47a30.14,30.14,0,0,1,9.6-7.25l415.49-201a30,30,0,0,1,26-.08L929.87,640a29.93,29.93,0,0,1,9.79,7.34C952.22,661.63,948.59,685.9,929.13,694.52Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="e14bbcc2-1383-4845-b11c-99f1f0cd6ee0"
                                                d="M939.66,647.32A30.42,30.42,0,0,1,929.13,655L548.88,823.59a141.43,141.43,0,0,1-116.36-.75l-362-166.19a30,30,0,0,1-10.16-7.52,30.14,30.14,0,0,1,9.6-7.25l415.49-201a30,30,0,0,1,26-.08L929.87,640A29.93,29.93,0,0,1,939.66,647.32Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="fab293c4-4e9c-445f-ac92-3ef45eb1f83b"
                                                d="M947,611.33,947,492,909,477.92s-99.14,23.33-108.38,26.73c-3,1.11-6,6.73-8.59,13.78L511.37,384.81a30,30,0,0,0-26,.08L147.23,548.52c-5.74-10-12.46-20.65-13.14-20.78-1.21-.25-43.25-28.92-43.25-28.92L53,493V613.88h0a29.61,29.61,0,0,0,17.46,26.36L432.52,806.42a141.47,141.47,0,0,0,116.36.76L929.13,638.57A29.63,29.63,0,0,0,947,611.34Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="a6aeeaa0-907e-48cb-89c7-ef3d858367c7"
                                                d="M929.13,519,548.88,687.62a141.51,141.51,0,0,1-116.36-.76l-362-166.18c-19.18-8.81-22.65-32.83-10.16-47a30.17,30.17,0,0,1,9.6-7.26l415.49-201a30,30,0,0,1,26-.09l418.5,199.22a30.07,30.07,0,0,1,9.79,7.34C952.22,486.12,948.59,510.39,929.13,519Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="e14bbcc2-1383-4845-b11c-99f1f0cd6ee0"
                                                d="M939.66,471.81a30.3,30.3,0,0,1-10.53,7.68L548.88,648.08a141.43,141.43,0,0,1-116.36-.74l-362-166.2a30.09,30.09,0,0,1-10.16-7.51,30.17,30.17,0,0,1,9.6-7.26l415.49-201a30,30,0,0,1,26-.09l418.5,199.22A30.07,30.07,0,0,1,939.66,471.81Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="fab293c4-4e9c-445f-ac92-3ef45eb1f83b"
                                                d="M947,434.91,947,315.59,909,301.5s-99.14,23.33-108.38,26.73c-3,1.11-6,6.73-8.59,13.78L511.37,208.39a30,30,0,0,0-26,.08L147.23,372.1c-5.74-10-12.46-20.65-13.14-20.79-1.21-.24-43.25-28.91-43.25-28.91L53,316.58V437.46h0a29.61,29.61,0,0,0,17.46,26.36L432.52,630a141.47,141.47,0,0,0,116.36.75l380.25-168.6A29.64,29.64,0,0,0,947,434.91Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="a6aeeaa0-907e-48cb-89c7-ef3d858367c7"
                                                d="M548.88,511.19l380.25-168.6c23.45-10.4,23.9-43.52.74-54.54L511.37,88.83a30,30,0,0,0-26,.08L69.91,290c-22.85,11.05-22.51,43.71.55,54.3L432.52,510.44A141.47,141.47,0,0,0,548.88,511.19Z"
                                                transform="translate(-52.97 -6)" />
                                            <path class="bf39dba0-1691-4268-8e64-6d960c9b07ec"
                                                d="M655.46,120c.08-1.67.13-3.35.13-5a108.93,108.93,0,0,0-210-40.53,86.24,86.24,0,0,0-120.09,79.29c0,2.7.14,5.36.38,8a86.2,86.2,0,1,0-10.4,171.76c.48,0,.95,0,1.43,0l328.61,4v0l1.41,0A108.91,108.91,0,0,0,655.46,120Z"
                                                transform="translate(-52.97 -6)" />
                                        </g>
                                    </svg>
                                    <h2>50 000 datacenter proxies</h2>
                                </div>
                                <div class="col-3">+</div>

                                <div class="col-2">
                                    <svg id="bc72bb80-c81a-46fc-9983-1234e3f81e11" data-name="Layer 1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 974.94 843.96">
                                        <defs>
                                            <style>
                                            .a8c5a5f6-eca7-44de-a2f4-c87ca02ba713 {
                                                fill: #1684f2;
                                            }

                                            .af72052a-db00-4048-bc46-994f5a4395cc {
                                                fill: #c0e7ff;
                                            }

                                            .b46943d3-5ddc-4973-bca7-4a5e4e11390a {
                                                fill: #f1f2f2;
                                            }

                                            .bf16ac3c-e015-48e7-a156-fb277c5add33 {
                                                fill: #57b7ff;
                                            }
                                            </style>
                                        </defs>
                                        <rect class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713" width="882.74"
                                            height="232.61" rx="38.35" />
                                        <rect class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713" y="273.66" width="882.74"
                                            height="232.61" rx="38.35" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M248.82,701.91a199.51,199.51,0,0,0-10,62.66c0,3,.06,6,.2,8.91A199.26,199.26,0,0,0,259.85,854H60.27a47.73,47.73,0,0,1-47.74-47.73V669.12a47.73,47.73,0,0,1,47.74-47.74H298.85l-.8.77a201,201,0,0,0-43.3,64Q251.45,693.94,248.82,701.91Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M526.75,762.26l.4.4L515,773.48l-32.4,28.72-.91.81-.87.86a56.24,56.24,0,0,1-95-30.39,54.48,54.48,0,0,1-.72-8.91C385,733.9,410.17,709,441.08,709c15.43,0,29.24,5.93,41,17.62l.89.88.93.82,13.88,12.29a72.85,72.85,0,0,0,34.33,17Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M570.84,701.91a29.42,29.42,0,0,1-44.17,6l-6.81-6-7.07-6.26c-20.13-20-45.11-30.27-71.71-30.27a99.69,99.69,0,0,0-77.17,36.53,98.5,98.5,0,0,0-22.45,62.66q0,4.5.41,8.91A99.37,99.37,0,0,0,398.06,854H310.31a156.28,156.28,0,0,1-27.65-80.52q-.27-4.43-.27-8.91a156.69,156.69,0,0,1,13-62.66,158.94,158.94,0,0,1,78.78-80.53H508A158.91,158.91,0,0,1,553.34,653l12.3,10.89A29.38,29.38,0,0,1,570.84,701.91Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M594.52,631.3l-11.2-9.92H686.6l-49.73,44-.09-.09L619,681A73,73,0,0,0,594.52,631.3Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M757.29,833.63A106.48,106.48,0,0,0,786,854H696.44a29.39,29.39,0,0,1,7.92-32.55l.09-.07a29.36,29.36,0,0,1,39,0Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M885.05,764.57c0,30.66-25.15,55.6-56,55.6-15.45,0-29.29-5.91-41.13-17.57l-.82-.83-.87-.77-13.86-12.26a72.93,72.93,0,0,0-27.42-15.26,68.67,68.67,0,0,0-7.52-1.83l5.69-5-.11-.1,44.52-39.4,1-.88.93-.94a56.54,56.54,0,0,1,7.09-6A55.53,55.53,0,0,1,829,709C859.9,709,885.05,733.9,885.05,764.57Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="a8c5a5f6-eca7-44de-a2f4-c87ca02ba713"
                                            d="M895.27,669.12v21.46a99.71,99.71,0,0,0-136.65,3.89l-8.4,7.44-42.16,37.31-28.65,25.35.15.13-44.37,39.39-.15-.15L578.59,854H484.27a99.7,99.7,0,0,0,27.2-19.2l70.19-62.27h0l6.3-5.59h0l2.67-2.36-.28-.29L634.89,725l.15.15,83-73.46a152.19,152.19,0,0,1,43.55-30.34h85.92A47.73,47.73,0,0,1,895.27,669.12Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <rect class="af72052a-db00-4048-bc46-994f5a4395cc" x="62.38" y="80.52"
                                            width="514.68" height="71.57" rx="10.24" />
                                        <rect class="af72052a-db00-4048-bc46-994f5a4395cc" x="62.38" y="354.18"
                                            width="514.68" height="71.57" rx="10.24" />
                                        <path class="af72052a-db00-4048-bc46-994f5a4395cc"
                                            d="M248.82,701.91a199.51,199.51,0,0,0-10,62.66c0,3,.06,6,.2,8.91H87.65A12.76,12.76,0,0,1,74.9,760.73V714.65a12.75,12.75,0,0,1,12.75-12.74Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="b46943d3-5ddc-4973-bca7-4a5e4e11390a"
                                            d="M341.46,764.57q0,4.5.41,8.91H282.66q-.27-4.43-.27-8.91a156.69,156.69,0,0,1,13-62.66h68.51A98.5,98.5,0,0,0,341.46,764.57Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="b46943d3-5ddc-4973-bca7-4a5e4e11390a"
                                            d="M519.86,701.91h51a29.42,29.42,0,0,1-44.17,6Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="b46943d3-5ddc-4973-bca7-4a5e4e11390a"
                                            d="M588,766.93a12.59,12.59,0,0,1-6.3,5.59Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <rect class="af72052a-db00-4048-bc46-994f5a4395cc" x="695.52" y="80.52"
                                            width="89.22" height="71.57" rx="18.78" />
                                        <rect class="af72052a-db00-4048-bc46-994f5a4395cc" x="695.52" y="354.18"
                                            width="89.22" height="71.57" rx="18.78" />
                                        <path class="b46943d3-5ddc-4973-bca7-4a5e4e11390a"
                                            d="M750.22,701.91l-42.16,37.31V725.28a23.36,23.36,0,0,1,23.37-23.37Z"
                                            transform="translate(-12.53 -78.02)" />
                                        <path class="bf16ac3c-e015-48e7-a156-fb277c5add33"
                                            d="M828.78,606.06c-42.32,0-82.28,16.46-110.94,45.11l-83,73.47-.14-.15-44.53,39.24.3.29-79.2,70.24a99.27,99.27,0,0,1-70.38,28.94c-55,0-99.63-44.52-99.63-99.18s44.67-99.18,99.63-99.18c26.59,0,51.57,10.28,71.7,30.27l13.88,12.29a29.41,29.41,0,0,0,39,0h0a29.39,29.39,0,0,0,0-44l-12.3-10.89a158,158,0,0,0-112.25-46.29c-87.58-.15-158.7,70.68-158.7,157.81s71.12,158,158.7,158c42.31,0,82.13-16.46,110.93-45l83-73.62.15.15,44.37-39.38-.14-.15,79.2-70.09a98.75,98.75,0,0,1,70.38-29.09c55,0,99.62,44.52,99.62,99.18s-44.67,99.18-99.62,99.18c-26.6,0-51.58-10.28-71.71-30.12l-13.84-12.26a29.4,29.4,0,0,0-39,0l-.08.08a29.39,29.39,0,0,0,0,44l12.35,10.93A157.83,157.83,0,0,0,828.63,922c87.72,0,158.84-70.83,158.84-158S916.35,606.06,828.78,606.06Z"
                                            transform="translate(-12.53 -78.02)" />
                                    </svg>
                                    <h2>Unlimited bandwidth</h2>
                                </div>
                                <div class="col-3">+</div>
                                <div class="col-2">
                                    <svg id="a8c38b13-36b9-4791-a416-8018f6d57b9e" data-name="Layer 2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 973.13 978.07">
                                        <defs>
                                            <style>
                                            .e7b1814b-02de-4b12-bb0b-435ed772f4ce {
                                                fill: #57b7ff;
                                            }

                                            .bfcdf9b3-a226-442d-ad4d-6b95c819eb0a {
                                                fill: #1684f2;
                                            }

                                            .a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7 {
                                                fill: #c0e7ff;
                                            }

                                            .bbee6c17-f348-4fd4-b4dc-720e4aa682cf {
                                                fill: none;
                                            }
                                            </style>
                                        </defs>
                                        <path class="e7b1814b-02de-4b12-bb0b-435ed772f4ce"
                                            d="M414.46,794.61c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm208.89,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-208.89,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm208.89,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-8.31-2c-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38c-.63-3.55-1.66-5.76-2.65-6.77C622.11,793.36,619.09,792.63,615,792.63Zm8.31,2c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61ZM514.61,964.09a22.79,22.79,0,0,1-9.56-27.56l7.81-20.71,11.28-29.94a22.74,22.74,0,0,1,5.29-8.15c-2-1.78-4-3.65-5.82-5.61-.71-.76-1.39-1.51-2.08-2.3a166.37,166.37,0,0,1-14.63,46.69A126.38,126.38,0,0,1,491.2,941c-21.17,25.69-51.63,40.67-88.71,43.8A457.06,457.06,0,0,0,554,980.26,144,144,0,0,1,514.61,964.09ZM623.35,794.61c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-208.89,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm208.89,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-8.31-2c-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38c-.63-3.55-1.66-5.76-2.65-6.77C622.11,793.36,619.09,792.63,615,792.63Zm8.31,2c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-64.84-699V39a28,28,0,0,0-28-28H399.59a28,28,0,0,0-28,28V95.58C167,138.64,13.43,320.09,13.43,537.46c0,190.66,118.16,353.71,285.24,419.94a22.72,22.72,0,0,1-2.51-20.87l18.28-48.48.82-2.17a22.46,22.46,0,0,1,5.28-8.15q-3-2.67-5.81-5.61c-16.94-18-26.27-42.89-26.27-70.16,0-63.24,48-107.41,116.78-107.41,37.58,0,68.42,13.08,89.21,37.84a110.27,110.27,0,0,1,13.83,21c17.93-36.16,56.55-58.86,105.85-58.86,37.57,0,68.42,13.08,89.2,37.84a103.42,103.42,0,0,1,9.46,13.21,78.59,78.59,0,0,1,17.33-27.36c15-15.28,36.22-23.69,59.67-23.69a91.08,91.08,0,0,1,22.62,2.78A76.37,76.37,0,0,1,866.21,745a449.43,449.43,0,0,0,50.41-207.5C916.62,320.09,763,138.64,558.51,95.58Zm174.84,744c-.84,27.09-6,51.36-15.2,71.89a454.05,454.05,0,0,0,63.13-51.67C762.83,858.16,746.18,851.15,733.35,839.59Zm-110-45c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-8.31-2c-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38c-.63-3.55-1.66-5.76-2.65-6.77C622.11,793.36,619.09,792.63,615,792.63Zm8.31,2c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-208.89,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm208.89,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-208.89,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm208.89,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm0,0c-1.24-1.25-4.26-2-8.31-2-5.1,0-8.29,1.17-9.59,2.27-.33.28-1.2,1-1.2,4.11,0,.84.08,2.84.77,3.42,1,.87,3.89,1.88,8.55,1.88A26.43,26.43,0,0,0,626,801.38C625.37,797.83,624.34,795.62,623.35,794.61Zm-208.89,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm-8.3-2c-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93c-.61-3.55-1.64-5.76-2.64-6.77C413.22,793.36,410.2,792.63,406.16,792.63Zm8.3,2c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Zm0,0c-1.24-1.25-4.26-2-8.3-2-5.1,0-8.31,1.17-9.59,2.27-.33.28-1.21,1-1.21,4.11,0,.84.08,2.84.78,3.42,1,.87,3.89,1.88,8.55,1.88a26.33,26.33,0,0,0,12.41-2.93C416.49,797.83,415.46,795.62,414.46,794.61Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="bfcdf9b3-a226-442d-ad4d-6b95c819eb0a"
                                            d="M710.66,829.66c-.63-72-34.53-112.31-96.53-112.31-53.23,0-88.09,30.17-93.29,73.2a92.62,92.62,0,0,0-.69,11.41A87.75,87.75,0,0,0,524.57,830c9.67,28.79,34.79,48.47,70.65,48.47,26.43,0,46.62-10.64,57.26-31.76a93.39,93.39,0,0,1-4.54,25.63A382.9,382.9,0,0,0,710.66,829.66Zm-61.3-19.26c-8.08,11.2-21.47,16.71-35.79,16.71-18.9,0-32.11-9.73-32.11-28.1s13.39-29.18,33.58-29.18C641.11,769.83,649.73,787.64,649.36,810.4ZM545.48,893.92l-6.69,17.76q15.65-3,30.81-7.35A88.41,88.41,0,0,1,545.48,893.92Zm-21.87-21.8c-.71-.76-1.39-1.51-2.08-2.3a166.37,166.37,0,0,1-14.63,46.69c2-.21,4-.44,6-.69l11.28-29.94a22.74,22.74,0,0,1,5.29-8.15C527.4,876,525.47,874.08,523.61,872.12ZM789.79,717.35c-36,0-59.84,25-59.84,60.19a65,65,0,0,0,6.29,28.67q7.66-7.65,14.85-15.75a384,384,0,0,0,50.72-72.12A71.68,71.68,0,0,0,789.79,717.35Zm57.74-201.58A383,383,0,0,0,485.1,153.3q-10-.54-20.07-.53T445,153.3a381.47,381.47,0,0,0-241,102.24A388,388,0,0,0,176,284.42,381.36,381.36,0,0,0,82.52,515.77q-.51,9.94-.51,20t.53,20.14a383.54,383.54,0,0,0,231.9,332.14l.82-2.17a22.46,22.46,0,0,1,5.28-8.15q-3-2.67-5.81-5.61c-16.94-18-26.27-42.89-26.27-70.16,0-63.24,48-107.41,116.78-107.41,37.58,0,68.42,13.08,89.21,37.84a110.27,110.27,0,0,1,13.83,21c17.93-36.16,56.55-58.86,105.85-58.86,37.57,0,68.42,13.08,89.2,37.84a103.42,103.42,0,0,1,9.46,13.21,78.59,78.59,0,0,1,17.33-27.36c15-15.28,36.22-23.69,59.67-23.69a91.08,91.08,0,0,1,22.62,2.78,381,381,0,0,0,35.11-141.42q.54-10,.53-20.14T847.53,515.77Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M485.1,153.3v71.95H445V153.3q10-.54,20.08-.53T485.1,153.3Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M848.05,535.77q0,10.14-.53,20.14H774V515.77h73.57Q848.06,525.71,848.05,535.77Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M152.76,515.77v40.14H82.54q-.54-10-.53-20.14t.51-20Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M746.42,275.94l-51.82,53-28.7-28.07,51.78-53A381.92,381.92,0,0,1,746.42,275.94Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M260.35,773.14,211.62,823A382,382,0,0,1,183,794.88l48.7-49.81Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7"
                                            d="M253.86,304.36l-28.06,28.7L176,284.42a388,388,0,0,1,27.9-28.88Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <rect class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7" x="431.21" y="327.27"
                                            width="40.14" height="207.95" rx="14.09" />
                                        <rect class="a2b9e0ae-bbbf-4bd6-aa71-2b5ccc7a63d7" x="487.69" y="492.68"
                                            width="40.14" height="146.79" rx="14.09"
                                            transform="translate(1254.51 535.84) rotate(130.44)" />
                                        <path class="bfcdf9b3-a226-442d-ad4d-6b95c819eb0a"
                                            d="M502.53,831.69c0,78.19-37.08,130.87-114.17,130.87-26.25,0-50.66-6.24-70.12-18l19.09-50.66c14.87,9.17,30.84,13.58,50.11,13.58,34.14,0,54.88-19.83,56.9-60.76-10.64,21.11-30.83,31.76-57.26,31.76C340.45,878.5,312,845.28,312,802c0-49,36.16-84.62,94-84.62C468.57,717.34,502.53,758.45,502.53,831.69ZM441.22,810.4c.37-22.76-8.26-40.56-34.32-40.56-20.19,0-33.59,10.82-33.59,29.18s13.21,28.08,32.12,28.08C419.75,827.1,433.15,821.6,441.22,810.4Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="bfcdf9b3-a226-442d-ad4d-6b95c819eb0a"
                                            d="M711.42,831.69c0,78.19-37.08,130.87-114.17,130.87-26.25,0-50.66-6.24-70.12-18l19.09-50.66c14.87,9.17,30.84,13.58,50.11,13.58,34.14,0,54.88-19.83,56.9-60.76C642.59,867.85,622.39,878.5,596,878.5c-46.62,0-75.07-33.22-75.07-76.54,0-49,36.16-84.62,94-84.62C677.46,717.34,711.42,758.45,711.42,831.69ZM650.11,810.4c.37-22.76-8.26-40.56-34.32-40.56-20.19,0-33.59,10.82-33.59,29.18s13.21,28.08,32.12,28.08C628.64,827.1,642,821.6,650.11,810.4Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="bfcdf9b3-a226-442d-ad4d-6b95c819eb0a"
                                            d="M730.69,777.54c0-35.24,23.87-60.2,59.84-60.2s59.47,25,59.47,60.2c0,34.88-23.49,59.84-59.47,59.84S730.69,812.42,730.69,777.54Zm179.89-56.9h52.86L807.05,959.26H754.19ZM806,777.54c0-11.74-5.87-19.09-15.42-19.09-9.91,0-15.78,7.35-15.78,19.09,0,11.38,5.87,18.36,15.78,18.36C800.08,795.9,806,788.92,806,777.54Zm61.31,124.82c0-34.88,23.49-59.84,59.47-59.84s59.84,25,59.84,59.84c0,35.24-23.87,60.2-59.84,60.2S867.26,937.6,867.26,902.36Zm74.89,0c0-11.38-5.51-18.36-15.42-18.36-9.55,0-15.42,7-15.42,18.36,0,11.75,5.87,19.09,15.42,19.09C936.64,921.45,942.15,914.11,942.15,902.36Z"
                                            transform="translate(-13.43 -10.96)" />
                                        <path class="bbee6c17-f348-4fd4-b4dc-720e4aa682cf"
                                            d="M520.84,790.55a92.62,92.62,0,0,0-.69,11.41A87.75,87.75,0,0,0,524.57,830,211.61,211.61,0,0,0,520.84,790.55ZM402.49,984.75,298.67,957.4"
                                            transform="translate(-13.43 -10.96)" />
                                    </svg>
                                    <h2>99% uptime</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center"><a class="btn" href="#services">Start now</a></div>
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

.bottomjumbo {
    background: url(https://cdn.proxyscrape.com/img/jumbotron-02.svg?v=3);
    background-repeat: no-repeat;
    background-position: right top;

}

@media only screen and (min-width: 2316px) {
    .bottomjumbo {
        background-size: 55vw;
    }

    .jumbotron {
        background-size: 55vw;
    }
}



@media only screen and (max-width: 2315px) {
    .bottomjumbo {
        background-size: 60vw;
    }

    .jumbotron {
        background-size: 60vw;
    }
}

@media only screen and (max-width: 2115px) {
    .bottomjumbo {
        background-size: 70vw;
    }

    .jumbotron {
        background-size: 70vw;
    }
}

@media only screen and (max-width: 1815px) {
    .bottomjumbo {
        background-size: 75vw;
    }

    .jumbotron {
        background-size: 75vw;
    }
}

@media only screen and (max-width: 1700px) {
    .bottomjumbo {
        background-size: contain;
        background-position: right -20vw top;
    }

    .jumbotron {
        background-size: cover;
        background-position: right -20vw bottom;
    }
}

@media only screen and (max-width: 1300px) {

    .bottomjumbo {
        background: unset;
    }

    .jumbotron {
        background: url(https://cdn.proxyscrape.com/img/jumbotron-03.svg?v=3);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .infotext {
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

.section-title.services {
    margin-bottom: 0;
}

@media (min-width: 992px) {
    .row.services div:nth-child(2) {
        padding-top: 40px;
    }

    .row.services div:nth-child(3) {
        padding-top: 80px;
    }
}


.servicesdetail {
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

.section-title.services.clients {
    padding-top: 60px;
    padding-bottom: 20px;
}
</style>
<?php include "assets/inc/footer.inc.php";?>