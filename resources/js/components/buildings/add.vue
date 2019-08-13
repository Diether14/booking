<template>
  <div>
    <form action="/api/buildings/store">
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
    data(){
        return {
            name: '',
        }
    },
}
</script>

<style>

</style>