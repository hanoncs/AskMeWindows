<?php

?>
<!--DEMOS-->

<!--<p id="LaunchHide"> <button id="LaunchFullScreen" onclick="launchFullscreen(document.documentElement);">Launch Fullscreen</button></p>-->
<!--<button id="LaunchFullScreen" onclick="launchFullscreen(document.getElementById('PhotoCarousel2'));">Launch Photo Fullscreen</button>-->
<!--<p id="ExitHide"><button onclick="exitFullscreen();   " class="sexyButton">Hide Fullscreen</button></p>-->
<!--<button onclick="dumpFullscreen();" class="sexyButton">Dump Fullscreen Property Data</button>-->


<script>
    // Find the right method, call on correct element
    function launchFullscreen(element)
    {
        if (element.requestFullscreen)
        {
            element.requestFullscreen();
        }
        else if (element.mozRequestFullScreen)
        {
            element.mozRequestFullScreen();
        }
        else if (element.webkitRequestFullscreen)
        {
            element.webkitRequestFullscreen();
        }
        else if (element.msRequestFullscreen)
        {
            element.msRequestFullscreen();
        }
    }

    function exitFullscreen()
    {
        if (document.exitFullscreen)
        {
            document.exitFullscreen();
        }
        else if (document.mozCancelFullScreen)
        {
            document.mozCancelFullScreen();
        }
        else if (document.webkitExitFullscreen)
        {
            document.webkitExitFullscreen();
        }

    }

    function dumpFullscreen()
    {
        console.log("document.fullscreenElement is: ", document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
        console.log("document.fullscreenEnabled is: ", document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
    }
    $('#ExitHide').css('display', 'none');
    // Events
    document.addEventListener("fullscreenchange", function (e)
    {
        console.log("fullscreenchange event! ", e);
        $('#LaunchHide').css('display', 'none');
        $('#ExitHide').css('display', 'initial');
    });
    document.addEventListener("mozfullscreenchange", function (e)
    {
        console.log("mozfullscreenchange event! ", e);
        $('#LaunchHide').css('display', 'none');
        $('#ExitHide').css('display', 'initial');
    });
    document.addEventListener("webkitfullscreenchange", function (e)
    {
        console.log("webkitfullscreenchange event! ", e);
        $('#LaunchHide').css('display', 'none');
        $('#ExitHide').css('display', 'initial');
    });
    document.addEventListener("msfullscreenchange", function (e)
    {
        console.log("msfullscreenchange event! ", e);
        $('#LaunchHide').css('display', 'none');
        $('#ExitHide').css('display', 'initial');
    });

    // Add different events for fullscreen
</script>


<style>
    :-webkit-full-screen
    {
        /* properties */
        box-sizing: border-box;
        width: 100%;
        height: 100%;
    }

    :-moz-full-screen
    {
        /* properties */
        box-sizing: border-box;
        width: 100%;
        height: 100%;
    }

    :-ms-fullscreen
    {
        /* properties */
        box-sizing: border-box;
        width: 100%;
        height: 100%;
    }

    :full-screen
    { /*pre-spec */
        /* properties */
    }

    :fullscreen
    { /* spec */
        /* properties */
    }

    /* deeper elements */
    :-webkit-full-screen video
    {
        width: 100%;
        height: 100%;
    }



    /* styling the backdrop*/
    ::backdrop
    {
        /* properties */
    }

    ::-ms-backdrop
    {
        /* properties */
    }
</style>
