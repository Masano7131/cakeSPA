new Vue({
  el:'#tab',
  data:{
    current:'tab1',
    email:'',
    password:'',
    address:'',
    email:'',
    sex:'',
    birth:'',
    tel:'',
    hobby:''
  },
  methods:{
    show:function(name){
      this.current = name;
    },
    isCurrent:function(name){
      return this.current == name;
  },
}
})
