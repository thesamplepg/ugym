jQuery(document).ready(function ($) {
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

    modalHandlers.each(function (index) {
        const ref = $(this).attr('data-modal-ref');
        $(this).on('click', function (e) {
            e.preventDefault();
            openModal(ref);
        });
    });
});
