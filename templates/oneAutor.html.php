{include file="header.html.php"}
{if isset($oneAutor)}
<div class="page-header">
  <h2>Autor szczegóły</h2>
  <h4>
    {$oneAutor['imie']} : {$oneAutor['nazwisko']}
    <a class="btn glyphicon glyphicon-remove" href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor/delete/{$oneAutor['id']}"></a>
  </h4>
</div>
  <ul>

    {if isset($ksiazki)}
      {if $ksiazki|@count === 0}
        <h4>Brak ksiązek wydanych przez tego autora.</h4>
      {else}
        <h4>Ksiazki wydane przez autora : </h4>
        <div class="list-group">
        {foreach $ksiazki as $ksiazka}
          <strong>
            <a class="list-group-item" href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/showone/{$ksiazka['id']}">{$ksiazka['tytul']} ({$ksiazka['rok_wydania']})</a>
          </strong>
        {/foreach}
        </div>
      {/if}
    {/if}
  </ul>
{/if}



{if isset($error)}
<strong>{$error}</strong>
{/if}
{include file="footer.html.php"}
