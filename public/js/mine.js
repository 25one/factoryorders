const app = new Vue({
  el: '.container',
  data: {
    items1: [],
    items2: [],
    items3: [], 
    content: '',   
    number: 0,
    name: '',
    phone: '',
    message: '',
  },
  methods: {
        makeActive: function(url, number) {
          this.number = number;
          this.ajax(url);
        },
        ajax: function(url){
          axios
            .get(url + '?number=' + this.number + '&name=' + this.name + '&phone=' + this.phone + '&message=' + this.message)          
            .then(response => {
              var strjson = '';
              if(response.data.errors) {
                for(var i in response.data.errors) {
                   strjson += response.data.errors[i] + '\n';
                }
              } else {
                   if(response.data.success && this.number) {
                     document.getElementById('db' + this.number + 'home').innerHTML = '';
                     switch(this.number){
                        case 1: this.items1 = response.data.success; break;
                        case 2: this.items2 = response.data.success; break;
                        case 3: this.items3 = response.data.success; break;
                     }
                   }
                   if(response.data.success && !this.number) {
                      contenthome.innerHTML = '';
                      this.content = response.data.success;
                   }                   
                   strjson = 'Your message has been sent';
                   this.number = 0;
              }
              alert(strjson);
            }); 
        },
  },
});
