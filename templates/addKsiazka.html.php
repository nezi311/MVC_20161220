{include file="header.html.php"}
<div class="page-header">
	<h2>Dodaj książkę</h2>
</div>
{if isset($setAutorzy)}
	{if $setAutorzy|@count === 0}
	<b>Brak Autorow w bazie!</b><br/><br/>
	{else}
	<div class="container">
		  <h2>Dodaj kategorię</h2>
		<form action="http://{$smarty.server.HTTP_HOST}{$subdir}Ksiazka/insert" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="tytul">Tytuł :</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Wprowadz tytuł">
	      </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="autorzy">Autor :</label>
				<div class="col-sm-10">
					<select class="form-control" id='autorzy' name='autorzy'>
						{foreach $setAutorzy as $autorzy}
							<option value="{$autorzy['id']}">{$autorzy['imie']} {$autorzy['nazwisko']}</option>
						{/foreach}
					</select>
				</div>
			</div>
		{/if}
	{/if}
	{if isset($setKategorie)}
		{if $setKategorie|@count === 0}
		<strong>Brak kategorii do wyswietlenia!</strong>
		{else}
			<div class="form-group">
				<label class="control-label col-sm-2" for="kategorie">Kategorie :</label>
				<div class="col-sm-10">
					<select class="form-control" id='kategorie' name='kategorie'>
						{foreach $setKategorie as $key}
							<option value="{$key['id']}">{$key['nazwa']}</optiopn>
						{/foreach}
					<select>
				</div>
			</div>
		{/if}
	{/if}
		<div class="form-group">
			<label class="control-label col-sm-2" for="rok_wydania">Rok wydania :</label>
			<div class="col-sm-10">
				<input class="form-control" type='number' id='rok_wydania' name='rok_wydania' placeholder="Wprowadź rok"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Dodaj</button>
			</div>
		</div>
	  </form>
	</div>
	{if isset($error)}
	<strong>{$error}</strong>
	{/if}
{include file="footer.html.php"}
