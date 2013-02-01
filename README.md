<h2>Autoreload PHP</h2>
<p>This script was designed to work with any PHP based project. It will also work on any environment where PHP is installed. Autoreload PHP can watch any file extention you wish not just php. It requires PHP, jQuery and a modern browser that can make use of localStorage.</p>

<h3>Installation</h3>
<ol>
	<li>Place iterator.php in your projects root folder.</li> 
	<li>Link to autoreload.js either in the head of your project or just before the &lt;/body&gt; tag. (Requires jQuery so make sure to load autoreload.js after jQuery.)</li>
	<li>Open iterator.php and customize the $folders_to_watch and $extensions arrays to match your projects structure. (See comments in iterator.php)</li>
	<li>Open autoreload.js and set the ajax url so that it points to iterator.php</li>
</ol>

<p>Notes: You don't have to put iterator.php in your project root folder. Just the very 'lowest' directory you wish to start watching from.</p>

<p>Have fun auto reloading! Let me know what you think.</p>

<h3>Issues</h3>
<ul>
	<li>Need to implement a way to periodically remove unwatched files from localStorage.</li>
</ul>