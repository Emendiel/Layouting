<div id="news-fil" class="span-16 last">
  <div id="news-header" class="span-16 last">
    <span>Les news</span> de la Mamba Nation
  </div>
  <?php
    for($i=0; $i<5; $i++) {
      ?>
      <div class="news-bloc span-16 last">
        <div class="news-bloc-img span-4">
          <img src="/images/news-img.jpeg" width="150" height="150" alt="Test Images News" title="Test Images News"/>
        </div>
        <div class="news-bloc-content span-9">
          <div class="news-bloc-title">Gooood morning la Nation !</div>
          <div class="news-bloc-date">02/12/2010</div>
          <div class="clear"></div>
          <div class="news-bloc-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non tellus enim, vel ullamcorper sem. Suspendisse elementum, 
            leo ac commodo tincidunt, orci quam semper risus, vehicula iaculis dolor diam mollis libero. 
            Curabitur eget orci id leo consequat faucibus auctor nec diam. Maecenas at mauris augue, sit amet mattis ligula. 
            Fusce metus metus, consequat vel dictum fermentum, porttitor non nibh. Donec libero arcu, venenatis nec venenatis et, 
            laoreet sit amet est. Sed euismod velit eu eros ultrices porta.
          </div>
        </div>
        <div class="news-bloc-more span-3 last">
          <div class="button-black">En savoir <span>+</span></div>
        </div>
      </div>
      <?php
    }
  ?>
</div>
