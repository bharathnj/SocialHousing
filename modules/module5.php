<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Social Housing - Negotiate with the builder on a subsidized price towards bulk booking</title>

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

    </head>

    <body>

        <div class="reveal">

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">

                <section>

                    <h4><strong>Module 5</strong></h4><br><br>
                    <h2><strong>Connect with Housing Provider</strong></h2>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m12 left-align">
                                <p>
                                    SocialHousing understands the cost implications from a home seeker and housing provider’s side. A key step for us is to initiate conversation with the housing provider towards a more competitive price for bulk booking thus leading to a win for both the home seeker &amp; housing provider. Below cycle represents the steps Social Housing takes:
                                </p>
                            </div>
                            <div class="col m12 left-align">
                                <img src="../images/Module5/socialHousingSteps.png" width="1254">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m12 left-align">
                                <h4>Connect With Housing Provider – Standard Template for Sharing Subsidized Price With Home Seeker/s
                                </h4>
                            </div>
                            <div class="col m12 left-align">
                                <img src="../images/Module5/letter.PNG" width="1100">
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>

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
