function boutique_show_widget($atts) {
    extract(shortcode_atts(array(
        'id'    => '0',
        'adblock'  => 'Turn off your ad blocker to view content',
        'enableJs' => 'Turn on your JavaScript to view content'
    ), $atts));
    $out = '<div class="boutique-widget" data-widget-id="'.$id.'">
                <script type="text/javascript" language="javascript">
                    !function(d,s,id){
                        var e, p = /^http:/.test(d.location) ? \'http\' : \'https\';
                        if(!d.getElementById(id)) {
                            e     = d.createElement(s);
                            e.id  = id;
                            e.src = p + \'://widgets.rewardstyle.com/js/boutique.js\';
                            d.body.appendChild(e);
                        }
                        if(typeof window.__boutique === \'object\') if(d.readyState === \'complete\') {
                            window.__boutique.init();
                        }
                    }(document, \'script\', \'boutique-script\');
                </script>
                <div class="rs-adblock">
                    <img src="//assets.rewardstyle.com/production/37e54706b3368bad0a11e89c8a01f650d80fc581/images/search/350.gif" onerror="this.parentNode.innerHTML=\''.$enableJs.'\'" />
                    <noscript>'.$adblock.'</noscript>
                </div>
            </div>';
    return $out;
}
add_shortcode('show_boutique_widget', 'boutique_show_widget');
