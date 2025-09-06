<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Updates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url("https://fonts.cdnfonts.com/css/samarkan");

      .title {
        font-family: "Samarkan";
      }

      @layer components {
        .line-clamp-1 {
          display: -webkit-box;
          -webkit-line-clamp: 1;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }

        .line-clamp-2 {
          display: -webkit-box;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }
      }
    </style>
  </head>
  <body>
    <section class="relative py-16 px-12">
      <div class="absolute inset-0">
        <img
          src="img/newscardbg.jpg"
          alt="Background"
          class="w-full h-[630px] object-cover"
        />
        <div class="absolute inset-0 h-[630px] bg-white/80"></div>
      </div>

      <div class="relative h-full mx-auto mt-8">
        <div class="flex justify-between items-center mb-16 px-6">
          <div class="relative">
            <h2
              class="title font-gloock text-5xl font-semibold md:text-5xl text-accent text-gray-600"
            >
              News & Update - What is New in Narmada
              <div
                class="absolute -right-8 -top-8 w-16 h-16 bg-secondary/30 rounded-full blur-xl"
              ></div>
            </h2>
          </div>
          <button
            class="px-6 py-3 bg-[#116A7B] rounded-lg text-white transition-all flex items-center gap-2"
          >
            View More
          </button>
        </div>

        <div class="relative overflow-hidden mt-10">
          <div
            class="flex transition-transform duration-500 ease-in-out relative"
            id="newsSlider"
            style="transform: translateX(-33.333%)"
          >
            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img/Btfly.jpg"
                    alt="News 5"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    Seasonal Discounts
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Enjoy special discounts on our premium handcrafted items.
                    Limited time offer on selected items from our exclusive
                    collection.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img1.jpg"
                    alt="News 1"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    New Handcraft Collection Arrives
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Experience our latest collection of handcrafted items
                    featuring traditional designs with modern touches. Each
                    piece tells a unique story of craftsmanship.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img2.jpg"
                    alt="News 2"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    Upcoming Artisan Workshop
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Join us for an exclusive workshop where master artisans will
                    demonstrate traditional crafting techniques. Limited seats
                    available.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img3.jpg"
                    alt="News 3"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    Special Festival Collection
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Discover our specially curated festival collection featuring
                    unique designs and traditional motifs. Perfect for the
                    upcoming festive season.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img4.jpg"
                    alt="News 4"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    Exhibition Announcement
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Mark your calendars for our upcoming exhibition showcasing
                    the finest handcrafted pieces from local artisans. Free
                    entry for all visitors.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img/Btfly.jpg"
                    alt="News 5"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    Seasonal Discounts
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Enjoy special discounts on our premium handcrafted items.
                    Limited time offer on selected items from our exclusive
                    collection.
                  </p>
                </div>
              </div>
            </div>

            <div class="min-w-[33.333%] px-4">
              <div
                class="bg-[#f8f6f4] backdrop-blur-sm rounded-xl overflow-hidden shadow-lg"
              >
                <div class="aspect-video">
                  <img
                    src="img1.jpg"
                    alt="News 1"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div class="p-6">
                  <h3
                    class="font-sofia text-xl font-semibold text-accent mb-2 line-clamp-1"
                  >
                    New Handcraft Collection Arrives
                  </h3>
                  <p class="text-gray-600 line-clamp-2">
                    Experience our latest collection of handcrafted items
                    featuring traditional designs with modern touches. Each
                    piece tells a unique story of craftsmanship.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <button
            class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/80 rounded-full flex items-center justify-center text-accent hover:bg-white transition-all"
            onclick="moveSlide(-1)"
          >
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 19l-7-7 7-7"
              />
            </svg>
          </button>
          <button
            class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/80 rounded-full flex items-center justify-center text-accent hover:bg-white transition-all"
            onclick="moveSlide(1)"
          >
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
              />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <script>
      let currentNewsSlide = 0;
      const newsSlider = document.getElementById("newsSlider");
      const totalNewsSlides = 5;
      let autoNewsSlideInterval;
      let isDragging = false;
      let startPos = 0;
      let currentTranslate = 0;
      let prevTranslate = 0;

      function updateSlider(transition = true) {
        newsSlider.style.transition = transition
          ? "transform 0.5s ease-in-out"
          : "none";
        newsSlider.style.transform = `translateX(${
          -33.333 * (currentNewsSlide + 1)
        }%)`;
      }

      function moveSlide(direction) {
        if (direction !== 0) {
          currentNewsSlide += direction;
          updateSlider();
        }

        if (currentNewsSlide === totalNewsSlides) {
          setTimeout(() => {
            currentNewsSlide = 0;
            updateSlider(false);
          }, 500);
        } else if (currentNewsSlide === -1) {
          setTimeout(() => {
            currentNewsSlide = totalNewsSlides - 1;
            updateSlider(false);
          }, 500);
        }

        resetAutoSlide();
      }

      function resetAutoSlide() {
        clearInterval(autoNewsSlideInterval);
        autoNewsSlideInterval = setInterval(() => moveSlide(1), 4000);
      }

      function touchStart(event) {
        isDragging = true;
        startPos = event.type.includes("mouse")
          ? event.pageX
          : event.touches[0].clientX;
        newsSlider.style.cursor = "grabbing";
      }

      function touchMove(event) {
        if (!isDragging) return;

        const currentPosition = event.type.includes("mouse")
          ? event.pageX
          : event.touches[0].clientX;
        const diff = currentPosition - startPos;
        const move = (diff / window.innerWidth) * 100;

        newsSlider.style.transition = "none";
        newsSlider.style.transform = `translateX(${
          -33.333 * (currentNewsSlide + 1) + move
        }%)`;
      }

      function touchEnd(event) {
        if (!isDragging) return;
        isDragging = false;

        const currentPosition = event.type.includes("mouse")
          ? event.pageX
          : event.changedTouches[0].clientX;
        const diff = currentPosition - startPos;

        if (Math.abs(diff) > 100) {
          if (diff > 0) {
            moveSlide(-1);
          } else {
            moveSlide(1);
          }
        } else {
          moveSlide(0);
        }

        newsSlider.style.cursor = "grab";
      }

      newsSlider.addEventListener("mousedown", touchStart);
      newsSlider.addEventListener("touchstart", touchStart);
      newsSlider.addEventListener("mousemove", touchMove);
      newsSlider.addEventListener("touchmove", touchMove);
      newsSlider.addEventListener("mouseup", touchEnd);
      newsSlider.addEventListener("touchend", touchEnd);
      newsSlider.addEventListener("mouseleave", touchEnd);

      resetAutoSlide();

      newsSlider.addEventListener("transitionend", () => {
        if (currentNewsSlide === totalNewsSlides) {
          currentNewsSlide = 0;
          updateSlider(false);
        } else if (currentNewsSlide === -1) {
          currentNewsSlide = totalNewsSlides - 1;
          updateSlider(false);
        }
      });
    </script>
  </body>
</html>
