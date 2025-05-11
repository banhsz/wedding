$(function(){
    // Hide navbar when menu item is clicked
    var navMain = $(".navbar-collapse");
    navMain.on("click", "a:not([data-toggle])", null, function () {
        navMain.collapse('hide');
    });

    // Number of days left counter
    let countdownValue = 99;
    // Days left until 2025.06.06.
    let countdownStopValue = Math.ceil((new Date(2025, 5, 6) - new Date()) / 86400000);
    if (countdownStopValue > 1) { // 1 or more days left till wedding day
        $('#countdown-text').text(countdownValue + ' nap az esküvőig!');
        $('#countdown-pill').removeClass('d-none');
        const counter = setInterval(function() {
            $('#countdown-text').text(countdownValue + ' nap az esküvőig!');
            if (countdownValue <= countdownStopValue) {
                clearInterval(counter); // stop
            }
            countdownValue--;
        }, 20);
    } else if (countdownStopValue == 0) { // wedding is today
        $('#countdown-pill').removeClass('d-none');
        $('#countdown-text').text('Ma van az esküvő!');
    }
});