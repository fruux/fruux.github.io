<!DOCTYPE html>
<head>

  
            <title>sabre/dav</title>
    
    <meta charset="utf-8">

    <link rel="alternate" type="application/atom+xml" href="http://sabre.io/atom.xml" title="sabre.io blog" />
    <link rel="shortcut icon" href="http://sabre.io/favicon.ico" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,700,300,400" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <link rel="stylesheet" type="text/css" href="http://sabre.io/css/sabre.css" />
    
</head>
<body>
    <header>

    <div class="logo">
        <a href="http://sabre.io/">
            <img src="http://sabre.io/img/logo.png" alt="sabre/dav">
            sabre/dav
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="http://sabre.io/">Home</a></li>
            <li><a href="http://sabre.io/dav">Docs</a></li>
            <li><a href="http://sabre.io/blog">Blog</a></li>
            <li><a href="http://sabre.io/support">Support</a></li>
            <!-- <li><i class="fa fa-github"></i> <a href="https://github.com/fruux">GitHub</a></li> -->
            <li><a href="http://sabre.io/atom.xml"><i class="fa fa-rss"></i></a> <a href="https://twitter.com/sabredav"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </nav>

</header>

    
<section class="hero">
<h1>sabre/dav</h1>

<p>
An open source CardDAV, CalDAV and WebDAV server.
</p>

</section>
<div class="install">
    <a href="http://sabre.io/dav/install">
        <i class="fa fa-download"></i>
        <h1>Install</h1>
    </a>
    <small>
        <a href="http://sabre.io/dav/gettingstarted">Or learn more here..</a>
    </small>
</div>

<section class="box">
    <h1>News</h1>
            <article class="blog-entry">
            <time>June 12th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabre-dav-2.0.2-release">sabre/dav 2.0.2 release</a></h1>
            <p>We just released sabre/dav 2.0.2.</p>

<p>Several bugs have been fixed in files from the <code>examples/</code> directory, and
more notably: the dependencies in the zip distribution have been updated,
which, among other things, fixes compatibility with PHP versions older than
5.4.14.</p>

<p>Upgrade sabre/dav by running:</p>

<pre><code>composer update sabre/dav
</code></pre>

<p>Or download the zip from the <a href="https://github.com/fruux/sabre-dav/releases">releases</a> page.</p>

<p>Full changelog can be found on <a href="https://github.com/fruux/sabre-dav/blob/2.0/ChangeLog.md">Github</a></p>

        </article>
        <hr />            <article class="blog-entry">
            <time>June 12th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabre-vobject-3.2.3-release">sabre/vobject 3.2.3 release</a></h1>
            <p>We just released sabre/vobject 3.2.3.</p>

<p>Several improvements were made in the validator, and the "repair" option now
works correctly again in the CLI tool.</p>

<p>Upgrade sabre/vobject by running:</p>

<pre><code>composer update sabre/vobject
</code></pre>

<p>Full changelog can be found on <a href="https://github.com/fruux/sabre-vobject/blob/master/ChangeLog.md">Github</a></p>

        </article>
        <hr />            <article class="blog-entry">
            <time>June 12th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabre-event-1.0.1-release">sabre/event 1.0.1 release</a></h1>
            <p>We just released sabre/event 1.0.1. A bug prevented the <code>EventEmitter</code> trait
to work on PHP versions older than 5.4.14.</p>

<p>Upgrade sabre/event by running:</p>

<pre><code>composer update sabre/event
</code></pre>

<p>Full changelog can be found on <a href="https://github.com/fruux/sabre-event/blob/master/ChangeLog">Github</a></p>

        </article>
            </section>

<section class="box box-features">
    <h1>Features</h1>
    <ul class="list-features">
        <li>
            <i class="fa fa-rocket"></i>
            Fully WebDAV compliant
        </li>
        <li>
            <i class="fa fa-coffee"></i>
            Supported on all major platforms.
        </li>
        <li class="hr"></li>
        <li>
            <i class="fa fa-lock"></i>
            Locking support.
        </li>
        <li>
            <i class="fa fa-home"></i>
            Custom property support.
        </li>
        <li class="hr"></li>
        <li>
            <i class="fa fa-calendar"></i>
            CalDAV support.
        </li>
        <li>
            <i class="fa fa-book"></i>
            CardDAV support.
        </li>
        <li class="hr"></li>
        <li>
            <i class="fa fa-share"></i>
            Supports calendar sharing and delegating.
        </li>
        <li>
            <i class="fa fa-check"></i>
            &gt;95% unittest coverage.
        </li>
    </ul>
</section>

<section class="box box-enterprise">
    <h1>Enterprise support</h1>
    <h2>sabre/dav and the other sabre.io projects are developed by <a href="https://fruux.com/">fruux</a>.</h2>
    <div>
        <a href="https://fruux.com"><img src="http://sabre.io/img/fruux_logo.png"></a>
        <h3>We provide:</h3>
        <ul class="">
            <li>Enterprise support.</li>
            <li>Customization.</li>
            <li>Integrating into your existing infrastructure.</lI>
            <li>Both on-premise and SaaS deployments.</li>
        </ul>
    </div>
    <a href="/support" class="bubble">
        <i class="fa fa-2x fa-envelope-o"></i>
        <strong>Contact us</strong> <br>
        to discuss your requirements.
    </a>
</section>

<section class="box box-lineup">
    <h1>The full sabre.io project lineup</h1>
    <a href="http://sabre.io/dav">
        <span>d</span><br>
        <strong>sabre/dav</strong><br>
        The leading open-source CalDAV, CardDAV and WebDAV server
    </a>
    <a href="http://sabre.io/http">
        <span>h</span><br>
        <strong>sabre/http</strong><br>
        An OOP abstraction layer for the PHP server api.
    </a>
    <a href="http://sabre.io/vobject">
        <span>v</span><br>
        <strong>sabre/vobject</strong><br>
        A library for parsing and manipulating vCard, iCalendar, jCard and jCal.
    </a>
    <a href="http://sabre.io/event">
        <span>e</span><br>
        <strong>sabre/event</strong><br>
        Utilities for lightweight event-based programming in PHP.
    </a>

</section>

    <!-- this is where the ugly bit starts. Stupid javascript :( -->

    <script src="http://sabre.io/components/highlightjs/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-2848664-5', 'sabre.io');
ga('send', 'pageview');
</script>

    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'sabredav'; // required: replace example with your forum shortname
    var disqus_identifier = '/page/3';
    var disqus_title = '';
    var disqus_url = 'http://sabre.io/page/3';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
         var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
         dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
         (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
     })();
 </script>

    <footer>

    <nav>
        <ul>
            <li>© 2014 fruux GmbH | </li>
            <li><a href="http://sabre.io/support">Contact</a> | </li>
            <li><a href="http://sabre.io/legal">Legal Info</a> | </li>
            <li><i class="fa fa-twitter"></i> <a href="http://twitter.com/sabredav">@sabredav</a>, </li>
            <li><a href="http://twitter.com/fruux">@fruux</a> | </li>
            <li><i class="fa fa-github"></i> <a href="https://github.com/fruux">GitHub</a></li>
        </ul>
    </nav>

</footer>

</body>