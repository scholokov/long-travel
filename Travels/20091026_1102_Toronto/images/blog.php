<!DOCTYPE html>
    <Head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\main.css">
        <link rel='stylesheet prefetch' href='plugins/PhotoSwipe/photoswipe.min.css'>
        <link rel='stylesheet prefetch' href='plugins/PhotoSwipe/default-skin.min.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <title>Long-travel</title>

        <script>
            var urlParams = new URLSearchParams( window.location.search );
            var article_name = urlParams.get( 'article' ) ? urlParams.get( 'article' ) : '';

            var image_resolution            = '4272x2848';
            var image_resolution_vertical   = '2848x4272';
            var image_meizu_m2              = '4192x3104';
            var image_canon_square          = '3888x3888';
            var image_canon_NOT_square      = '5184x3888';
            var image_panorama              = '13440x2204';
            var image_ixus_40               = '2272x1704';
            var image_ixus_40_vertical      = '1704x2272';
            var video_w                     = '425px';
            var video_h                     = '300px';
        </script>

        <script type="text/javascript">
            function addFoto( name, local_image_resolution = image_resolution, image_description = '' ) {
                var preffix_small_image = '_small'  ;
                var preffix_big_image   = ''    ;
                document.write( '<figure itemprop="associatedMedia" itemscope itemtype="ImageObject">' );
                    document.write( '<a href="Travels/' + article_name + '/images/' + name + preffix_big_image + '.jpg" itemprop="contentUrl" data-size="' + local_image_resolution + '">' );
                        document.write( '<img src="Travels/' + article_name + '/images/' + name + preffix_small_image + '.jpg" itemprop="thumbnail" alt="' + image_description + '" />' );
                    document.write( '</a>' ) ;
                    document.write( '<figcaption itemprop="caption description">' + image_description + '</figcaption>' ) ;
                document.write( '</figure>' );
            }

            function addVideo( link, widht, height ) {
                document.write('<div class="iframe-class-video">');
                        document.write('<iframe width="' + widht + '" height="' + height + '" src="' + link + '"');
                        document.write('frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
                document.write('</div>');
            }

            function addMap( link, widht, height ) {
                document.write('<div align="middle" class="iframe-class-map">');
                        document.write('<iframe src="' + link + '" width="' + widht + '" height="' + height + '" frameborder="0" style="border:0" allowfullscreen></iframe>');
                document.write('</div>');
            }
        </script>    
    </head>
    <body>
        <nav name="menu-main" id="menu-main">
        <!-- <nav name="menu-main" id="menu-main">
            <script src="js\menu.js" type="text/javascript"></script> -->
            <?php include 'menu.html' ?>
        </nav>

        <article>
            <?php
                $article_name = $_GET["article"] ; 
                $topic_name = $_GET["topic"] ; 
                

                if ( $topic_name ){
                    include 'Travels/' . $article_name . '/' . $topic_name . '.html'        ;
                }
                else{
                    include 'Travels/' . $article_name . '/article.php'        ;
                }

            ?>
        </article>

        <!-- Root element of PhotoSwipe. Must  have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe. 
                 It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>

                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">

                        <div class="pswp__top-bar">

                            <!--  Controls are self-explanatory. Order can be changed. -->

                            <div class="pswp__counter"></div>

                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip">
                            </div> 
                        </div>

                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>

                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>

                        <div class="pswp__caption">
                            <div class="pswp__caption__center">
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <script src='plugins\PhotoSwipe\photoswipe.min.js'></script>
        <script src='plugins\PhotoSwipe\photoswipe-ui-default.min.js'></script>
        <script src="plugins\PhotoSwipe\index.js"></script>
    </body>

    <footer>
    </footer>
</html>