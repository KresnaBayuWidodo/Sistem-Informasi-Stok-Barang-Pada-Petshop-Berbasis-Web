$(document).on("click", ".send_form", function () {
    var input_blanter = document.getElementById("wa_email");
    var walink = "https://web.whatsapp.com/send",
    phone = "6285815818103",
    walink2 = "Pesanan",
    text_yes = "Terkirim.",
    text_no = "Isi semua sebelum mengirim.";

    if ("" != input_blanter.value) {
        var input_select1 = $("#wa_select :selected").text(),
        input_name1 = $("#wa_name").val(),
        input_email1 = $("#wa_email").val(),
        input_number1 = $("#wa_number").val(),
        input_amount = $("#order_amount").val(),
        input_textarea1 = $("#wa_textarea").val();

        var blanter_whatsapp =
        walink +
        "?phone=" +
        phone +
        "&text=" +
        walink2 +
        "*Id Barang* : " +
        input_name1 +
        "%0A" +
        "*Jumlah Pesanan* : " +
        input_amount +
        "%0A" +
        "*Email* : " +
        input_email1 +
        "%0A" +
        "*Nomor Telp/Wa* : " +
        input_number1 +
        "%0A" +
        "*Deskripsi* : " +
        input_textarea1 +
        "%0A";

        window.open(blanter_whatsapp, "_blank");
        document.getElementById("text-info").innerHTML =
        '<span class="yes">' + text_yes + "</span>";
    } else {
            document.getElementById("text-info").innerHTML =
            '<span class="no">' + text_no + "</span>";
        }
});

