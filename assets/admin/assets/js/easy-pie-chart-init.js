var Script = function () {

// easy pie chart

    $('.ep_1').easyPieChart({
        animate: 1000,
        size: 100,
        barColor:'#0D47A1'
    });

    $('.ep_2').easyPieChart({
        animate: 1000,
        size: 100,
        barColor:'#0D47A1'
    });

    $('.ep_3').easyPieChart({
        animate: 1000,
        size: 100,
        barColor:'#DC143C'
    });

    $('.ep_4').easyPieChart({
        barColor: function(percent) {
            percent /= 100;
            return "rgb(" + Math.round(255 * (1-percent)) + ", " + Math.round(255 * percent) + ", 0)";
        },
        trackColor: '#eeeeee',
        barColor:'#0D47A1',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 5,
        animate: 1000,
        size: 100
    });

    $('.ep_5').easyPieChart({
        barColor: function(percent) {
            percent /= 100;
            return "rgb(" + Math.round(255 * (1-percent)) + ", " + Math.round(255 * percent) + ", 0)";
        },
        trackColor: '#eeeeee',
        barColor:'#0D47A1',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 5,
        animate: 1000,
        size: 100
    });



    $('.ep_6').easyPieChart({
        barColor: function(percent) {
            percent /= 100;
            return "rgb(" + Math.round(255 * (1-percent)) + ", " + Math.round(255 * percent) + ", 0)";
        },
        trackColor: '#eeeeee',
        barColor:'#eac459',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 5,
        animate: 1000,
        size: 100
    });





}();