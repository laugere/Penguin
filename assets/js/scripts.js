function openViewModal(card, bookId) {
    $(card).find('.card-body').addClass("card-loading");
    $(card).find('.card-img-top').addClass("card-loading");
    $(card).find('.loading').addClass("active");
    getBookInfos(card, bookId);
}

function openReadModal() {
    $("#modal-book-reader").modal('toggle');
}

function closeModal(id) {
    $("#" + id).modal('toggle');
}

function getBookInfos(card, bookId) {
    $.ajax({
        url: '/book/' + bookId,
        contentType: "application/json",
        dataType: 'json',
        success: function (result) {
            $("#modal-book-content-title").html(result.title);
            $("#modal-book-content-author").html(result.author.name + ' ' + result.author.surname);
            $("#modal-book-content-synopsis").html(result.synopsis);
            $("#modal-book-content-cover").css("background-image", "url('ftp/cover/" + result.cover + "')");
            $("#modal-book-viewer").modal('toggle');

            $("#modal-book-reader").find('.modal-body').html('');
            chapters = new Map(Object.entries(result.chapters));
            chapters.forEach(function (chapter) {
                $("#modal-book-reader").find('.modal-body').append(
                    "<h1>Chapitre " + chapter.order + " - " + chapter.title + "</h1>" +
                    "<p>" + chapter.content + "</p>"
                )
            });

            $(card).find('.card-body').removeClass("card-loading");
            $(card).find('.card-img-top').removeClass("card-loading");
            $(card).find('.loading').removeClass("active");
        }
    })
}