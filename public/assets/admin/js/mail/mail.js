$(".btn-mail-oku").click(function() {
    var button = $(this);
    var mail_id = $(this).data('mail-id');
    button.prop('disabled', true);
    var buttonText = button.html();
    button.html("<span class='spinner-border spinner-border-sm text-white'></span>");


    // post işlemi
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('/admin/gelen-mailler/oku', { mail_id: mail_id }, function(response) {
        $("#exampleModalCenter").modal('show');

        $(".modal_adi").html(response.adi);
        $(".modal_telefon").html(response.telefon);
        $(".modal_email").html(response.email);
        $(".modal_konu").html(response.konu);
        $(".modal_mesaj").html(response.mesaj);
        $(".modal_created_at").html(response.created_at);

        button.prop('disabled', false);
        button.html(buttonText);
    });
})

$(".btn-mail-sil").click(function() {
    var mail_id = $(this).data('mail-id');
    alert(mail_id);
})