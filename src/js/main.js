console.log('ciao');

const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl:'server.php',
      dischi:[]
    } 
  },
  created(){

  },
  mounted(){
    this.getDischi()

  },
  methods:{
    getDischi(){
      axios.get(this.apiUrl)
      .then((response) => {
         this.dischi=response.data

      })
    }
}
}).mount('#app')
