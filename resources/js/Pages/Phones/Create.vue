<template>
  <layout>
    <div class="px-20">
        <!-- <div v-if="Object.keys(errors).length > 0" class="bg-green-300 mt-4">
          {{ errors[Object.keys(errors)[0]][0] }}
        </div> -->
        <form action="/phones" method="POST" @submit.prevent="createPhone" class="space-y-6">

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
            Agent Name
            </label>
            <div class="mt-1">
            <input v-model="form.user" id="name" name="name" type="text"  required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
            Extension Number
            </label>
            <div class="mt-1">
            <input v-model="form.extension" id="number" name="number" type="number"  required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div class="space-y-1">
            <label for="password" class="block text-sm font-medium text-gray-700">
            Secret
            </label>
            <div class="mt-1">
            <input v-model="form.password" id="password" name="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>

        <div>
            <button  type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add Sip
            </button>
        </div>
        </form>
    </div>
  </layout>
</template>

<script>
import Layout from '../../Shared/Layout'

export default {
 props: ['phones'],

  components: {
    Layout,
  },
  data(){
    return{
       form:{
        user: null,
        extension: null,
        password: null
       } 
        
    }
  },
  methods:{
    createPhone() {
        this.$inertia.post('/phones', this.form)
        .then(() => {
            // alert('Proceed to add Phone?')
        })
    }
  }
}
</script>
