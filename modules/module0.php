<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Social Housing - Who we are</title>

        <meta name="description" content="A framework for easily creating beautiful presentations using HTML">
        <meta name="author" content="Hakim El Hattab">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link rel="stylesheet" href="../reveal.js-master/css/reveal.css">
        <link rel="stylesheet" href="../reveal.js-master/css/theme/black.css" id="theme">

        <!-- Theme used for syntax highlighting of code -->
        <link rel="stylesheet" href="../reveal.js-master/lib/css/zenburn.css">
        <link rel="stylesheet" href="../reveal.js-master/css/SocialHousingCustom.css">

        <!--[if lt IE 9]>
<script src="lib/js/html5shiv.js"></script>
<![endif]-->

    </head>
    <body>
        <div class="reveal">
            <div class="slides">

                <section>
                    <h4><strong>SOCIAL HOUSING</strong></h4>
                    <h2><strong>Who we are ??</strong></h2>
                </section>
                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col s12">
                            Buying a home is a dream coming true for many and one of the biggest steps in ones life. It is no surprise then that India’s middle class and working population is often left out of this conversation altogether. This is because there is simply no way for them to afford the steep EMIs, registration charges and maintenance expenses of owning a home.
                            SocialHousing was born with the idea of addressing this very concern and hence focusses on the  key areas.
                            </div>
                        </div> 
                       <div class="row">
                            <div class="col s12">
                        <img src="../images/Module0/WhoWeAre.png" height="480" width="850">
                            </div>
                        </div> 
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <h2>What we do ?</h2>
                            <div class="col s12">
                                <img src="../images/Module0/WhatWeDo.png" height="580" width="950">
                            </div>
                        </div> 
                    </div>
                </section>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>

        <script src="../reveal.js-master/lib/js/head.min.js"></script>
        <script src="../reveal.js-master/js/reveal.js"></script>

        <script>

            // More info https://github.com/hakimel/reveal.js#configuration
            Reveal.initialize({
                controls: true,
                progress: true,
                history: true,
                center: true,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // More info https://github.com/hakimel/reveal.js#dependencies
                dependencies: [
                    { src: '../reveal.js-master/lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: '../reveal.js-master/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: '../reveal.js-master/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: '../reveal.js-master/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: '../reveal.js-master/plugin/search/search.js', async: true },
                    { src: '../reveal.js-master/plugin/zoom-js/zoom.js', async: true },
                    { src: '../reveal.js-master/plugin/notes/notes.js', async: true }
                ]
            });
            Reveal.configure({
                keyboard: {
                    27: null
                }
            });
        </script>

    </body>
</html>
