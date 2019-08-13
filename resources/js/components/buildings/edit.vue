<template>
  <div>
    <form :action="action" method="post">
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" v-model="name" id="name" name="name" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-sm btn-success">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
    props: ['buildingId'],
    data(){
        return {
            name: '',
            action: '/buildings/update/' + this.buildingId,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    created(){
        axios.get('/api/buildings/show/'+this.buildingId)
        .then(res => {
            this.name = res.data.data.name;
        })
    }
}
</script>

<style>

</style>