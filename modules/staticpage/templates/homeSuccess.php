<?php decorate_with('layout'); ?>

<?php slot('title'); ?>
  <h1><?php echo render_title($resource->getTitle(['cultureFallback' => true])); ?></h1>
<?php end_slot(); ?>

<?php if (QubitAcl::check($resource, 'update')) { ?>
  <?php slot('after-content'); ?>
    <section class="actions mb-3">
      <?php echo link_to(__('Edit'), [$resource, 'module' => 'staticpage', 'action' => 'edit'], ['class' => 'btn atom-btn-outline-light']); ?>
    </section>
  <?php end_slot(); ?>
<?php } ?>
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

<div class="row" style="max-height: 500px;">
  <div class="col-sm-8">
    <div class="card">
        <img src="/plugins/arORB5Plugin/images/new-box.jpg" class="card-img" alt="...">
        <div class="card-img-overlay text-center">
        <a href="/informationobject/browse?sort=lastUpdated&view=card&onlyMedia=1&topLod=0" class="btn btn-primary button-lg">See What's New</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Visit The Library</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <h5 class="card-header">Featured Projects</h5>
    <div class="card mb-4" style="max-height: 500px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="/plugins/arORB5Plugin/images/OrgLot146_b06_SalemCapital_4.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body text-wrap">
            <h4 class="card-title">Digitizing the Oregon Story: Creating Access to Significant Legal and Political Oral Histories</h4>
            <p class="card-text">Listen to 212 Oral History interviews of significant legal and political figures, originally created on analog audio and video tapes and previously available only onsite in the OHS Research Library.</p>
            <p class="card-text"><small class="text-muted">Funded by the Institute of Museum and Library Services</small></p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
        </div>
    </div>
    </div>
    <div class="card mb-3" style="max-height: 500px;">
    <div class="row g-0">
        <div class="col-md-8">
        <div class="card-body text-wrap">
            <h4 class="card-title">Reuniting Finley and Bohlman</h4>
            <p class="card-text">A partnership between the Oregon Historical Society Research Library and the Oregon State University Libraries Special Collections and Archives Research Center to digitize the Finley and Bohlman photograph and manuscript collections held by our libraries. Now reunited online, the materials represent over fifty years (1899-1946) of work to document and protect the diversity of bird life in Oregon.</p>
            <p class="card-text"><small class="text-muted">Funded by the Institute of Museum and Library Services</small></p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
        </div>
        <div class="col-md-4">
        <img src="/plugins/arORB5Plugin/images/slide2.jpg" class="img-fluid rounded-end" alt="...">
        </div>
    </div>
    </div>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide1.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>Al Monner News Negatives</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>Reuniting Finley and Bohlman</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide3.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>Kiser Photo Co. Photographs</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide4.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>Oregon Journal Photographic Negatives</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide5.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>Portland General Electric Photograph Collection</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="10000">
      <img src="/plugins/arORB5Plugin/images/slide6.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-sm-block bg-dark">
        <h5>OHS Maps Collection</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark"></span>
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
