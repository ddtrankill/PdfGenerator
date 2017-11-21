$(document).on("click", ".add-area, .add-field", function () {
    if ($(this).hasClass("add-field")) {
        var input = '<div class="form-group">' +
            '<label>Lable for input: </label> ' +
            ' <input type="text" class="form-control-plaintext" placeholder="text..." name="inputs-field[]">' +
            '<input class="form-control" type="text" name="inputs[]">' +
            '</div>';
        $("form").append(input);
    } else if ($(this).hasClass("add-area")) {
        var input = '<div class="form-group">' +
            '<label>Lable for area: </label> ' +
            ' <input type="text" class="form-control-plaintext" placeholder="text..." name="inputs-field[]">' +
            '<textarea class="form-control" name="inputs[]"></textarea></div>';
        $("form").append(input);
    }
});