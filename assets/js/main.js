jQuery(document).ready(function ($) {
    new WOW().init();
    const modalHandlers = $('.modal-handler');

    const openModal = (ref) => {
        const modal = $(ref);
        modal.removeClass('hidden');
        modal.on('click', () => modal.addClass('hidden'));
        modal.find('.modal_window').on('click', (e) => e.stopPropagation());
        modal.find('.modal_close-btn').on('click', function () {
            modal.addClass('hidden');
        });
    };

    const openModalWithInputData = (ref, { key, value }) => {
        $(`#input-data-${key}`).val(value);

        openModal(ref);
    };

    modalHandlers.each(function () {
        const ref = $(this).attr('data-modal-ref');
        const key = $(this).attr('data-input-key');
        const value = $(this).attr('data-input-value');

        $(this).on('click', function (e) {
            e.preventDefault();
            if (key && value) {
                return openModalWithInputData(ref, { key, value });
            }
            openModal(ref);
        });
    });

    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('submission')) {
        const popUp = $('#form-success-popup');
        popUp.removeClass('hidden');

        urlParams.delete('submission');
        const newUrl = window.location.pathname + '?' + urlParams.toString();
        window.history.replaceState({}, '', newUrl);

        setTimeout(() => {
            popUp.addClass('animate__fadeOutDown');
        }, 5000);
    }
});
