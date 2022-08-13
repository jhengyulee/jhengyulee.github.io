<style>
.box {
  width: 50px;
  overflow: hidden;
  
}

.text {
  white-space: nowrap;
}

.fadingEffect {
  width:100%;
  animation: showHide 5s ease-in alternate infinite;
}


@keyframes showHide {
    0% {width:100%}
    40% {width:0%}
    60% {width:0%;}
    100% {width:100%;}
}

</style>

<div class="container row" style="height:80vh">

    <div class="textarea" style="width:48%">

    
        <div  style="margin-top:300px;font-size:2.5rem">
            
            <div class="text">Warm Welcome!&nbsp;I am James</div>
           
        </div>
        <div class="box fadingEffect" style="font-size:2rem">
            
            <div class="text">Desired to be a web developer</div>
           
        </div>


        
    
    </div>
    <div style="width:48%; padding-left:10vh;margin-top:10vh">
        <img src="./img/me01.jpg" style="border-radius:50%;margin:5px auto;width:400px;height:400px">
    </div>

   
</div>