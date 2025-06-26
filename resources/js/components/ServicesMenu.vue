<template>
  <div @mousemove="isOpen = true" @mouseleave="isOpen = false" class="relative">
    <div class="inline-flex">
      <a
        href="#"
        class="nav-link relative flex h-full items-center justify-center px-2 py-2 text-sm font-medium text-main uppercase lg:px-5 lg:text-lg"
      >
        {{ locale == 'ar' ? 'خدماتنا' : 'Services' }}
        <svg
          class="mx-2 h-4 w-4 fill-main transition-colors duration-200 ease-in group-hover:fill-second"
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
        class="absolute start-0 top-12 z-40 mt-2 min-w-[270px] rounded-md border border-gray-200 bg-white shadow-xl"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
      >
        <ul class="py-2" role="none">
          <!-- :class="pathLink.includes('saudi') ? 'active' : ''" -->
          <!--          <SubServicesMenu :locale="locale" v-for="service in services" />-->
          <!-- <SubServicesMenu :locale="locale" :service="service" v-for="service in services" :key="service.id" /> -->

          <li class="relative" v-for="service in services" :key="service.id">
            <a :href="`/${locale}/services`" class="group inline-flex w-full items-center justify-between px-4 py-2 text-main hover:text-second">
              {{ locale == 'ar' ? service.title_ar : service.title_en }}
              <!-- <svg
                class="h-4 w-4 fill-main transition-colors duration-200 ease-in group-hover:fill-second"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <path
                  d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
                />
              </svg> -->
            </a>
          </li>
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
      type: [Array, Object],
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
