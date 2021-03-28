$(document).ready(function(){
  $('.area').mouseout(function(){
  var cep = $('#cep').val();
  var validacep = /^[0-9]{8}$/;
  var cep = cep.replace(/\D/g, '');
var urlStr = "https://viacep.com.br/ws/" + cep + "/json/";
if(validacep.test(cep)){
  $.ajax({
    url : urlStr,
    type : "get",
    dataType : "json",
    success : function(data){
        $('#localidade').val(data.localidade);
        $('#uf').val(data.uf);
       $('#bairro').val(data.bairro);
       $('#logradouro').val(data.logradouro);
       $('#complemento').val(data.complemento);
       var end = "Confirma o endereço: " +  logradouro.value + " Bairro " + bairro.value + " Cidade " + localidade.value + " Estado " + uf.value + " ? ";
       if(localidade.value!=""){
       $('#end').html(end);
       }else{
        $('#end').html('CEP não encontrado!'); 
       }
    },
    error : function(erro){
      console.log(erro);
    }
  })
}
});
});