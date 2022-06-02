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
$(function(){
    $(".input-search").keyup(function(){
        //pega o css da tabela 
        var tabela = $(this).attr('alt');
        if( $(this).val() != ""){
            $("."+tabela+" tbody>tr").hide();
            $("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        } else{
            $("."+tabela+" tbody>tr").show();
        }
    }); 
});
$.extend($.expr[":"], {
    "contains-ci": function(elem, i, match, array) {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});
</script>
