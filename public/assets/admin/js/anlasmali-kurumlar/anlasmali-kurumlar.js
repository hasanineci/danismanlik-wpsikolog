$(".btn-anlasmali-kurumlar-oku").click(function() {
    var button = $(this);
    var anlasmali_kurumlar_id = $(this).data('anlasmali-kurumlar-id');
    button.prop('disabled', true);
    var buttonText = button.html();
    button.html("<span class='spinner-border spinner-border-sm text-white'></span>");


    // post işlemi
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.post('/admin/anlasmali-kurumlar/oku', { anlasmali_kurumlar_id: anlasmali_kurumlar_id }, function(response) {
        $("#exampleModalCenter").modal('show');

        $(".modal_adi").html(response.kurum_adi);
        $(".modal_yetkili_adi").html(response.yetkili_adi);
        $("modal_telefon").html(response.telefon);
        $(".modal_birim").html(response.birim);
        $(".modal_bulundugu_yer").html(response.bulundugu_yer);
        $(".modal_durum").html(response.durum);
        $(".modal_created_at").html(response.created_at);

        button.prop('disabled', false);
        button.html(buttonText);
    });
})

// silme kısmı
$(".btn-mail-sil").click(function() {
    var mail_id = $(this).data('anlasmali-kurumlar-id');
    alert(anlasmali_kurumlar_id);
})