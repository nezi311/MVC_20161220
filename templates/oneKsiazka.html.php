{include file="header.html.php"}
<div class="page-header">
  <h1>Książka</h1>
</div>
{if isset($oneKsiazka)}
{if $oneKsiazka|@count === 0}
  <strong>Brak ksiazki w bazie danych!</strong>
{else}
  <div class="panel panel-default">
  <!-- Default panel contents -->
    <div class="panel-heading">Szczegóły książki</div>
      <div class="panel-body">
        <p>Tu można wpisać przykładowy opis.</p>
      </div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>Id</th><th>Tytuł</th><th>Rok wydania</th><th>Autor</th><th>Kategoria</th><th>Usuń</th>
        </tr>
      </thead>
      <tr>
        <td>{$oneKsiazka['id']}</td>
        <td>{$oneKsiazka['tytul']}</td>
        <td>{$oneKsiazka['rok_wydania']}</td>
        <td>{$oneKsiazka['nazwaAutor']}</td>
        <td>{$oneKsiazka['nazwaKategoria']}</td>
        <td><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Autor/delete/{$oneKsiazka['id']}" class="btn glyphicon glyphicon-remove"></a></td>
      </tr>
    </table>
  </div>

{/if}
{/if}

{if isset($error)}
<strong>{$error}</strong>
{/if}
{include file="footer.html.php"}
