var table = $(".tabela2").find("tr");
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
});
