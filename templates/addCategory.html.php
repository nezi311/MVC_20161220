{include file="header.html.php"}
<div class="page-header">
    <h2>Dodaj kategorię</h2>
</div>

<div class="container">
  <form class="form-horizontal" action="http://{$smarty.server.HTTP_HOST}{$subdir}Categories/insert" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nazwa kategorii:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Wprowadz kategorię">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Dodaj</button>
      </div>
    </div>
  </form>
</div>

{include file="footer.html.php"}
