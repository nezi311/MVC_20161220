{include file="header.html.php"}
<div class="page-header">
	<h2>Lista ksiażek</h2>
</div>
<ul>
	{if isset($zmiennaKategorie)}
	{if $zmiennaKategorie|@count === 0 }
		<strong>Brak kategorii w bazie!</strong>
	{else}
		{foreach $zmiennaKategorie as $itemKategorie}
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#collapse1{$itemKategorie['id']}">{$itemKategorie['nazwa']}</a>
					</h4>
				</div>

				<div id="collapse1{$itemKategorie['id']}" class="panel-collapse collapse">
					<ul class="list-group">
						<a class="list-group-item list-group-item-action" href="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/showone/{$itemKategorie['id']}">Szczegoly</a>
				{if isset($zmiennaKsiazka)}
				{if $zmiennaKsiazka|@count === 0}
					<strong>Brak ksiązek w bazie!</strong>
				{else}
					{foreach $zmiennaKsiazka as $ksiazka}
						{if $itemKategorie['id']==$ksiazka['kategoria']}
								<a class="list-group-item list-group-item-action" href="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/showone/{$ksiazka['id']}">{$ksiazka['tytul']} : {$ksiazka['autorNazwa']}</a>
						{/if}
					{/foreach}
						</ul>
					</div>
					</div>
				</div>
				{/if}
				{/if}
		{/foreach}
		</ul>
	{/if}
	{/if}

	{if isset($error)}
	<strong>{$error}</strong>
	{/if}

{include file="footer.html.php"}
