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
    <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out" @click="update">Actualizar</button>
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
      mounted(){

      }
    }
  }

</script>