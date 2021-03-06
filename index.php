
<?php include 'includes/header.php';?>
<div class="row">
  <div class="large-12 column">
    <h3>Tule valima</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed iaculis tellus. Integer non luctus lectus, in faucibus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum egestas mi orci, nec molestie justo interdum rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget leo volutpat, ullamcorper arcu vitae, pretium odio. Proin condimentum tellus ligula, at euismod tellus commodo ac.</p>
  </div>
</div>
<div class="row">
    <?php if(logged_in()): ?>
      <div class="small-12 medium-6 column">
       <a href="election.php" class="button radius">ANNA HÄÄL</a>
      </div>
      <div class="small-12 medium-6 column">
        <a href="setcandidate.php" class="button radius">ESITA KANDIDATUUR</a>
      </div>
    <?php else: ?>
      <div class="small-12 medium-6 column">
        <a id="election.php" class="button radius next modal_trigger" href="#modal">ANNA HÄÄL</a>
      </div>
      <div class="small-12 medium-6 column">
        <a id="setcandidate.php" class="button radius next modal_trigger" href="#modal">ESITA KANDIDATUUR</a>
      </div>
    <?php endif;?>
</div>
  <div class="row">
    <div class="large-12 column">
      <h3>Hetke tulemused</h3>
      <p>Curabitur ut cursus nisl. Cras nec dignissim lorem. Curabitur auctor, leo eget pharetra placerat, velit mi tristique diam, vitae aliquam arcu orci nec odio. Mauris blandit dictum condimentum. Proin a arcu viverra, lacinia odio a, dignissim tortor. Fusce vel porttitor ipsum. Etiam quis diam nec orci sollicitudin scelerisque eu porttitor libero.</p>
      <div id="content"></div>
      
    </div>  
  </div>
<?php include 'includes/footer.php';?>
