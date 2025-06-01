<div id="customersOpinions" class="splide my-10">
  <div class="splide__track">
    <ul class="splide__list">
      @foreach ($reviews as $item)
        <li class="splide__slide">
          <div class="space-y-3">
            <div class="relative">
              <iframe width="560" height="315" src="{{ $item['video_url'] }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <a href="" class="absolute inset-0 inline-flex items-center justify-center">
                <span class="w-24 h-24 inline-flex items-center justify-center bg-second rounded-full">
                  <svg class="w-12 h-12 ltr:pr-1 rtl:pl-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </a>
            </div>
            <h3 class="ltr:ml-2 rtl:mr-2 text-xl md:text-2xl font-semibold text-second">عزام ال تركي</h3>
            <p class="ltr:ml-2 rtl:mr-2 text-base md:text-lg font-medium">المدير التنفيذي لشركة شيبير</p>
          </div>
        </li>
      @endforeach

    </ul>
  </div>
</div>
