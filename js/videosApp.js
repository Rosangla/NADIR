window.onload = function(){
  var mivideo1 = document.getElementById('video-traza');
  var mivideo2 = document.getElementById('video-smart');
  var mivideo3 = document.getElementById('video-catch');

$("#app1").hover(function(){
  if (mivideo1.paused){
    mivideo1.play();
  } else {
    mivideo1.pause();
  }
});

$("#app2").hover(function(){
  if (mivideo2.paused){
    mivideo2.play();
  } else {
    mivideo2.pause();
  }
}); 

$("#app3").hover(function(){
  if (mivideo3.paused){
    mivideo3.play();
  } else {
    mivideo3.pause();
  }
}); 
}