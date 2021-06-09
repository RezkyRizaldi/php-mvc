$(function () {
  $(".show_modal_add").on("click", function () {
    $("#formModalLabel").html("Add Student Data");
    $(".selected").removeClass("d-none");
  });
  $(".show_modal_edit").on("click", function () {
    const id = $(this).data("id");

    $(".modal-body form").attr("action", "http://localhost/php-mvc/public/students/edit");
    $("#formModalLabel").html("Edit Student Data");
    $(".selected").addClass("d-none");

    $.ajax({
      url: "http://localhost/php-mvc/public/students/getStudentEditable",
      data: { id: id },
      method: "POST",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#name").val(data.name);
        $("#nis").val(data.nis);
        $("#email").val(data.email);
        $("#major").val(data.major);
      },
    });
  });
});
