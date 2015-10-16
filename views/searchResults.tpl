

<div id="wrap">
    {foreach from=$result item=newsarticle}
        <div class="article">
            <h3> {$newsarticle.title} </h3>
            <p> {$newsarticle.content} </p>
        </div>
    {/foreach}
</div>

{include file="pagination.tpl"}
