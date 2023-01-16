<template>
    
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
  <form @submit.prevent="update">
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Nombre</label>
      <input type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Enter name" v-model="form.name">
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Primer Apellido</label>
      <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Primer Apellido" v-model="form.pr_apellido">
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Segundo Apellido</label>
      <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Segundo Apellido" v-model="form.sg_apellido">
    </div>
    <div class="flex items-center">
    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" @click="update">Actualizar</button>
    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" @click="delete">Delete</button>
    </div>
  </form>
  
  
</div>

</template>

<script>

import axios from 'axios';

export default {
    props: {
      user: Object,
    },
    data() {
      return{
        form: this.$inertia.form({
          id: this.user.id,
          name: this.user.name,
          pr_apellido: this.user.pr_apellido,
          sg_apellido: this.user.sg_apellido
        }),
      }
    },
    methods: {
      update(){
        this.form.post(`/user/${this.user.id}`)
      },
      delete() {
        this.form.delete(`/user/delete/${this.user.id}`)
      },
      mounted(){

      }
    }
  }

</script>