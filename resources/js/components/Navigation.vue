<template>
  <div class="bg-yellow-500">
    <div class="mx-auto sm:px-6 lg:px-8">
      <nav class="flex justify-between p-6 flex-wrap">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <a class="flex flex-col space-y-1" :href="'/'">
            <span class="font-semibold text-xl tracking-tight"
              >Science of Maintenance</span
            >
            <span>International journal</span>
          </a>
        </div>

        <div class="block lg:hidden">
          <button
            @click="toggleMobileMenu"
            class="flex items-center px-3 py-2 text-white hover:text-white"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div
          class="
            w-full
            block
            flex-grow
            lg:flex lg:items-center lg:w-auto
            text-right
            mb-5
            pb-1
          "
          v-bind:class="{ hidden: !showMobileMenu }"
        >
          <div class="text-md lg:flex-grow">
            <a
              :href="'/about'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
            >
              About the journal
            </a>

            <a
              :href="'/browse-issues'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
            >
              Browse issues
            </a>
            <a
              :href="'/instructions-for-authors'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
              >Instructions for authors</a
            >
            <a
              :href="'/submit-a-paper'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
              >Submit a paper</a
            >
            <a
              :href="'/contact'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
              >Contact</a
            >
            <a
              :href="'/search'"
              class="
                block
                mt-4
                lg:inline-block
                md:mt-0
                text-white
                hover:text-gray-600
                mr-4
              "
              >Search</a
            >
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      showMenu: false,
      showMobileMenu: false,
    };
  },
  methods: {
    toggleShow: function () {
      this.showMenu = !this.showMenu;
    },
    toggleMobileMenu: function () {
      this.showMobileMenu = !this.showMobileMenu;
    },
  },
};
</script>
