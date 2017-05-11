<script src="./jquery-3.2.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/mediaelement/latest/mediaelement-and-player.min.js"></script>
<link href="https://cdn.jsdelivr.net/mediaelement/latest/mediaelementplayer.css" rel="stylesheet">

<div style="width: 100%; max-width: 640px; margin: 10px auto;">
    <video id="video_pl" class="mejs__player" width="640" height="360" style="width: 100%; height: 100%;">
        <source src="cookies.mp4" />
    </video>
</div>

<script type="text/javascript">
/*
	MediaElementPlayer.prototype.buildloop = function(player, controls, layers, media) {
	    var
	        // create the loop button
	        loop =
	        $('<div class="mejs-button mejs-loop-button ' + ((player.options.loop) ? 'mejs-loop-on' : 'mejs-loop-off') + '">' +
	            '<span></span>' +
	        '</div>')
	        // append it to the toolbar
	        .appendTo(controls)
	        // add a click toggle event
	        .click(function() {
	            player.options.loop = !player.options.loop;
	            if (player.options.loop) {
	                loop.removeClass('mejs-loop-off').addClass('mejs-loop-on');
	            } else {
	                loop.removeClass('mejs-loop-on').addClass('mejs-loop-off');
	            }
	        });
	}

	$('video,audio').mediaelementplayer({
	    features: ['loop','playpause','current','progress','duration','fullscreen'],
	    alwaysShowControls: true,
	});
*/
</script>