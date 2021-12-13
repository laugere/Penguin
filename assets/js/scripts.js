function openModal(card, bookId) {
    $("#modal-book-viewer").modal('toggle');
    card.addClass("card-loading");
    getBookInfos(bookId);
}

function getBookInfos(bookId) {
    $.ajax({
        url: '/book/' + bookId,
        contentType: "application/json",
        dataType: 'json',
        success: function (result) {
            $("#modal-book-content-title").html(result.title);
            $("#modal-book-content-author").html(result.author.name + ' ' + result.author.surname);
            $("#modal-book-content-synopsis").html(result.synopsis);
            $("#modal-book-content-cover").css("background-image", "url('ftp/cover/" + result.cover + "')")
        }
    })
}