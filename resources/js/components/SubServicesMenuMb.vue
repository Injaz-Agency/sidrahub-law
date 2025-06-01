<template>
  <li>
    <a @click.prevent="isSub = !isSub" href="#" class="py-2.5 px-4 flex items-center justify-center text-lg font-medium text-main">
      {{ service.name }}
      <svg class="w-4 h-4 fill-main group-hover:fill-second transition-colors duration-200 ease-in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
          d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
        />
      </svg>
    </a>

    <transition name="fade">
      <div v-show="isSub" class="border-t border-sh-border">
        <ul class="divide-y divide-sh-border">
          <!-- :class="pathLink.includes('saudi') ? 'active' : ''" -->

          <li v-for="item in service.services" :key="item.id">
            <a :href="`/${locale}/services/${item.id}`"
               class="py-2.5 px-4 flex items-center justify-center text-lg font-medium text-sm ">{{item.name}}</a>
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
      type: [Object,Array],
      required: true // Ensure that the prop is required
    }
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
