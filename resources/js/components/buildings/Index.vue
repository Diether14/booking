<template>
  <div>
      <table id="index_table" class="table table-hover table-justify w-100">
        <thead>
          <tr class="table-info">
            <th>#</th>
            <th>name</th>
            <th>actions</th>
          </tr>
        </thead>
        <tbody v-for="building in buildings" :key="building.id">
          <building v-bind:buildingID="building.id" v-bind:buildingName="building.name"></building>
        </tbody>
      </table>
  </div>
</template>

<script>
export default {
  data () {
    return {
      buildings: [],
      links: [],
      meta: [],
      building: {},
    }
  },
  created() {
    this.getBuldings(1);
  },
  methods:{
    getBuldings(page){
      axios.get('/api/buildings/getall', {
        params : {
          page: page,
        }
      })
      .then(res=>{
        this.buildings = res.data.data;
        this.links = res.data.links;
        this.meta = res.data.meta;
      })
    }
  }
} 
</script>

<style>

</style>