

<section id="wrap">

	{foreach from=$result item=newsarticle}

	<article class="article">

	<h1> {$newsarticle.title} </h1>
	<content> {$newsarticle.content} </content>

	</article>

	{/foreach}

</section>
