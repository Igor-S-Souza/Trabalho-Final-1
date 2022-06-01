<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
      setTimeout(function () {
      $(".magica").fadeOut('');
       },2500);
</script>
<script type="text/javascript">
      setTimeout(function () {
      $(".magica_erro").fadeOut('');
       },2500);
</script>

<script language=javascript type="text/javascript">
function newPopup(texto){

  newpopupWindow = window.open ('', 'pagina', "width=250 height=250");
  newpopupWindow.document.write (texto);

}
</script>

<script type="text/javascript">
var table = $(".tabela2 tbody").find("tr");
var mensagem = $("#mensagem");
$("#pesquisa").keyup(function() {
  _this = this;
  flag = table.length;
  console.log(flag);
  $.each(table, function() {
    if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) == -1) {
      $(this).hide();
      flag--;
    } else {
      $(this).show();
    }
  });
  if (flag == 0)
    $("#mensagem").html("<center><div class=''>Não foram encontrados resultados<div></center>");
  else
    $("#mensagem").html("");
});
</script>
