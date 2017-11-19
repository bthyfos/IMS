<template>
    <div>
      <input type="text" 
            class="form-control"
             :placeholder="placeholder"
             autocomplete="off"
             v-model="queryString"
             v-on:keyup ="getResults()"
             />
    </div>
</template>
<style>
export default {
    data(){
               return {
                queryString:''
               }
    }, 
    methods: {
     getResults(){
      axios.get('',{params:{queryString:this.queryString}})
           .then( response => {
           console.log(repsonse.data);
           });
     }
    }
}
</script>

