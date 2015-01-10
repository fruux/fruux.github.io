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
            <time>October 9th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/10-09-sabre-event-2.0.1-release">sabre/event 2.0.1 release</a></h1>
            <p>We just released sabre/event 2.0.1.</p>

<p>This release fixes two issues related to the <code>EventEmitter::once()</code> method,
and brings its functionality up to par with <code>EventEmitter::on()</code>.</p>

<p>Upgrade sabre/event by running:</p>

<pre><code>composer update sabre/event
</code></pre>

<p>If this didn't upgrade you to 2.0.1, make sure that your composer.json file
has a line that looks like this:</p>

<pre><code>"sabre/event" : "~2.0.1"
</code></pre>

        </article>
        <hr />            <article class="blog-entry">
            <time>October 9th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/10-09-sabre-vobject-3.3.3-release">sabre/vobject 3.3.3 release</a></h1>
            <p>We just released sabre/vobject 3.3.3.</p>

<p>This release has additional fixes and improvements for the <a href="/vobject/itip/">iTip</a>
subsystem.</p>

<p>This release also works around a PHP bug that would otherwise spam your php
error log file with 'invalid timezone' exceptions and has support for the
"Line Islands Standard Time" timezone coming from Microsoft products.</p>

<p>Upgrade sabre/vobject by running:</p>

<pre><code>composer update sabre/vobject
</code></pre>

<p>If this didn't upgrade you to 3.3.3, make sure that your composer.json file
has a line that looks like this:</p>

<pre><code>"sabre/vobject" : "~3.3.3"
</code></pre>

        </article>
        <hr />            <article class="blog-entry">
            <time>September 23rd, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/09-23-sabre-http-3.0.0-release">sabre/http 3.0.0 release</a></h1>
            <p>We just released sabre/http 3.0.0.</p>

<p>We introduced several API breaking changes, so a major version change was
warranted.</p>

<p>In particular, we modified the API to be closer to the draft version of
<a href="https://github.com/php-fig/fig-standards/blob/master/proposed/http-message.md">psr/http</a>.</p>

<p>psr/http is an upcoming standard for PHP development that should unify how we
represent HTTP requests and responses in PHP.</p>

<p>There were several good ideas in this spec, in particular how HTTP headers
are treated, especially when there are multiple headers with the same name,
which is something sabre/http dealt poorly with (not at all).</p>

<h2>Changes</h2>

<ul>
<li>Switched to a PSR-4 directory structure in <code>lib/</code>. This means all classes
are now in <code>lib/</code> instead of <code>lib/Sabre/HTTP</code>. This should not change a
thing if you use the composer autoloader.</li>
<li><code>::setHeaders()</code> used to delete all previous http headers. This is no longer
the case, new headers will simply be added to the existing ones.</li>
<li>Added <code>::getHeaderAsArray()</code>. This method returns a single http header. If
multiple headers with the same name were specified, each value will be an
item in this array.</li>
<li>If you use <code>::getHeader()</code>, and there were more than 1 http header with that
name, we now concatenate all these headers with a comma (<code>,</code>).</li>
<li><code>::addHeader()</code> is new, and will preserve any existing header with that
name. Instead, a second header will be added with the same name and a new
value.</li>
<li><code>::getHeaders()</code> will now return each header value as an array.</li>
<li>The <code>Client</code> class now only follows redirects to HTTP and HTTPS urls.</li>
<li><code>Util::negotiate</code> is deprecated, use <code>Util::negotiateContentType</code> instead.</li>
<li>The <code>Client</code> class can now follow redirects, even if the <code>open_basedir</code>
setting is turned on.</li>
</ul>

<h2>Upgrading</h2>

<p>If you are using sabre/http solely through sabredav, don't upgrade yet unless
you are using the latest development version. If you use sabre/http
independently, ensure that the relevant line in your composer.json looks like
this:</p>

<pre><code>"require" : {
    "sabre/http" : "~3.0.0"
}
</code></pre>

<p>And run <code>composer update sabre/http</code> afterwards.</p>

<h2>No full psr/http compliance</h2>

<p>I've matched the Request and Response to behave closer to the draft psr-http
draft, <em>but</em> I didn't go all the way!</p>

<p>I strongly disapprove of how message bodies are represented. The PSR
introduces an object to wrap PHP streams, that has severely less features,
and due to its design it's incompatible with regular PHP streams and doesn't
cover all our use cases. All under the pretense that PHP streams are hard to
use.</p>

<p>Unless that's fixed, we'll not be fully supporting the specification, but it's
still a draft, and there's still time.</p>

<p>Full changelog can be found on <a href="https://github.com/fruux/sabre-http/blob/3.0.0/ChangeLog.md">Github</a></p>

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
    var disqus_identifier = '/page/4';
    var disqus_title = '';
    var disqus_url = 'http://sabre.io/page/4';

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
