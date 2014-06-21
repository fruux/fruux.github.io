<p>--
title: SimpleCollection</p>

<h2>layout: default</h2>

<p>The <code>Sabre\DAV\SimpleCollection</code> class allows you to easily build up static
trees in your webdav filesystem.</p>

<p>This is very useful if there is a part in your directory tree that's read-only
and doesn't often change.</p>

<p>Using the SimpleCollection class is very simple, all it takes is a name
argument and a set of childnodes.</p>

<h2>Usage</h2>

<pre><code>use
    Sabre\DAV;

$root = new DAV\SimpleCollection('root',array(
    new DAV\SimpleCollection('users'),
    new DAV\SimpleCollection('files'),
    new DAV\SimpleCollection('home')
));

$server = new DAV\Server($root);
</code></pre>

<p>As you can see, the children argument is optional. The children can be any
object implementing <code>Sabre\DAV\INode</code>.</p>

<p>Note that since SabreDAV 1.4, you don't have to ever specify a top-level
object, as it is automatically created by SabreDAV, if you pass an array to
the constructor.</p>

<p>Example:</p>

<pre><code>use
    Sabre\DAV;

$root = array(
    new DAV\SimpleCollection('users'),
    new DAV\SimpleCollection('files'),
    new DAV\SimpleCollection('home')
);

$server = new DAV\Server($root);
</code></pre>
