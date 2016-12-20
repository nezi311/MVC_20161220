{include file="header.html.php"}
<?php include 'templates/header.html.php'; ?>
{if isset($oneCat)}
{if $oneCat|@count === 0}
  <strong>Brak kategorii o zadanym id</strong>
{else}
<div class="page-header">
  <h2>
    Kategoria :
    <small>
      {$oneCat['nazwa']} <a class="btn glyphicon glyphicon-remove" href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/delete/{$oneCat['id']}"></a>
    </small>
  </h2>
</div>

  {if isset($ksiazki)}
    {if $ksiazki|@count ===0}
      <h3>Brak ksiązek z tej kategorii.</h3>
    {else}
      <h3>Ksiązki z zadanej kategorii : </h3>
        <div class="list-group">
          {foreach $ksiazki as $ksiazka}
            <a class="list-group-item" href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/showone/{$ksiazka['id']}">{$ksiazka['id']}:{$ksiazka['tytul']}</a>
          {/foreach}
        </div>
   {/if}
  {/if}
{/if}
{/if}

{if isset($error)}
<strong>{$error}</strong>
{/if}
{include file="footer.html.php"}
