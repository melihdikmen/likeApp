$(document).ready(function () {

  $(".post_lists").on("click",".likeBtn",function () {
    var data_id= $(this).attr("data-id");

    $.post("http://localhost/likeApp/oyla",
    {post_id:data_id,vote_status:1},
    function (resp) {
          $(".post_lists").html(resp);
    })

  })


  $(".post_lists").on("click",".dislikeBtn",function () {
    var data_id= $(this).attr("data-id");
    $.post("http://localhost/likeApp/oyla",
    {post_id:data_id,vote_status:-1},
    function (resp) {
      $(".post_lists").html(resp);

    })
  })

})
