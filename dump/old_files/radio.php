<?php

include"main.php";

pagetop("WuaX - Radio");
include"includes/subheader_radio.php";
pagemid();
?>


<script src="http://static.livestream.com/scripts/playerv2.js?channel=wuax&layout=playerEmbedDefault&backgroundColor=0xffffff&backgroundAlpha=1&backgroundGradientStrength=0&chromeColor=0x000000&headerBarGlossEnabled=true&controlBarGlossEnabled=true&chatInputGlossEnabled=false&uiWhite=true&uiAlpha=0.5&uiSelectedAlpha=1&dropShadowEnabled=true&dropShadowHorizontalDistance=10&dropShadowVerticalDistance=10&paddingLeft=10&paddingRight=10&paddingTop=10&paddingBottom=10&cornerRadius=3&backToDirectoryURL=null&bannerURL=null&bannerText=null&bannerWidth=320&bannerHeight=50&showViewers=true&embedEnabled=true&chatEnabled=true&onDemandEnabled=true&programGuideEnabled=false&fullScreenEnabled=true&reportAbuseEnabled=false&gridEnabled=false&initialIsOn=true&initialIsMute=false&initialVolume=10&contentId=null&initThumbUrl=null&playeraspectwidth=4&playeraspectheight=3&mogulusLogoEnabled=true&width=400&height=400&wmode=window" type="text/javascript"></script>

<?php
pagebot($settings['footer']);
?>