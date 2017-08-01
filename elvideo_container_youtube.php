<div id="player"></div>

<script>

    //    Documentation: https://developers.google.com/youtube/iframe_api_reference
    var tag = document.createElement('script');
    var pageRefreshMinutes = 4;

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '88%',
            width: '100%',
            videoId: 'ZDwotNLyz10',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
            console.log('playing');
        }
        if (event.data == 2){
            console.log("espero ", pageRefreshMinutes, " minutos y refresco");
            window.setTimeout(function(){
                document.location.reload(true);
            }, pageRefreshMinutes*1000*60);
        }
    }

    window.setTimeout(function(){
        if(player.getPlayerState() != 1){
            document.location.reload(true);
        } else {
            console.log('El video se está reproduciendo, no se recarga el site');
        }
    }, pageRefreshMinutes*1000*60);

</script>


