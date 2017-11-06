$('input[type="submit"]').on('click', function(e){
  // var status = document.getElementById("status").value;
  // $("news_block").append("Some appended text.yyyyyyyy");
  e.preventDefault();
  // var div = $();
  var status = $('#status').val();
  $("<li class='news_block news_first'><div class='news_left'><img src='images/daniel.jpg' class='prof_pic'></div><div class='news_right'>Daniel is feeling <span class='text_gold'>" + status + ".</span> <br><span class='like_comment'>LIKE | COMMENT</span></div></li>").insertAfter('.news_feed_title');
  $('#status').val('');
});
