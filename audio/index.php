    <title>audio | one network</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <link rel="stylesheet" href="css/supersized.core.css" type="text/css" media="screen" />
    <script src="./jquery/2.1.4/jquery.min.js"></script>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <div class="col-md-4">
        <div class="dsp" id="audio1"></div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){   
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    });
    </script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "./sdk/fb/sdk.js#xfbml=1&version=v2.4";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="js/DSSinglePlayer.js" ></script>
    <script type="text/javascript">
        // Usage example:
        function geTplayer( audios, titles, artists, artworks, urltrack, download ){

            $(audios).MusicPlayer({
                title: titles,
                artist: artists,
                artwork: artworks,
                track_URL: urltrack,
                amazon_music: "",
                apple_music: "",
                downloadable: download,
                blur: '1'
            });

            return null;
        }

        geTplayer( '#audio1', 'Enze za utoto', 'Songa Ft Ben Pol', 'img/audio.jpg', 'img/audio.mp3', 'yes' );
    </script>