String.prototype.slugify = function (sep = '-') {

    str = this;

    str = str.replace(/^\s+|\s+$/g, ""); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "åàáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaaaeeeeiiiioooouuuunc------";

    for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
    }

    str = str
        .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
        .replace(/\s+/g, sep) // collapse whitespace and replace by -
        .replace(/-+/g, sep) // collapse dashes
        .replace(/^-+/, "") // trim - from start of text
        .replace(/-+$/, ""); // trim - from end of text

    return str;
}

$(document).ready(function () {

    let name = $("#name"),
        username = $('#username');

    username.focus(function () {

        if ($(this).val().length == 0) {
            let gen_username = String(name.val()).slugify('_');
            $(this).val(gen_username).select();
        }

    });

});