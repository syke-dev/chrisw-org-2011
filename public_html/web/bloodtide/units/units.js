var currently_playing;

function changevideo(id, url, img)
{
  var player = document.getElementById('jwplayer');
  player.sendEvent("LOAD",{'file': url, 'image': img});
  
  player.sendEvent("PLAY");
  
  updateicon(id, url, img);
}

function updateicon(id, url, img)
{
  if (currently_playing)
  {
    $(currently_playing).css('border-style', 'none');
    $(currently_playing).css({ opacity: 1.0 });
  }
  
  currently_playing = id;
  
  $(id).css('border-style', 'ridge');
  $(id).css({ opacity: 0.5 });
}