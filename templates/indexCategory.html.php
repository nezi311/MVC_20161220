{include file="header.html.php"}
<div class="page-header">
	<h2>Lista kategorii</h2>
</div>
{if isset($zmiennaKategorie)}
{if $zmiennaKategorie|@count === 0}
	<strong>Brak kategorii w bazie danych!</strong><<br/>
{else}
	<ul class="list-group">
		{foreach $zmiennaKategorie as $item}
			<li class="list-group-item">
				<a href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/showone/{$item['id']}" class="btn btn-default" role="button">{$item['nazwa']}</a>
				<span class="badge">{$item['ilosc']}</span>
				<a href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/delete/{$item['id']}" class="btn btn-default btn-align-right glyphicon glyphicon-remove-sign" role="button"></a>
			</li>
		{/foreach}
	</ul>
{/if}
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}
{include file="footer.html.php"}
