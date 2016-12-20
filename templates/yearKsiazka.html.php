{include file="header.html.php"}
<h1>Książka</h1>
{if isset($yearKsiazki)}
{if $yearKsiazki|@count===0}
<strong>Brak ksiazek w bazie!</strong>
{else}
<ul>
  {foreach $yearKsiazki as $ksiazka}
    <li><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/showone/{$ksiazka['id']}">{$ksiazka['tytul']}</a></li>
  {/foreach}
</ul>
{/if}
{/if}

{if isset($error)}
<strong>{$error}</strong>
{/if}
<a href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka">powrót do listy ksiązek</a>
{include file="footer.html.php"}
