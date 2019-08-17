<template>
  <div>
    <form :action="action" method="post">
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group">
            <label for="building_id">Building</label>
            <select class="form-control" name="building_id" id="building_id" v-model="property.building_id">
                <option v-for="building in allBuildings" :key="building.id" :value="building.id">{{building.name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="landloard">Landlord</label>
            <select class="form-control" name="landloard" id="landloard" v-model="property.landlord_id">
                <option v-for="landlord in allLandlords" :key="landlord.id" :value="landlord.id">{{landlord.firstname + ' ' + landlord.lastname}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" v-model="property.name">
        </div>
        <div class="form-group">
            <label for="bathrooms">Bathrooms</label>
            <input type="number" name="bathrooms" id="bathrooms" class="form-control" v-model="property.bathrooms">
        </div>        
        <div class="form-group">
            <label for="car_spaces">Car Spaces</label>
            <input type="number" name="car_spaces" id="car_spaces" class="form-control" v-model="property.car_spaces">
        </div>       
        <div class="form-group">
            <label for="check_in_instructions">Check In Instructions</label>
            <textarea name="check_in_instructions" id="check_in_instructions" class="form-control" v-model="property.check_in_instructions"></textarea>
        </div>      
        <div class="form-group">
            <label for="check_out_instructions">Check Out Instructions</label>
            <textarea name="check_out_instructions" id="check_out_instructions" class="form-control" v-model="property.check_out_instructions"></textarea>
        </div>     
        <button type="submit" class="btn btn-sm btn-success">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
    props: ['propertyId', 'buildings', 'landlords'],
    data(){
        return {
            property: {},
            action: '/properties/update/' + this.propertyId,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            allBuildings: {},
            allLandlords: {},
        }
    },
    created(){
        this.allBuildings = JSON.parse(this.buildings);
        this.allLandlords = JSON.parse(this.landlords);
        axios.get('/api/properties/show/'+this.propertyId)
        .then(res => {
            this.property = res.data.data;
        })
    }
}
</script>

<style>

</style>