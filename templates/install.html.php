{include file="header.html.php"}
<h1>Instalacja bazy</h1>
	{if isset($wiadomosc)}
		<h2>{$wiadomosc}</h2>
	{/if}
	{if isset($error)}
		<strong>{$error}</strong>
	{/if}
{include file="footer.html.php"}
