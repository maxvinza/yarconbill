<script>
$('#fire_form_new85').mousedown(function(eventObject){
  seeError('85');
});
$('#fire_form_new155').mousedown(function(eventObject){
  seeError('155');
});
$('#fire_form_new39').mousedown(function(eventObject){
  seeError('39');
});
var inputArrErr={};
$(document).ready(function() {
   inputArrErr['85']={};
   inputArrErr['155']={};
   inputArrErr['39']={};
    $("form[id='formnew85']").find("input").each(function() {
	      val = $(this).val();
          if(val!=null){
             name = $(this).attr('name');
             inputArrErr['85'][name]= val;
          }

	});
    $("form[id='formnew155']").find("input").each(function() {
	      val = $(this).val();
          if(val!=null){
             name = $(this).attr('name');
             inputArrErr['155'][name]= val;
          }

	});
    $("form[id='formnew39']").find("input").each(function() {
	      val = $(this).val();
          if(val!=null){
             name = $(this).attr('name');
             inputArrErr['39'][name]= val;
          }

	});
    $('#block-new85 input').keyup(function() {
        val = $( this ).val();
        name = $(this).attr('name');
        inputArrErr['85'][name]= val;
    });
    $('#block-new155 input').keyup(function() {
        val = $( this ).val();
        name = $(this).attr('name');
        inputArrErr['155'][name]= val;
    });
    $('#block-new39 input').keyup(function() {
        val = $( this ).val();
        name = $(this).attr('name');
        inputArrErr['39'][name]= val;
    });
});
function seeError(form){
  //phone email
  var formName ='';
  if(form == '155') formName = 'top_form';
  if(form == '39') formName = 'middle_form';
  if(form == '85') formName = 'bottom_form';
   if(inputArrErr[form]['name'].length < 2){
     seeErrorFind(formName,'Не заполнено имя');
   }
   if(inputArrErr[form]['phone'].length < 2){
      seeErrorFind(formName,'Не заполнен телефон');
   }
   if(inputArrErr[form]['email'].length < 2){
       seeErrorFind(formName,'Не заполнен email');
   }
}
function seeErrorFind(form,pole){
  dataLayer.push({
         'event': 'addEvents_makeConversions_corp',
         'eventCategory': 'CONVERSIONS',
         'eventAction': 'conversionStep / '+form+' / senderror',
         'eventLabel': pole});
  console.log(form+' - '+pole);
}
</script>
