<template>

<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Nombre
      </label>
      <input v-model="form.nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Username">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Primer Apellido
      </label>
      <input v-model="form.pr_apellido" name="pr_apellido" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Primer Apellido">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Segundo Apellido
      </label>
      <input v-model="form.sg_apellido" name="sg_apellido" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Segundo Apellido">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" @click="store">
        Sign In
      </button>
    </div>
  </form>
</div>

</template>

<script>
  export default {
    data() {
      return{
        form: this.$inertia.form({
          nombre: '',
          pr_apellido: '',
          sg_apellido: ''
        })
      }
    },
    methods: {
      store(){
        this.form.post('/user')
      }
    }
  }
</script>