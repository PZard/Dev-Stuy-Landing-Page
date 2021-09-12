$(document).ready(() => {
    $('.form').submit((event) => {
  
        event.preventDefault();
  
        var name = $("#name").val();
        var email = $("#email").val();

        console.log(name);
        console.log(email);
  
        $.post("src/getLead.php", {
            name: name,
            email: email
        }).done(() => {
            $('.popup-background').css('display', 'block');
        });
    });
    $("#popup-button").click(() => {
        $('.popup-background').css('display', 'none');
    })
});
