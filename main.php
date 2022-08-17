<style>

.ml9 {
  position: relative;
  font-weight: 200;
  font-size: 4em;
}

.ml9 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml9 .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1em;
}

</style>

<div class="container row" style="height:80vh;margin-left:10px" id="main">

<h1 class="ml9" style="margin-top:200px;width:48%">
  <span class="text-wrapper">
    <span class="letters">Warm welcome! &nbsp; I am James.</span>
  </span>
</h1>


    <div style="width:48%; padding-left:10vh;margin-top:10vh" class="me">
        <img class="shadow-lg" src="./img/me02.png" style="border-radius:50%;margin:5px auto;width:400px;height:400px">
    </div>

   
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script>

var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>