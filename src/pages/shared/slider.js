function init_slider(id)
{
  $(id).slider();
  $(id).slider('value', 50);

  images = $(id).prev('.images');
  
  images.css('position', 'relative');
  
  width = parseInt(images.css('width'), 10);
  height = parseInt(images.css('height'), 10);
  middle = width * 0.5;

  before = images.children('.before');
  after = images.children('.after');

  before.css('width', width );
  before.css('height', height);
  before.css('position', 'absolute');
  before.css('top', '0');
  before.css('right', '0');
  before.css('clip', 'rect(0px ' + middle + 'px ' + height + 'px 0px)');
  
  after.css('width', width );
  after.css('height', height);
  after.css('position', 'absolute');
  after.css('top', '0');
  after.css('right', '0');
  after.css('clip', 'rect(0px ' + width + 'px ' + height + 'px ' + middle + 'px)');
  
  $(id).slider(
  {
    slide: function(event, ui) 
    {
      images = $(this).prev('.images');
    
      width = parseInt(images.css('width'), 10);
      height = parseInt(images.css('height'), 10);

      middle = width * (ui.value / 100);

      before = images.children('.before');
      after = images.children('.after');
    
      before.css('clip', 'rect(0px ' + middle + 'px ' + height + 'px 0px)');
      after.css('clip', 'rect(0px ' + width + 'px ' + height + 'px ' + middle + 'px)');
    }
  });
}