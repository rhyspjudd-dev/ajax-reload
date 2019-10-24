$(document).ready(function(){
    //set the trigger and container
    var trigger = $('nav ul li a'),
    container = $('#content');

    // Fire on click
    trigger.on('click', function(){
        // Set $this for resuse. Set target for data attribute
        var $this = $(this)
            target = $this.data('target');

            //load target page into container
            container.load(target + '.php');

            // Stop normal line behaviour
            return false;
    });
});