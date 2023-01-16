<template>

<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="col" class="px-6 py-3">Id</th>
      <th scope="col" class="px-6 py-3">Nombre</th>
      <th scope="col" class="px-6 py-3">Primer Apellido</th>
      <th scope="col" class="px-6 py-3">Segundo Apellido</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <a :href="`user/${user.id}/edit`">
          {{ user.id }}
        </a>
      </td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <a :href="`user/${user.id}/edit`">
          {{ user.name }}
        </a>
      </td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <a :href="`user/${user.id}/edit`">
          {{ user.pr_apellido }}
        </a>
      </td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <a :href="`user/${user.id}/edit`" >
          {{ user.sg_apellido }}
        </a>
      </td>
    </tr>
  </tbody>
</table>
</div>

</template>

<script>

import {Head,Link} from '@inertiajs/inertia-vue3'

  export default {
    props: ['users'],
    data() {
      return{
        form: this.$inertia.form({
          users: [],
        })
      }
    },
    methods: {
      store(){
        this.form.post('/user')
      },
    }
  }
</script>

