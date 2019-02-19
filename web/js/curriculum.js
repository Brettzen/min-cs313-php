$(function () {

    $(".responsive-curriculum-menu").on("click", function () {
        $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
        $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
        $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
    });
    $(window).resize(function(){
//        console.log($(window).width());
        if($(window).width() >= 873) {
            $(".curriculum-menu div:nth-child(n+2)").css("display", "initial");
            $(".responsive-curriculum-menu .fa-caret-down").css("display", "initial");
            $(".responsive-curriculum-menu .fa-caret-up").css("display", "none");
        } else {
            $(".curriculum-menu div:nth-child(n+2)").css("display", "none");
        }
    });
    

    $(".belt-select select").on("change", function () {
        window.location = "index.php?action=dashboard&id=" + this.value;
    });

    // Navigation
    $(".white-stripe").on("click", function () {
        console.log("White Clicked.");
        $(".student-welcome").css("display", "none");
        $(".white-curriculum").css("display", "initial");
        $(".yellow-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".green-curriculum").css("display", "none");
        $(".blue-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".red-curriculum").css("display", "none");
        $(".black-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() < 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    $(".yellow-stripe").on("click", function () {
        console.log("yellow Clicked.");
        $(".student-welcome").css("display", "none");
        $(".yellow-curriculum").css("display", "initial");
        $(".white-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".green-curriculum").css("display", "none");
        $(".blue-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".red-curriculum").css("display", "none");
        $(".black-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() <= 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    $(".green-stripe").on("click", function () {
        console.log("green Clicked.");
        $(".student-welcome").css("display", "none");
        $(".green-curriculum").css("display", "initial");
        $(".yellow-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".white-curriculum").css("display", "none");
        $(".blue-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".red-curriculum").css("display", "none");
        $(".black-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() <= 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    $(".blue-stripe").on("click", function () {
        console.log("blue Clicked.");
        $(".student-welcome").css("display", "none");
        $(".blue-curriculum").css("display", "initial");
        $(".yellow-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".green-curriculum").css("display", "none");
        $(".white-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".red-curriculum").css("display", "none");
        $(".black-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() <= 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    $(".red-stripe").on("click", function () {
        console.log("red Clicked.");
        $(".student-welcome").css("display", "none");
        $(".red-curriculum").css("display", "initial");
        $(".yellow-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".green-curriculum").css("display", "none");
        $(".blue-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".white-curriculum").css("display", "none");
        $(".black-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() <= 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    $(".black-stripe").on("click", function () {
        console.log("black Clicked.");
        $(".student-welcome").css("display", "none");
        $(".black-curriculum").css("display", "initial");
        $(".yellow-curriculum").css("display", "none");
        $(".orange-curriculum").css("display", "none");
        $(".green-curriculum").css("display", "none");
        $(".blue-curriculum").css("display", "none");
        $(".brown-curriculum").css("display", "none");
        $(".red-curriculum").css("display", "none");
        $(".white-curriculum").css("display", "none");
        $(".board-break").css("display", "none");
        if ($(window).width() <= 540) {
            $(".curriculum-menu div:nth-child(n+2)").slideToggle("fast");
            $(".responsive-curriculum-menu .fa-caret-down").toggle("fast");
            $(".responsive-curriculum-menu .fa-caret-up").toggle("fast");
        }
    });
    
    $("#editFitness").on('click', function(){
        $('.fitness-edit').show();
        $('.fitness-noedit').hide();
    });
    
    $("#saveFitness").on('click', function(){
        $pushups = $('#pushups').val();
        $legraises = $('#legraises').val();
        $pullups = $('#pullups').val();
        $jumps = $('#jumps').val();
        $roundright = $('#roundright').val();
        $roundleft = $('#roundleft').val();
        $roundtime = $('#roundtime').val();
        $stretch = $('#stretch').val();
        $data = { $pushups, $legraises, $pullups, $jumps, $roundright, $roundleft, $roundtime, $stretch };
        console.log($data);
        $.ajax({
            url: 'index.php?action=addFitness',
            method: 'POST',
            data: $data,
            dataType: 'text',
            success: function(data) {
                if(data == 1) {
                    $('.pushups').html($pushups);
                    $('.legraises').html($legraises);
                    $('.pullups').html($pullups);
                    $('.jumps').html($jumps);
                    $('.roundright').html($roundright);
                    $('.roundleft').html($roundleft);
                    $('.roundtime').html($roundtime + " seconds");
                    $('.stretch').html($stretch);
                }
                
                $alert = '<div class="contact-alert alert" role="alert">' + data + '</div>';
                $('body').append($alert).delay(1000);
                $('.contact-alert').addClass('fade').alert('close');
                
                $('.fitness-edit').hide();
                $('.fitness-noedit').show();
            },
            error: function(xhr, status, error) {
               console.log("error: " + error);
               console.log("xhr: " + JSON.stringify(xhr));
               console.log("status: " + status);
            }
        });
    });
    
    $("#cancelFitness").on('click', function(){
        $('form').submit(function(e){
            e.preventDefault();
        });
        $('.fitness-edit').hide();
        $('.fitness-noedit').show();
    });
    
    $('#logout').on('click', function() {
        window.location.href = "/index.php?action=logout";
    });

});