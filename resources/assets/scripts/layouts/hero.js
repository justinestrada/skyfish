
export const Hero = {
  onLoad: function() {
    this.heroVideo()
  },
  heroVideo: function() {
    if (!$('#hero_video').length) {
      return
    }
    $('#hero_video').fadeIn(5000)
  },
}
