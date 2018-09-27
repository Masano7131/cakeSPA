new Vue({
  el:'#tab',
  data:{
    current:'tab1'
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
