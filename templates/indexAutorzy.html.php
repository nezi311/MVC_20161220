{include file="header.html.php"}
<div class="page-header">
	<h2>Lista autorów</h2>
</div>

	{if isset($zmiennaAutorzy)}
		<ul class="list-group">
		{foreach $zmiennaAutorzy as $item}
			<li class="list-group-item">
					<a class="btn btn-default" role="button" href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor/showone/{$item['id']}">{$item['imie']}  {$item['nazwisko']}</a>
					<span class="badge">{$item['ilosc']}</span>
					<a class="btn btn-default glyphicon glyphicon-remove-sign" role="button" href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor/delete/{$item['id']}"></a>
			</li>
		{/foreach}
	</ul>
	{/if}


{if isset($error)}
<strong>{$error}</strong>
{/if}
{include file="footer.html.php"}
