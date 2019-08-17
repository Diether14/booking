<template>
    <tr>
        <td>
            <a class="btn btn-sm btn-success mx-1" :href="editRoute">
                <i class="far fa-edit"></i>
            </a>
            <button v-on:click="deleteRecord(propertyID)" class="btn btn-sm btn-danger mx-1">
                <i class="far fa-trash-alt"></i>
            </button>
        </td>        
        <td>{{propertyID}}</td>
        <td>{{buildingName}}</td>
        <td>{{landlordName}}</td>
        <td>{{propertyName}}</td>
        <td>{{bedrooms}}</td>
        <td>{{bathrooms}}</td>
        <td>{{carSpaces}}</td>
        <td>{{checkInInstructions.substr(0,20)}}</td>
        <td>{{checkOutInstructions.substr(0,20)}}</td>
        <td>{{checkInTime}}</td>
        <td>{{checkOutTime}}</td>        
        <td>{{wifiName}}</td>
        <td>{{wifiPassword}}</td>
        <td>{{lockBoxCode}}</td>
        <td>{{nightly}}</td>
        <td>{{weekly}}</td>
        <td>{{monthly}}</td>
    </tr>
</template>

<script>
export default {
    props: ['propertyID', 'buildingName', 'landlordName','propertyName', 'bedrooms', 'bathrooms', 'carSpaces' , 'checkInInstructions', 'checkOutInstructions', 'checkInTime', 'checkOutTime', 'wifiName', 'wifiPassword','lockBoxCode', 'nightly', 'weekly', 'monthly'],
    data() {
        return {
            editRoute: "/properties/edit/"+this.propertyID,
        }
    },
    methods:{
        deleteRecord(id){
            if(confirm('Delete Property #' + id)){
                axios.post('/api/properties/destroy/'+id, {
                    _method: 'delete'
                });
            }
        }
    }
}
</script>