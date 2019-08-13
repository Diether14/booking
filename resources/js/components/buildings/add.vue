<template>
  <div>
    <form action="/buildings/store" method="post">
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
    data(){
        return {
            name: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
}
</script>

<style>

</style>