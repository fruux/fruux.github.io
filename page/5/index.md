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
            <time>May 28th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabredav-2.0.1-release">sabre/dav 2.0.1 released</a></h1>
            <p>We just released sabre/dav 2.0.1. Two regressions have been found related
to PROPFIND requests.</p>

<p>Upgrade if you're having compatiblity problems. The Windows 7 client in
particular had issues.</p>

<p>Run <code>composer update sabre/dav</code>, or <a href="https://github.com/fruux/sabre-dav/releases/tag/2.0.1">Download</a> the new zip from GitHub.</p>

        </article>
        <hr />            <article class="blog-entry">
            <time>May 22nd, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabredav-2-release">sabre/dav 2.0 released</a></h1>
            <p>We just released sabre/dav 2.0. The last major release (1.8) was in <a href="http://evertpot.com/sabredav-18-released-with-namespaces/">2012</a>,
so it's been a long time coming.</p>

<h2>New features</h2>

<h3>New browser</h3>

<p><a href="/img/posts/new-browser.png" style="float: right; padding-left: 10px;">
    <img src="/img/posts/new-browser.png" alt="new browser!" class="zoomAbleImage" width="300px" style="box-shadow: 5px 5px 10px #000"/>
</a></p>

<p>The browser got a big overhaul. It hadn't changed much since when it was
introduced in 2009, so a visual refresh was long due.</p>

<p>The new browser plugin shows you a lot more information about webdav
properties as well, making it a more useful debugging tool.</p>

<h3>Performance</h3>

<p>A lot of focus has gone into performance, specifically in relation to Cal- and
CardDAV. We've been running the bleeding edge sabredav, and we've seen several
major cpu drops as we've kept sabredav up to date.</p>

<p>We've optimized queries, and provided new shortcuts in the system that allowed
backends to do optimizations that were not possible before.</p>

<p>Lastly, we added WebDAV-Sync support.</p>

<h3>WebDAV-Sync</h3>

<p>Support for WebDAV-Sync (<a href="http://tools.ietf.org/html/rfc6578">rfc6578</a>) has been added. WebDAV-Sync is used by
an increasing number of popular Cal- and CardDAV clients. It allows clients to
request a list of changes that happened in calendar and/or addressbooks. This
can greatly reduce memory, bandwidth and cpu usage on both client and server,
and is well worth it.</p>

<p>It's available as a plugin and the appropriate interfaces have been added to
add support for WebDAV-Sync to the collections where you want to support it.</p>

<p>Furthermore, both the default Cal- and CardDAV PDO backends have out of the
box support.</p>

<h3>New packages</h3>

<p>This is the first sabredav release that ships with <a href="/vobject">sabre/vobject</a> 3.0, and
is also the first release that has part of it's functionality split out into
two new packages: <a href="/event">sabre/event</a> and <a href="/http">sabre/http</a>.</p>

<h3>Calendar subscription syncing</h3>

<p>There's a proprietary protocol that allows calendar clients to sync
subscriptions with a server. Support for this has been added to the CalDAV
plugin, and is also available in the default PDO backend.</p>

<p>This protocol is at least supported by <a href="http://www.busymac.com/busycal/">BusyCal</a> and Apple's iOS and OS X
clients.</p>

<h3>jCal support</h3>

<p><a href="http://tools.ietf.org/html/draft-ietf-jcardcal-jcal-10">jCal</a> is an upcoming standard for representing iCalendar objects in json.
sabre/dav now live converts back and forward between iCalendar and jCal, and
can return jCal everywhere it returns iCalendar.</p>

<p>We highly recommend using jCal over iCalendar. It's a much better format,
easier to parse, and likely to use less memory and cpu while parsing.</p>

<h3>New property system</h3>

<p>A big part of DAV protocols is related to storing and retrieving properties
on resources such as files and calendars.</p>

<p>The property system got a complete overhaul for this release. This allowed
for a great reduction in property-related code and allows for a new feature:
<a href="/dav/properties">storage of arbitrary properties</a>.</p>

<h3>PHP 5.4</h3>

