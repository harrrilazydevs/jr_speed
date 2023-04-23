$(document).ready(function () {

})


$('#btn_goto_home').click(function () {
    $('.page').hide()
    $('#div_home').show()
})

$('#btn_goto_shop').click(function () {
    $('.page').hide()
    $('#div_shop').show()
})

$('#btn_goto_contact').click(function () {
    $('.page').hide()
    $('#div_contact').show()
})

$('#btn_goto_faq').click(function () {
    $('.page').hide()
    $('#div_faq').show()
})

$('#submitBtn').click(function () {

    var user_data = {
        user: $('#user').val(),
        pass: $('#password').val(),
    }

    $.getJSON("src/database/func/admin/read_user_account.php", user_data, (data) => {

        if (data.length > 0) {
            if (data.position == 'administrator') {
                location.href = 'index.php';
                $('.pane').hide()
                $('#pane_controlpanel').show();
            } else {

                location.href = 'index.php';
                $('.pane').hide()
                $('#pane_controlpanel').show();

            }
        } else {
            console.log('LOGIN FAIL')
        }
    });
})

$('.btn_logout').click(function () {

    $.post("src/database/func/logout.php", (data) => {

        location.href = 'index.php'
    });
})