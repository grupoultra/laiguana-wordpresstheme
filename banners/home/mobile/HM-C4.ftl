<div id="HM-C4" class="banner margin-top-10 banner-c banner300x250 hidden-desktop">
    <#if enableHMC4 && enableBanners>
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script>
        googletag.cmd.push(function() {
            googletag.defineSlot('/11322282/Laiguana.tv//300x250', [300, 250], 'div-gpt-ad-1489765546241-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
    <!-- /11322282/Laiguana.tv//300x250 -->
    <div id='div-gpt-ad-1489765546241-0' style='height:250px; width:300px;'>
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1489765546241-0'); });
        </script>
    </div>
    <#else>
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/banners/n300x250.png" width="300px" height="250px" />
    </#if> 
</div>
