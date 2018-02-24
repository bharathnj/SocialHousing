<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>reveal.js – The HTML Presentation Framework</title>

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

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">
                <section>
                    <h4><strong>Module 1</strong></h4><br><br>
                    <h2><strong>CURRENT HOUSING CRISIS</strong></h2>
                </section>
                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m3 left-align">
                                <p>
                                    Take a look at the housing market in India,  and what do you see? 
                                </p>
                                <p>
                                    India is facing a housing crisis. The national shortage stands at close to 20 million units.  Unsurprisingly, most of the shortfall is at the bottom of the economic ladder.
                                </p>
                            </div>
                            <div class="col m9 left-align">
                                <img src="../images/Module1/pyramid.png" >
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="left">
                        <p>
                            Affordable housing shortage continues to be a major concern in the country today, and can be correlated with the rate of urbanisation taking place. According to the Census of India 2011, India’s urban population increased to 377 million, reflecting the rise in urbanisation from 27.8 per cent to 31.2 per cent between 2001 and 2011. This rate of urbanisation has led to many issues such as land shortage, housing shortfall, severe pressure on available infrastructure, transportation deficits and stress on basic amenities like water, sanitation and healthcare.

                        </p>
                        <p>
                            Most people consider home buying to be 
                            one of the turning points in their lives. There is a grave lack of housing options for India’s
                            invisible middle class.
                        </p>
                    </div>
                    <div class="right">
                        <img src="../images/Module1/underConstruction.png" height="650" width="450">
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
