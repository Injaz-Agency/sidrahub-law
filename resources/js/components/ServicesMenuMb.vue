<template>
  <div class="relative">
    <a
      :href="`/${locale}/new/services`"
      @click.prevent="isOpen = !isOpen"
      class="flex items-center justify-center px-4 py-2 text-lg font-medium text-main"
    >
      {{ locale == 'ar' ? 'خدماتنا' : 'Services' }}
      <svg
        class="h-4 w-4 fill-main transition-colors duration-200 ease-in group-hover:fill-second"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512"
      >
        <path
          d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
        />
      </svg>
    </a>

    <transition name="fade">
      <!-- class="absolute top-12 start-0 min-w-[190px] z-40 mt-2 bg-white border border-gray-200 rounded-md shadow-xl" -->
      <div v-show="isOpen" class="border-t border-sh-border">
        <ul class="divide-y divide-sh-border">
          <!-- :class="pathLink.includes('saudi') ? 'active' : ''" -->

          <SubServicesMenuMb :locale="locale" :service="service" v-for="service in services" :key="service.id" />
        </ul>
      </div>
    </transition>
  </div>
</template>

<script>
import SubServicesMenuMb from './SubServicesMenuMb.vue'
import SubServicesMenu from './SubServicesMenu.vue'
export default {
  props: {
    locale: {
      type: String,
    },
    services: {
      type: [Object, Array],
      required: true, // Ensure that the prop is required
    },
  },
  components: {
    SubServicesMenu,
    SubServicesMenuMb,
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

<style>
.fade-enter-active,
.fade-leave-active {
  transition: all 0.3s ease-in-out;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
