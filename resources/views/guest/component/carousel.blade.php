<div id="auto-play"
    data-carousel='{ "loadingClasses": "opacity-0", "isAutoPlay": true, "speed": 5000, "dotsItemClasses": "carousel-dot" }'
    class="relative m-10">
    <div class="carousel h-[400px]">
        <div class="carousel-body opacity-0 h-full">
            <!-- Slide 1 -->
            <div class="carousel-slide">
                <img src="{{ asset('header.JPG') }}" alt="">

            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide">
                <div class="bg-base-300/80 flex h-full justify-center p-6">
                    <span class="self-center text-2xl sm:text-4xl">Second slide</span>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-slide">
                <div class="bg-base-300 flex h-full justify-center p-6">
                    <span class="self-center text-2xl sm:text-4xl">Third slide</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Previous Slide -->
    <button type="button" class="carousel-prev">
        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
            <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
        </span>
        <span class="sr-only">Previous</span>
    </button>
    <!-- Next Slide -->
    <button type="button" class="carousel-next">
        <span class="sr-only">Next</span>
        <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
            <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
        </span>
    </button>

    <div class="carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center gap-3"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("auto-play").style.zoom = "130%";
    });
</script>
