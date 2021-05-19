$(document).ready(function () {
     $('#VolumeLots').keyup(function () {
         var CurrentPrice = $('#CurrentPrice').val();

         var VolumeLots = $('#VolumeLots').val();
         var AccountType = $('#AccountType').val();



         $.ajax({
             type: 'post',
             data: {
                 CurrentPrice: CurrentPrice,

                 VolumeLots: VolumeLots,
                 AccountType: AccountType



             },
             success: function (response) {

                 var Leverage = AccountType * VolumeLots;
                 console.log("Leverage:" + Leverage);
                 var Calculate = (0.0001 / CurrentPrice) * Leverage;
                 var Reset = Calculate * CurrentPrice;
                 console.log("Reset:" + Reset);



                 $('#Result').text(' Result:   ' + Reset);

             }
         });
     });
 });
