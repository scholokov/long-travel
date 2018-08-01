<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Long-travel</title>
        <link rel="stylesheet" href="css\main.css">
        <link rel='stylesheet prefetch' href='plugins/PhotoSwipe/photoswipe.min.css'>
        <link rel='stylesheet prefetch' href='plugins/PhotoSwipe/default-skin.min.css'>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
            <!-- <script src="js\menu.js" type="text/javascript"></script> -->
            <?php include 'menu.html' ?>
        </nav>
        <main>
            <section id="blog">
                <?php
                    $article_name = $_GET["article"] ; 
                    // echo $article_name ;
                    if ( $article_name != '')
                    {
                        $full_file_name = "Travels/" . $article_name . "/article.html" ;
                        //echo $full_file_name ;
                        if ( file_exists( $full_file_name ))
                        {
                            $x = readfile( $full_file_name ) ;
//                            echo $x ;
//                            $article_file = fopen( $full_file_name, "r");
//                            //echo $article_file ;
//                            echo fread( $article_file, filesize( $full_file_name ) );
//                            fclose( $article_file );
                            
                            // blog is here !!!
                        }
                    }
                ?>

                <?php
                    $folders = array_slice(scandir('Travels/'), 2);
                    rsort($folders);
                    foreach($folders as $folder) {
                        if ( file_exists(  'Travels/' . $folder . '/article header.html' ))
                            include 'Travels/' . $folder . '/article header.html' ;
                    }
                ?>



            </section>
            
            <aside>

            </aside>
        </main>
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