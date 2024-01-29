{{-- Modal --}}
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px; padding: 16px 16px 0px 0px"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body" style="padding-top: 0px">
                <div class="d-flex justify-content-center">
                    <img width="100px" style="margin-bottom:10px" src="{{ asset('img/success_modal.png') }}">
                </div>
                <h2 style="text-align: center">Obrigado!</h2>
                <p style="text-align: center">{{ session('success') }}</p>
            </div>
            <div class="modal-footer">
                 <button type="button" style="width:100% !important" class="newest green-btn1" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
