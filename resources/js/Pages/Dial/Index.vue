<template>
<layout>
<ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-20">
  <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex items-center justify-between p-6 space-x-6">
      <div class="flex-1 truncate">
        <div class="flex items-center space-x-3">
          <h3 class="text-gray-900 text-lg font-medium truncate">Saiba</h3>
          <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">100</span>
        </div>
      </div>
    </div>
    <div>
      <div @click="dialSaiba" class="-mt-px flex divide-x divide-gray-200">
        <div class="-ml-px w-0 flex-1 flex">
          <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
            <!-- Heroicon name: solid/phone -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
            </svg>
            <span class="ml-3">Call</span>
          </a>
        </div>
      </div>
    </div>
  </li>
</ul>

</layout>   

</template>

<script>
import Layout from '../../Shared/Layout'

export default {

components:{
    Layout
},
props: [

],
data(){
    return{
        saiba:{
            user: null,
            extension: null,
            password: null
        },
        demo:{
            
        } 
    } 
},
methods:{
    dialSaiba(){
       
        
    }
}



}
</script>
