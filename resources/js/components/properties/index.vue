<template>
  <div>
      <table id="index_table" class="table table-responsive table-hover table-justify w-100">
        <thead>
          <tr class="table-info">
            <th>actions</th>
            <th>#</th>
            <th>Building</th>
            <th>Landlord</th>
            <th>Name</th>
            <th>Bedrooms</th>
            <th>Bathrooms</th>
            <th>Car Spaces</th>
            <th>Check In Instructions</th>
            <th>Check Out Instructions</th>
            <th>Check In Time</th>
            <th>Check Out Time</th>            
            <th>Wifi Name</th>
            <th>Wifi Password</th>
            <th>Lock Box Code</th>
            <th>Default Nightly Rate</th>
            <th>Default Weekly Rate</th>
            <th>Default Monthly Rate</th>
          </tr>
        </thead>
        <tbody v-for="property in properties" :key="property.id">
          <property 
            v-bind:propertyID="property.id" 
            v-bind:buildingName="property.building_name" 
            v-bind:landlordName="property.landlord_name" 
            v-bind:propertyName="property.name"
            v-bind:bedrooms="property.bedrooms"
            v-bind:bathrooms="property.bathrooms"
            v-bind:carSpaces="property.car_spaces"
            v-bind:checkInInstructions="property.check_in_instructions"
            v-bind:checkOutInstructions="property.check_out_instructions"
            v-bind:checkInTime="property.check_in_time"
            v-bind:checkOutTime="property.check_out_time"            
            v-bind:wifiName="property.wifi_name"
            v-bind:wifiPassword="property.wifi_password"
            v-bind:lockBoxCode="property.lock_box_code"
            v-bind:nightly="property.nightly"
            v-bind:weekly="property.weekly"
            v-bind:monthly="property.monthly"
            ></property>
        </tbody>
      </table>
  </div>
</template>

<script>
export default {
  data () {
    return {
      properties: [],
      links: [],
      meta: [],
      property: {},
    }
  },
  created() {
    this.getProperties(1);
  },
  methods:{
    getProperties(page){
      axios.get('/api/properties/getall', {
        params : {
          page: page,
        }
      })
      .then(res=>{
        this.properties = res.data.data;
        this.links = res.data.links;
        this.meta = res.data.meta;
      })
    }
  }
} 
</script>

<style>

</style>