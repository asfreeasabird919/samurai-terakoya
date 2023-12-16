$(function () {

  // ボタンがクリックされたら
  $('.btn').on('click', function(){
    // テキストボックスに「クリックされました！」と入力する
    $('.text-box').val('クリックしました！');
    console.log('クリックしました！');
  });

});