// A $( document ).ready() block.
$( document ).ready(function() {
    $('.targetDiv').hide();
    $('#nameSection').show();
    $(function(){
      $('.showSingle').click(function(){
            $('.targetDiv').hide();
            $('#'+$(this).attr('target')+"Section").show();
      });
    });

    $('.group').hide();
    $('#cx3').show();
    $('#car').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
   })
   $('.colorGroup').hide();
   $('#cx3SportColor').show();
   $('#cx3Model').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
   })
   $('#cx5SportColor').show();
   $('#cx5Model').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
   })
   $('#mazda6SportColor').show();
   $('#mazda6Model').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
   })
   $('#mazda34drSportColor').show();
   $('#mazda34drModel').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
   })
   $('#mazda35drSportColor').show();
   $('#mazda35drModel').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
   })

});
