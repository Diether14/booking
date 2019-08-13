<template>
    <tr>
        <td>{{buildingID}}</td>
        <td>{{buildingName}}</td>
        <td>
            <a class="btn btn-sm btn-success mx-1" :href="editRoute">
                <i class="far fa-edit"></i>
            </a>
            <button v-on:click="deleteRecord(buildingID)" class="btn btn-sm btn-danger mx-1">
                <i class="far fa-trash-alt"></i>
            </button>
        </td>
    </tr>
</template>

<script>
export default {
    props: ['buildingID', 'buildingName'],
    data() {
        return {
            editRoute: "/buildings/edit/"+this.buildingID,
        }
    },
    methods:{
        deleteRecord(id){
            if(confirm('Delete Building #' + id)){
                axios.post('/api/buildings/destroy/'+id, {
                    _method: 'delete'
                });
            }
        }
    }
}
</script>