<template>
  <li class="relative" @mousemove="isSub = true" @mouseleave="isSub = false">
    <a :href="`/${locale}/services?category=${service.id}`" class="inline-flex items-center justify-between w-full py-2 px-4 text-main hover:text-second group">
      {{ service.name }}
      <svg class="w-4 h-4 fill-main group-hover:fill-second transition-colors duration-200 ease-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
          d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
        />
      </svg>
    </a>

    <transition name="slide-up">
      <div
        v-show="isSub"
        class="absolute top-0 start-full min-w-[270px] z-50 mt-2 bg-white border rounded-md shadow-xl"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
      >
        <ul class="py-2" role="none">
          <li v-for="item in service.services" :key="item.id">
            <a :href="`/${locale}/services/${item.id}`" class="inline-flex items-center w-full py-2 px-4 text-main hover:text-second group">
              {{ item.name }}
            </a>
          </li>
        </ul>
      </div>
    </transition>
  </li>
</template>

<script>
export default {
  props: {
    locale: {
      type: String,
    },
    service: {
      type: [Object, Array],
      required: true, // Ensure that the prop is required
    },
  },
  data() {
    return {
      isSub: false,
    }
  },
  computed: {
    // pathLink() {
    // let path = this.utlPath.slice(4)
    // return path
    // },
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