<p>The minimum php version of sabre/dav has been increased to PHP 5.4. This was
needed for a number of reasons, such as better closure support and traits.</p>

<h3>And...</h3>

<p>The list of changes is rather massive. Read up on them in the <a href="https://github.com/fruux/sabre-dav/blob/master/ChangeLog.md">ChangeLog</a>
from <code>1.9.0alpha1</code> onwards.</p>

<p>Also, this includes all the <a href="https://github.com/fruux/sabre-vobject/blob/master/ChangeLog.md">changes from sabre/vobject</a> from 3.0.0 onwards,
<a href="https://github.com/fruux/sabre-http/blob/master/ChangeLog">changes from sabre/http</a> from 2.0.0 onwards and everything from
sabre/event.</p>

<h2>Installation</h2>

<p>As always, the zip can be found on the <a href="https://github.com/fruux/sabre-dav/releases/">github releases page</a>, but the
recommended installation method is using composer:</p>

<pre><code>composer install sabre/dav ~2.0.0
</code></pre>

<h2>Upgrading</h2>

<p>A lot of things have changed in this release. If you are running a standard
server, it's likely that you only have to run the database upgrade script,
but if you did any sort of customizations, chances are that you need to make
changes in your code to keep stuff running.</p>

<p><strong>Make a backup.</strong> and then head to the <a href="/dav/upgrade/1.8-to-2.0/">migration instructions</a> for 2.0.</p>

<p>Drop a line on the <a href="http://groups.google.com/group/sabredav-discuss">mailing list</a> if you run into any issues at all.</p>

<h2>Support status</h2>

<p>As of right now version <strong>1.7</strong> is no longer supported. <strong>1.8</strong> will be
supported for an entire year, until May 2015.</p>

<h2>Thank you</h2>

<p>This was literally the largest release we've ever done, seeing the biggest
diff, most new features, most contributors and longest development time.</p>

<p>Thanks everyone for hanging in there and all your contributions.</p>

<p>I want to specifically thank <a href="https://github.com/staabm">Markus Staab</a> for tirelessly reviewing every
incoming commit, and <a href="https://twitter.com/DominikTo">Dominik Tobschall</a> for all the moral support.</p>

<p>Evert.</p>

        </article>
        <hr />            <article class="blog-entry">
            <time>May 16th, 2014</time>
            <h1><a href="http://sabre.io/blog/2014/sabredav-1.8.10">sabre/dav 1.7.12 and 1.8.10 released</a></h1>
            <p>We just released sabre/dav 1.7.12 and 1.8.10. These two releases are mainly
bugfix releases centering around two things:</p>

<ul>
<li>Better support for If-Match and If-None-Match</li>
<li>Lots of updates in the <a href="/dav/http-patch">PATCH method</a>.</li>
</ul>

<h2>Patch problems</h2>

<p>We've gotten reports that there were problems with the PATCH plugin, and
the <a href="/dav/http-patch">associated documentation</a>. Things were inconsistent and plain
incorrect at times.</p>

<p>We've extended the documentation a great deal, now allowing you to correctly
use negative offsets for patching and also appending.</p>

<p>We've also added a new interface to enable this functionality, namely
<code>Sabre\DAV\PartialUpdate\IPatchSupport</code>.</p>

<p>The existing interface <code>Sabre\DAV\PartialUpdate\IFile</code> is now deprecated and
will be removed in a future major version of sabre/dav. This was unfortunately
needed to fix what was considered a bit of a mess.</p>

<h2>VObject</h2>

<p>sabre/vobject in the zip package is now upgraded to 2.1.4, which works around
a backwards compatibile break that was introduced in PHP 5.5.10 in relation to
timezones.</p>

<h2>Upgrading</h2>

<p>To upgrade with composer, just run <code>composer update sabre/dav</code> on the command-
line.</p>

<p>The zip files can be found on <a href="https://github.com/fruux/sabre-dav/releases">github</a>.</p>

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
    var disqus_identifier = '/page/5';
    var disqus_title = '';
    var disqus_url = 'http://sabre.io/page/5';

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
