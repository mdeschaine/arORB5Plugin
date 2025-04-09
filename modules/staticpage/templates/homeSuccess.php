<?php decorate_with('layout'); ?>

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

/* <div class="page p-3">
  <?php echo render_value_html($sf_data->getRaw('content')); ?>
</div> */

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
        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/plugins/arORB5Plugin/images/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/plugins/arORB5Plugin/images/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/plugins/arORB5Plugin/images/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
