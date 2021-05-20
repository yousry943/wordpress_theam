/*
https: //www.freeforexcoach.com/position-sizing-calculator/
https: //www.myfxbook.com/forex-calculators/position-size

Position size = (Account size× % risk per trade) / (stop loss in pips× pip value)

STANDARD ACCOUNT
For a standard size pip value = $10

= ($10, 000 x 1 % ) / (30 x 10), 100 / 300

= 0.33


*/


$(document).ready(function () {
    $('#StopLossInPips').keyup(function () {
        var AccountSize = $('#AccountSize').val();

        var RiskPerTrade = $('#RiskPerTrade').val();
        var StopLossInPips = $('#StopLossInPips').val();

        $.ajax({
            type: 'post',
            data: {
                AccountSize: AccountSize,
                RiskPerTrade: RiskPerTrade,
                StopLossInPips: StopLossInPips
            },
            success: function (response) {

                var StanderPositionSize = (AccountSize * (RiskPerTrade / 100)) / (
                    StopLossInPips * 10);
                console.log("Stander lot:" + StanderPositionSize.toFixed(4));

                var MinPositionSize = (AccountSize * (RiskPerTrade / 100)) / (
                    StopLossInPips * 1);
                console.log("Min lot :" + MinPositionSize.toFixed(4));


                var MicroPositionSize = (AccountSize * (RiskPerTrade / 100)) / (
                    StopLossInPips * 0.1);
                console.log("Micro lot:" + MicroPositionSize.toFixed(4));







                $('#ResultStanderPositionSize').text(' Stander lot : ' + StanderPositionSize.toFixed(4));
                $('#ResultMinPositionSize').text(' Min lot : ' + MinPositionSize.toFixed(4));

                $('#ResultMicroPositionSize').text(' Micro lot : ' + MicroPositionSize.toFixed(4));



            }
        });
    });
});