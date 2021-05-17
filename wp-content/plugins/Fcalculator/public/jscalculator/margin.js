  $(document).ready(function () {
        $('#VolumeLots').keyup(function () {
            var CurrentPrice = $('#CurrentPrice').val();
            var leverage = $('#leverage').val();
            var VolumeLots = $('#VolumeLots').val();
            var AccountType = $('#AccountType').val();
            var Tradesize = $('#Tradesize').val();



            $.ajax({
                type: 'post',
                data: {
                    CurrentPrice: CurrentPrice,
                    leverage: leverage,
                    VolumeLots: VolumeLots,
                    AccountType: AccountType



                },
                success: function (response) {

                    var CalculateUnit = VolumeLots * leverage * AccountType;
                    var RequiredMargin = CalculateUnit / leverage * CurrentPrice;
                    console.log(RequiredMargin);

                    /*
                    Example:

                    Volume in Lots: 5 (One Standard Lot = 100,000 Units)
                    Leverage: 100
                    Account Base Currency: USD
                    Currency Pair: EUR/USD
                    Exchange Rate: 1.365 (EUR/USD)

                    Required Margin = 500,000 /100 * 1.365
                    Required margin is $6825.00 USD
                    */


                    $('#Result').text('RequiredMargin : ' + RequiredMargin);
                }
            });
        });
    });

