
<div class="agenda-space">

  <center><table class="agenda">

      {foreach from=$result item=agenda}
      <tr>
      <td id="date">{$agenda.date} </td>
      <td id="venue">{$agenda.venue}  </td>
      <td id="location">{$agenda.location}</td>
    </tr>
      {/foreach}
  </table></center>

</div>
