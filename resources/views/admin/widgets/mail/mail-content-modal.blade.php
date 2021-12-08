<div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    {{ ($mail->adi) }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        <b>Kimden:</b>
                        <span class="modal_adi"></span>
                    </li>
                    <li>
                        <b>Telefon:</b>
                        <span class="modal_telefon"></span>
                    </li>
                    <li>
                        <b>E-Posta: </b>
                        <span class="modal_email"></span>
                    </li>
                    <li>
                        <b>Konu:</b>
                        <span class="modal_konu"></span>
                    </li>
                    <li>
                        <b>Mesaj:</b>
                        <span class="modal_mesaj"></span>
                    </li>
                </ul>

                <p>Bu mesaj <b class="modal_created_at"></b> tarihinde gönderilmiştir.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-danger btn-mail-sil" data-mail-id="">Sil</button>
            </div>
        </div>
    </div>
</div>