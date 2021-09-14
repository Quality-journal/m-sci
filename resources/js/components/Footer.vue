<template>
  <div class="bg-yellow-500 footer">
    <div class="mx-auto sm:px-6 text-white h-auto">
      <div class="flex flex-wrap py-4 px-4">
        <div class="w-full sm:w-1/4 px-2">
          <a :href="'/'"><span class="font-semibold text-xl tracking-tight px-6 md:px-0">Science of maintenance</span></a>
        </div>
        <div class="w-full sm:w-2/4 px-8 mt-4 sm:mt-0">
          <p class="font-bold">Science of maintenance</p>
          <ul class="list-style-none mt-2">
            <li><a :href="'/about'">About the journal</a></li>
            <li><a :href="'/browse-issues'">Browse issues</a></li>
            <li><a :href="'/instructions-for-authors'">Instructions for authors</a></li>
            <li><a :href="'/submit-a-paper'">Submit a paper</a></li>
            <li><a :href="'/contact'">Contact</a></li>
          </ul>
        </div>
        <div class="w-full sm:w-1/4 px-8">
          <p class="font-bold">Contact</p>
          <p class="mt-2">IIPP<br>Institute for research<br>and design in industry<br>Vatroslava Lisinskog 12a, 11000 Belgrade, Serbia<br></p>
        </div>
      </div>
    </div>
    <hr>
    <div class="mx-auto sm:px-6 lg:px-8 text-white h-auto">
      <div class="flex flex-wrap py-4 px-4">
        <div class="w-full sm:w-1/2"><p>@2021 Science of maintenance</p></div>
        <div class="w-full sm:w-1/2">
          <p class="md:float-right">Created by
            <a class="hover:text-gray-800" href="https://projectland.rs" target="blank">Projectland</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>

</style>
