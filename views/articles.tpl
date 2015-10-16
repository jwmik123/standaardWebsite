{include file="pagination.tpl"}

<div id="wrap" style="height: 2000px">
    {foreach from=$result item=newsarticle}
        <div class="article">
            <h3> {$newsarticle.title} </h3>
            <p> {$newsarticle.content} </p>
        </div>
    {/foreach}
</div>
