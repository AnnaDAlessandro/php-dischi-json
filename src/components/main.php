<main>
    <div class="container">
       <div class="row p-5">
        <div 
        v-for="(element,index) in dischi"
        :key="index"
        class="col-4 mb-4">
         <div class="card h-100" id="card-main" style="width: 18rem;">
          <img :src="element.poster" alt="...">
           <div class="card-body text-center">
           <h4 class="card-title">{{element.title}}</h4>
           <span class="card-text">{{element.author}}</span>
           <h5 class="card-text my-2">{{element.year}}</h5>
          
           </div>
         </div>
        </div>
        

       </div>

    </div>
</main>