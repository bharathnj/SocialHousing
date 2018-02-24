<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Social Housing - Home-Buying Process</title>

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
                <!--               -->

                <!--                    -->
                <section>

                    <h4><strong>Module 2</strong></h4><br><br>
                    <h2><strong>HOME-BUYING PROCESS</strong></h2>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m12 left-align">
                                <h3>
                                    On completion of this module, you will learn:
                                </h3>
                            </div>
                            <div class="col m6 left-align">

                                <ul>
                                    <span class="fragment"> <li>Importance of Voice Of Customer
                                        </li></span>
                                    <span class="fragment"><li>Different stages of Voice Of Customer
                                        </li></span>
                                </ul>
                                <div class="col m12">&nbsp;</div>
                                <span class="fragment"><img src="../images/Module2/ear.png" width="600" height="300"></span>
                            </div>
                            <div class="col m6">
                                <div class="col m12">&nbsp;</div>
                                <video controls>
                                    <source src="../videos/Module2_VOC.mp4" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m12 left-align">
                                <p>VOC - Voice of the customer (VOC) is the customer's voice, expectations, preferences, and comments of a product or service in discussion. </p>
                                <p>The aim?</p>
                                <ul>
                                    <span class="fragment"><li>Understand customer needs, wants and pain points.</li></span>
                                    <span class="fragment"><li>Understand how your customers view and value your products and services.</li></span>
                                    <span class="fragment"><li>Understand where you are delivering on your promise to your customers, and where you are not.</li></span>
                                </ul>
                                <span class="fragment">
                                    <p>
                                        There are 3 stages of VOC -
                                    </p>
                                </span>
                                <div class="row">
                                    <div class="col m4 left-align">
                                        <span class="fragment"> 
                                            <img src="../images/Module2/stage1.png">
                                        </span>
                                    </div>
                                    <div class="col m4 left-align">
                                        <span class="fragment"> 
                                            <img src="../images/Module2/stage2.png">
                                        </span>
                                    </div>
                                    <div class="col m4 left-align">
                                        <span class="fragment"> 
                                            <img src="../images/Module2/stage3.png">
                                        </span>
                                    </div>
                                </div>    
                            </div>

                        </div>
                    </div>
                </section>

                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col m1">&nbsp;</div>
                            <div class="col m3">
                               <a href="../vocStage1.php" target="_blank"><button class="btn btn-primary btn-lg">VOC 1</button></a>
                            </div>
                            <div class="col m1">&nbsp;</div>
                            <div class="col m3">
                               <a href="../vocStage2.php" target="_blank"><button class="btn btn-primary btn-lg">VOC 2</button></a>
                            </div>
                            <div class="col m1">&nbsp;</div>
                            <div class="col m3">
                                <a href="../vocStage3.php" target="_blank"><button class="btn btn-primary btn-lg">VOC 3</button></a>
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
