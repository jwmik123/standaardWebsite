
<header class="bird-box">
    <div class="back-bird"></div>
    <div class="logo"></div>
    <div class="fore-bird"></div>
</header>



<nav class="header-nav">
  <ul class="header-ul">
    <li {if $curr_page eq "shows"} class="selected"{/if} class="header-li"> <a href="?page=shows">Shows</a> </li>
    <li {if $curr_page eq "contact"} class="selected"  {/if} class="header-li"><a href="?page=contact">Contact</a></li>
    <li {if $curr_page eq "info"} class="selected"  {/if} class="header-li"><a href="?page=info">Info</a></li>
    <li {if $curr_page eq "agenda"} class="selected"  {/if} class="header-li"><a href="?page=agenda">Agenda</a></li>

  </ul>
</nav>
