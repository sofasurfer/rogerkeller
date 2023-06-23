<a id="<?php echo str_replace("/", "-", $subpage->id())  ?>" class="anchor"></a>
<div class="container anchor">
  <div class="row">
    <div class="col-md-12">
      <h1><?= $subpage->title()->html() ?></h1>
      <div class="intro text">
        <?= $subpage->intro()->kirbytext() ?>
      </div>
    </div>
  </div>
</div>
<?php 
if ($subpage->videolink() != ""){
  snippet('video',['videourl' => $subpage->videolink()]);
}else if ($subpage->showslider() == '1'){
  snippet('gallery',['galleypage' => $subpage]);
}
?>         
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <p><?= $subpage->text()->kirbytext() ?></p>
    </div>
  </div>
</div> 