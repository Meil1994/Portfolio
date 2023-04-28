<style>
  .content {
    display: none;
  }
</style>

<div class="lg1:p-40 lg1:pb-0 lg1:pt-5 pt-5 col-span-2 tracking-wider font-light text-slate-800 dark:text-slate-100">
    <h1 class='text-4xl '><span class="text-green-900 dark:text-green-400 text-2xl">02.</span> Experiences...</h1>
    <p class="mt-7">
      Though I currently don't have web developer-related work experience, 
      I've listed several relevant jobs and training that I think will help build my career as a web developer. 
      Not just in technical, but also in work values. 
    </p>
    <div class="mt-10 block sm:flex">
      <div class="border-l border-green-900 dark:border-green-400 w-40 h-40">
        <button class="text-start w-40 p-5 pt-4 pb-4 hover:bg-slate-300 focus:border-l focus:bg-slate-300 focus:border-green-900 focus:text-green-900 hover:text-green-900" onclick="showContent('KodegoContent', this)">KodeGo</button>
        <button class="text-start w-40 p-4 pt-4 pb-3 hover:bg-slate-300 focus:border-l focus:bg-slate-300 focus:border-green-900 focus:text-green-900 hover:text-green-900" onclick="showContent('ConcentrixContent', this)">Concentrix</button>
        <button class="text-start w-40 p-5 pt-4 pb-4 hover:bg-slate-300 focus:border-l focus:bg-slate-300 focus:border-green-900 focus:text-green-900 hover:text-green-900" onclick="showContent('SitelContent', this)">Sitel</button>
      </div>
      <div class="pt-5">
        <div class="cont" id="KodegoContent">
          @include('work.Kodego')
        </div>
        <div class="cont hidden" id="ConcentrixContent">
          @include('work.Concentrix')
        </div>
        <div class="cont hidden" id="SitelContent">
          @include('work.Sitel')
        </div>
      </div>
    </div>
    
    <script>
      function showContent(contentName, button) {
        var contents = document.getElementsByClassName("cont");
        for (var i = 0; i < contents.length; i++) {
          contents[i].classList.add("hidden");
        }
    
        var contentToShow = document.getElementById(contentName);
        contentToShow.classList.remove("hidden");
    
        var buttons = document.getElementsByTagName("button");
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].classList.remove("active");
        }
        button.classList.add("active");
      }
  
      var defaultButton = document.querySelector("[onclick=\"showContent('KodegoContent', this)\"]");
      defaultButton.classList.add("active");
      var defaultContent = document.getElementById("KodegoContent");
      defaultContent.classList.remove("hidden");
    </script>
</div>
