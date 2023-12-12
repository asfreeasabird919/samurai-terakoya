$(function(){
  $(window).on({
    'scroll': () => {
      console.log('scrollイベントが発生しました');
    },
  });
});
$(window).on({
  'load': () => {
    console.log('loadイベントが発生しました');
  },
});