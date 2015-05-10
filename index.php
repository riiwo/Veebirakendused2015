
<?php include 'includes/header.php';?>
<div class="container">
  <div class="contentslider">
    <h3>Tule valima</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed iaculis tellus. Integer non luctus lectus, in faucibus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum egestas mi orci, nec molestie justo interdum rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget leo volutpat, ullamcorper arcu vitae, pretium odio. Proin condimentum tellus ligula, at euismod tellus commodo ac.</p>
    <?php if(logged_in()): ?>
        <div class="custombtn1 left25"><a href="election.php">ANNA HÄÄL</a></div>
        <div class="custombtn1 right25"><a href="setcandidate.php">ESITA KANDIDATUUR</a></div>
    <?php else: ?>
        <div class="custombtn1 left25"><a id="election.php" class="next modal_trigger" href="#modal">ANNA HÄÄL</a></div>
        <div class="custombtn1 right25"><a id="setcandidate.php" class="next modal_trigger" href="#modal">ESITA KANDIDATUUR</a></div>
    <?php endif;?>
  </div>
  <div class="result">
    <div class="result-text">
      <h3>Hetke tulemused</h3>
      <p>Curabitur ut cursus nisl. Cras nec dignissim lorem. Curabitur auctor, leo eget pharetra placerat, velit mi tristique diam, vitae aliquam arcu orci nec odio. Mauris blandit dictum condimentum. Proin a arcu viverra, lacinia odio a, dignissim tortor. Fusce vel porttitor ipsum. Etiam quis diam nec orci sollicitudin scelerisque eu porttitor libero.</p>
      <div id="content"></div>
      
    </div>  
  </div>
</div>
<?php include 'includes/footer.php';?>
