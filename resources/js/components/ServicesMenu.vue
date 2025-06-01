<template>
  <div @mousemove="isOpen = true" @mouseleave="isOpen = false" class="relative">
    <div class="inline-flex">
      <a
        href="#"
        class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('services.saudi')) active @endif"
      >
        {{ locale == 'ar' ? 'خدماتنا' : 'Services' }}
        <svg
          class="w-4 h-4 mx-2 fill-main group-hover:fill-second transition-colors duration-200 ease-in"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
          />
        </svg>
      </a>
    </div>

    <transition name="slide-up">
      <div
        v-show="isOpen"
        class="absolute top-12 start-0 min-w-[270px] z-40 mt-2 bg-white border border-gray-200 rounded-md shadow-xl"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
      >
        <ul class="py-2" role="none">
          <!-- :class="pathLink.includes('saudi') ? 'active' : ''" -->
<!--          <SubServicesMenu :locale="locale" v-for="service in services" />-->
          <SubServicesMenu :locale="locale" :service="service" v-for="service in services" :key="service.id" />

        </ul>
      </div>
    </transition>
  </div>
</template>

<script>
import SubServicesMenu from './SubServicesMenu.vue'
export default {
  props: {
    locale: {
      type: String,
    },
    services: {
      type: [Array,Object],
    },
  },
  components: {
    SubServicesMenu,
  },
  data() {
    return {
      isOpen: false,
    }
  },
  computed: {
    pathLink() {
      // let path = this.utlPath.slice(4)
      // return path
    },
  },
}
</script>

<style scoped>
.slide-up-enter-active {
  transition: all 0.3s ease-out;
}

.slide-up-leave-active {
  transition: all 0.4s ease-in;
}

.slide-up-enter-from,
.slide-up-leave-to {
  transform: translateY(20%);
  opacity: 0.3;
}
</style>
