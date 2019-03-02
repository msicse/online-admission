window.scrollTo(0, document.querySelector('.container').scrollHeight);

$(document).ready(function () {
    
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;

    $('#btn-program-details').click(function () {
        var error_program = '';
        var error_year = '' ;
        var error_semester = '';
        var program = $('#program').val();
        var semester = $('#semester').val();
        var year = $('#year').val();

        if ( $.trim($('#program').val()) == '' ) {

            error_program = 'Program is Required';
            $('#error-program').text(error_program);
            $('#program').addClass('is-invalid');

        }else {
            if (!numberRegex.test(program) ){
                error_program = 'Program must be a number';
                $('#error-program').text(error_program);
            }else {
                error_program = '';
                $('#error-program').text(error_program);
            }

        }

        if ( $.trim($('#semester').val()) == '' ) {

            error_semester = 'Semester is Required';
            $('#error-semester').text(error_semester);
            $('#semester').addClass('is-invalid');

        }else {
            if (!numberRegex.test(semester) ){
                error_semester = 'Semester must be a number';
            }else {
                error_semester = '';
                $('#error-semester').text(error_semester);
            }

        }
        if ( $.trim($('#year').val()) == '' ) {

            error_year = 'Year is Required';
            $('#error-year').text(error_year);
            $('#year').addClass('is-invalid');

        }else {
            if (!numberRegex.test(year) ){
                error_program = 'Year must be a number';
            }else {
                error_program = '';
                $('#error-year').text(error_program);
            }

        }

        if ( error_year != '' || error_program != '' || error_semester != '') {
            return false;
        } else {
            $('#program-details-list').removeClass('active');
            $('#program-details-list').addClass('disabled');
            $('#program-details-tab').removeClass('active show');
            $('#verify-details-list').addClass('active');
            $('#verify-details-tab').addClass('active show');
        }

    });



    $('#year').on('change', function () {

        var d = new Date();
        var month = d.getMonth();
        var year = d.getFullYear();

        if ( $('#year').val() !=  '') {
            $('#semester').removeAttr('disabled');
        } else {
            $('#semester').attr('disabled', 'disabled');
        }

        if ( $('#year').val() == year ) {

            if( month >= 0 && month <= 3 ) {
                //alert(month);
                $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');

            } else if ( month >= 4 && month <= 7 ) {
                $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
            } else {
                $('#semester').find('option[value="'+1+'"]').attr('disabled', 'disabled');
                $('#semester').find('option[value="'+2+'"]').attr('disabled', 'disabled');
                $('#semester').find('option[value="'+3+'"]').attr('disabled', 'disabled');
            }
        } else {
            $('#semester').find('option[value="'+1+'"]').removeAttr('disabled');
            $('#semester').find('option[value="'+2+'"]').removeAttr('disabled');
            $('#semester').find('option[value="'+3+'"]').removeAttr('disabled');
        }

    });

    //verify

    $('#btn-verify-prefious').on('click', function () {
        $('#program-details-list').addClass('active');
        $('#program-details-list').removeClass('disabled');
        $('#program-details-tab').addClass('active show');
        $('#verify-details-list').removeClass('active');
        $('#verify-details-tab').removeClass('active show');
    });

    $('#btn-verify-next').on('click', function () {

    });
    $('#btn-verify-next').on('click', function () {
        var error_ssc_roll = '';
        var error_ssc_reg = '';
        var error_ssc_year = '';
        var error_ssc_board = '';

        var error_hsc_roll = '';
        var error_hsc_reg = '';
        var error_hsc_year = '';
        var error_hsc_board = '';

        if ( $.trim($('#ssc_roll').val()) == '' ) {
            error_program = 'SSC Roll is Required';
            $('#error-ssc').text(error_program);
        } else {
            if (!numberRegex.test(program) ){
                error_ssc_roll = 'Program must be a number';
                $('#error-program').text(error_program);
            }else {
                error_program = '';
                $('#error-program').text(error_program);
            }
        }

    });

});
