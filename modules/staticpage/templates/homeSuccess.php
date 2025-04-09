<?php decorate_with('layout_2col'); ?>

<?php slot('title'); ?>
  <h1><?php echo render_title($resource->getTitle(['cultureFallback' => true])); ?></h1>
<?php end_slot(); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID); ?>
  <?php if ($browseMenu->hasChildren()) { ?>
    <section class="card mb-3">
      <h2 class="h5 p-3 mb-0">
        <?php echo __('Browse by'); ?>
      </h2>
      <div class="list-group list-group-flush">
        <?php foreach ($browseMenu->getChildren() as $item) { ?>
          <a
            class="list-group-item list-group-item-action"
            href="<?php echo url_for($item->getPath(['getUrl' => true, 'resolveAlias' => true])); ?>">
            <?php echo esc_specialchars($item->getLabel(['cultureFallback' => true])); ?>
          </a>
        <?php } ?>
      </div>
    </section>
  <?php } ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<div class="page p-3">
  <?php echo render_value_html($sf_data->getRaw('content')); ?>
</div>

<?php if (QubitAcl::check($resource, 'update')) { ?>
  <?php slot('after-content'); ?>
    <section class="actions mb-3">
      <?php echo link_to(__('Edit'), [$resource, 'module' => 'staticpage', 'action' => 'edit'], ['class' => 'btn atom-btn-outline-light']); ?>
    </section>
  <?php end_slot(); ?>
<?php } ?>

<div class="container">
    <div id="homepage" class="row">

        <div class="mod-new" title="See what's new">
            <a class="mod-link" href="/informationobject/browse?sort=lastUpdated&view=card&onlyMedia=1&topLod=0">
                <div class="mod-img" style="background-image:url(/plugins/arORB5Plugin/images/new-box.jpg);"></div>
                <div class="mod mod-over-img">See What's New</div>
            </a>
        </div>
        <div class="span8" id="virtual-exhibit">
            <a href="/digitizing-the-oregon-story" title="Read more about the Digitizing the Oregon Story project.">
                <h3>
                    <?php echo __('Featured Project') ?>
                    <span class="title">Digitizing the Oregon Story: Creating Access to Significant Legal and Political Oral Histories</span>
                    <span class="small">Institute of Museum and Library Services</span>
                </h3>
                <div>&nbsp;</div>
            </a>
        </div>
        <div class="span4">
            <section id="cta">
                <h1 class="module__hed"><a href="https://ohs.org/research-and-library/" target="_blank">Visit Our Research Library</a></h1>
                <a class="more-link--large" href="https://ohs.org/research-and-library/" target="_blank">
                    <!--[if gte IE 9]><!--><svg viewBox='0 0 100 100' class='icon-chevron-right-large'>
                        <use xlink:href='#icon-chevron-right'></use>
                    </svg>
                    <!--<![endif]--></a>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div id="slideshow">
        <div class="slideshow-container">


            <div id="slide1" class="mySlides" title="Learn more about the Al Monner News Negatives.">
                <a href="/monner-project">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">Al Monner News Negatives</div>
                        <div class="small">Celebrating the end of World War II, downtown Portland</div>
                    </h3>
                </a>
            </div>
            <div id="slide2" class="mySlides" title="Read more about the Reuniting Finley and Bohlman Project.">
                <a href="/reuniting-finley-and-bohlman">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">Reuniting Finley and Bohlman</div>
                        <div class="small">A partnership between Oregon Historical Society and Oregon State University</div>
                    </h3>
                </a>
            </div>
            <div id="slide3" class="mySlides" title="Browse Kiser Photographs.">
                <a href="/us-ohy-org-lot-140">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">Kiser Photo Co. Photographs</div>
                        <div class="small">Bull Run and Mount Hood</div>
                    </h3>
                </a>
            </div>
            <div id="slide4" class="mySlides" title="Browse Oregon Journal Photographs.">
                <a href="/us-ohy-org-lot-1368">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">Oregon Journal Photographic Negatives</div>
                        <div class="small">Train at Union Station, Portland</div>
                    </h3>
                </a>
            </div>
            <div id="slide5" class="mySlides" title="Browse PGE Photographs.">
                <a href="/org-lot-151-portland-general-electric-photograph-collection">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">Portland General Electric Photograph Collection</div>
                        <div class="small">Oregon City, Station B</div>
                    </h3>
                </a>
            </div>
            <div id="slide6" class="mySlides" title="Browse OHS Maps.">
                <a href="/ohs-maps-collection">
                    <h3>
                        <?php echo __('Featured Collection') ?>
                        <div class="title">OHS Maps Collection</div>
                        <div class="small">Oregon Skyline Trail : Pacific Crest system, 1936</div>
                    </h3>
                </a>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div id="controls">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
        </div>



        <script language='javascript'>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }

        </script>
    </div>
</div>

<div class="container">
    <div id="partner-block" class="row">
        <div class="partner-sites">
            <h2 class="partner-sites__hed">Content Partners</h2>
            <div class="partner-sites__grid">
                <a class="partner-site" href="/gay-and-lesbian-archives-of-the-pacific-northwest-oral-histories">
                    <div class="partner-site__img" style="background-image:url(/plugins/arORB5Plugin/images/box1.jpg);"></div>
                    <div class="partner-site__text-holder">
                        <div class="partner-site__text">
                            <h1 class="partner-site__hed">Gay and Lesbian Archives<br>of the Pacific Northwest</h1>
                            <div class="partner-site--more-link">More Information <?php echo __('&#10095;') ?></div>
                        </div>
                    </div>
                </a>
                <a class="partner-site" href="/united-states-district-court-oral-history-project">
                    <div class="partner-site__img" style="background-image:url(/plugins/arORB5Plugin/images/box2.jpg);"></div>
                    <div class="partner-site__text-holder">
                        <div class="partner-site__text">
                            <h1 class="partner-site__hed">U.S. District Court of Oregon<br>Historical Society</h1>
                            <div class="partner-site--more-link">More Information <?php echo __('&#10095;') ?></div>
                        </div>
                    </div>
                </a>
                <a class="partner-site" href="/the-immigrant-story">
                    <div class="partner-site__img" style="background-image:url(/plugins/arORB5Plugin/images/box3.jpg);"></div>
                    <div class="partner-site__text-holder">
                        <div class="partner-site__text">
                            <h1 class="partner-site__hed">The Immigrant Story</h1>
                            <div class="partner-site--more-link">More Information <?php echo __('&#10095;') ?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
