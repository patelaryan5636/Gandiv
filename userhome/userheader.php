<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url("https://fonts.cdnfonts.com/css/samarkan");

      .slogan {
        font-family: "Samarkan";
      }
      .hover-underline {
        position: relative;
      }
      .hover-underline::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 100%;
        height: 2px;
        background-color: #f8f6f4;
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
      }
      .hover-underline:hover::after {
        transform: scaleX(1);
      }
      .ticker-container {
        position: relative;
        overflow: hidden;
        white-space: nowrap;
      }
      .ticker-content {
        display: inline-block;
        animation: tickerMove 20s linear infinite;
      }
      @keyframes tickerMove {
        from {
          transform: translateX(100%);
        }
        to {
          transform: translateX(-100%);
        }
      }

      .ticker-container:hover .ticker-content {
        animation-play-state: paused;
      }

      /* Mobile Menu Styles */
      .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
      }
      .mobile-menu.open {
        transform: translateX(0);
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
        .slogan {
          font-size: 1.5rem;
          line-height: 1.3;
        }
      }

      @media (max-width: 640px) {
        .slogan {
          font-size: 1.25rem;
          text-align: center;
        }
        .logo-container {
          gap: 0.5rem;
        }
        .logo-container img {
          height: 2.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <header class="bg-[#F8F6F4] shadow-md">
      <!-- Main Header -->
      <div
        class="container mx-auto flex items-center justify-between py-4 px-4 sm:px-6"
      >
        <!-- Left Logos -->
        <div class="flex items-center gap-2 sm:gap-4 logo-container">
          <img src="gandiv.png" alt="Logo 1" class="h-10 sm:h-12 md:h-14" />
          <img src="yatra.png" alt="Logo 2" class="h-10 sm:h-12 md:h-14" />
        </div>

        <!-- Center Slogan -->
        <h1
          class="slogan text-lg sm:text-xl md:text-2xl lg:text-3xl text-gray-600 hidden sm:block text-center flex-1 mx-4"
        >
          Yatra by Gandiv – Where History Meets Innovation!
        </h1>

        <!-- Right Logos -->
        <div class="flex items-center gap-2 sm:gap-4 logo-container">
          <img src="userhome/gujrat.png" alt="Logo 4" class="h-10 sm:h-12 md:h-14" />
          <img src="ssiplogo.png" alt="Logo 3" class="h-10 sm:h-12 md:h-14" />
        </div>

        <!-- Mobile Menu Button -->
        <button
          id="mobile-menu-btn"
          class="md:hidden ml-4 p-2 text-gray-600 hover:text-gray-800 focus:outline-none"
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
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Slogan (visible on small screens) -->
      <div
        class="sm:hidden bg-[#F8F6F4] py-2 px-4 text-center border-t border-gray-200"
      >
        <h1 class="slogan text-base text-gray-600">
          Yatra by Gandiv – Where History Meets Innovation!
        </h1>
      </div>

      <!-- Desktop Navigation -->
      <nav class="bg-[#C4DFDF] text-gray-600 hidden md:block">
        <div
          class="container mx-auto flex justify-between items-center px-6 py-2 uppercase font-medium"
        >
          <ul class="flex space-x-4 lg:space-x-6">
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Home</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Explore</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Bookings ▼</a
              >
              <ul
                class="absolute left-0 w-48 bg-[#C4DFDF] text-gray-600 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-2 transition-all duration-300 shadow-lg z-50"
              >
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                    >Guide Booking</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                    >Hotel Booking</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                    >Explore Other Business</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                    >Museum</a
                  >
                </li>
              </ul>
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Live Guide</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Events & Activities</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Gallery</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >History</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Find Routes</a
              >
            </li>
            <li class="relative group hover-underline">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors"
                >Contact Us</a
              >
            </li>
          </ul>

          <!-- Desktop User Avatar -->
          <div class="relative group">
            <li class="relative group hover-underline list-none">
              <a
                href="#"
                class="px-2 py-2 hover:text-gray-800 transition-colors flex items-center justify-center gap-2"
                ><img style="height:18px;" src="userhome/img/login.svg" alt="Login">Login</a
              >
            </li>
            <!-- <img
              src="userhome/krish.jpg"
              alt="Avatar"
              class="h-10 w-10 rounded-lg cursor-pointer border-2 border-white hover:border-gray-300 transition-colors"
            />
            <div
              class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
            ></div>
            <ul
              class="absolute right-0 w-48 bg-[#C4DFDF] text-gray-600 rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-lg z-50"
            >
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                  >Dashboard</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                  >My Bookings</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 hover:bg-[#E3F4F4] transition-colors"
                  >Payment History</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-2 hover:bg-red-100 text-red-600 transition-colors"
                  >Logout →</a
                >
              </li>
            </ul> -->
          </div>
        </div>
      </nav>

      <!-- Mobile Navigation -->
      <nav
        id="mobile-menu"
        class="mobile-menu md:hidden fixed inset-y-0 right-0 w-80 max-w-full bg-white shadow-2xl z-50"
      >
        <div class="flex flex-col h-full">
          <!-- Mobile Header -->
          <div
            class="flex items-center justify-between p-4 bg-[#F8F6F4] border-b"
          >
            <h2 class="text-lg font-semibold text-gray-700">Menu</h2>
            <button
              id="close-menu"
              class="p-2 text-gray-600 hover:text-gray-800"
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
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>

          <!-- Mobile User Info -->
          <div class="p-4 bg-[#C4DFDF] border-b">
            <div class="flex items-center gap-3">
              <div class="relative">
                <img
                  src="userhome/krish.jpg"
                  alt="Avatar"
                  class="h-12 w-12 rounded-lg border-2 border-white"
                />
                <div
                  class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"
                ></div>
              </div>
              <div>
                <p class="font-medium text-gray-700">Krish</p>
                <p class="text-sm text-gray-600">Online</p>
              </div>
            </div>
          </div>

          <!-- Mobile Menu Items -->
          <div class="flex-1 overflow-y-auto p-4">
            <ul class="space-y-2">
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  🏠 Home
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  🔍 Explore
                </a>
              </li>
              <li>
                <button
                  class="booking-toggle w-full text-left px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between"
                >
                  📅 Bookings
                  <svg
                    class="w-4 h-4 transition-transform booking-arrow"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <ul
                  class="booking-submenu ml-6 mt-1 space-y-1 max-h-0 overflow-hidden transition-all duration-300"
                >
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg transition-colors"
                      >Guide Booking</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg transition-colors"
                      >Hotel Booking</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg transition-colors"
                      >Explore Other Business</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg transition-colors"
                      >Museum</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  📱 Live Guide
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  🎉 Events & Activities
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  🖼️ Gallery
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  📚 History
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  🛣️ Find Routes
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                >
                  📞 Contact Us
                </a>
              </li>
            </ul>

            <!-- Mobile User Actions -->
            <div class="mt-6 pt-4 border-t border-gray-200">
              <h3 class="text-sm font-medium text-gray-500 mb-3 px-4">
                Account
              </h3>
              <ul class="space-y-1">
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                    >📊 Dashboard</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                    >📋 My Bookings</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors"
                    >💳 Payment History</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors font-medium"
                    >🚪 Logout →</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- Mobile Menu Overlay -->
      <div
        id="mobile-overlay"
        class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-40 opacity-0 invisible transition-all duration-300"
      ></div>

      <!-- Ticker -->
      <div
        class="ticker-container bg-[#E3F4F4] text-gray-800 py-2 px-4 overflow-hidden"
      >
        <div class="ticker-content whitespace-nowrap">
          <span class="inline-block mr-8"
            >🚀 Special Offer! Get 20% off on all bookings this week!</span
          >
          <span class="inline-block mr-8"
            >🎉 New destinations added! Explore now.</span
          >
          <span class="inline-block mr-8"
            >📢 Customer support available 24/7 for any assistance.</span
          >
        </div>
      </div>
    </header>

    <script>
      // Mobile menu functionality
      const mobileMenuBtn = document.getElementById("mobile-menu-btn");
      const mobileMenu = document.getElementById("mobile-menu");
      const closeMenuBtn = document.getElementById("close-menu");
      const mobileOverlay = document.getElementById("mobile-overlay");

      function openMobileMenu() {
        mobileMenu.classList.add("open");
        mobileOverlay.classList.remove("opacity-0", "invisible");
        document.body.style.overflow = "hidden";
      }

      function closeMobileMenu() {
        mobileMenu.classList.remove("open");
        mobileOverlay.classList.add("opacity-0", "invisible");
        document.body.style.overflow = "";
      }

      mobileMenuBtn.addEventListener("click", openMobileMenu);
      closeMenuBtn.addEventListener("click", closeMobileMenu);
      mobileOverlay.addEventListener("click", closeMobileMenu);

      // Mobile submenu toggle
      const bookingToggle = document.querySelector(".booking-toggle");
      const bookingSubmenu = document.querySelector(".booking-submenu");
      const bookingArrow = document.querySelector(".booking-arrow");

      if (bookingToggle && bookingSubmenu) {
        bookingToggle.addEventListener("click", (e) => {
          e.preventDefault();
          const isOpen =
            bookingSubmenu.style.maxHeight &&
            bookingSubmenu.style.maxHeight !== "0px";

          if (isOpen) {
            bookingSubmenu.style.maxHeight = "0px";
            bookingArrow.style.transform = "rotate(0deg)";
          } else {
            bookingSubmenu.style.maxHeight = bookingSubmenu.scrollHeight + "px";
            bookingArrow.style.transform = "rotate(180deg)";
          }
        });
      }

      // Desktop dropdown functionality
      document.querySelectorAll(".group").forEach((menu) => {
        const dropdown = menu.querySelector("ul");
        if (dropdown) {
          menu.addEventListener("mouseenter", () => {
            dropdown.classList.remove("opacity-0", "invisible");
          });
          menu.addEventListener("mouseleave", () => {
            dropdown.classList.add("opacity-0", "invisible");
          });
        }
      });

      // Ticker functionality
      const ticker = document.querySelector(".ticker-content");
      const tickerContainer = document.querySelector(".ticker-container");

      if (ticker && tickerContainer) {
        tickerContainer.addEventListener("mouseenter", () => {
          ticker.style.animationPlayState = "paused";
        });

        tickerContainer.addEventListener("mouseleave", () => {
          ticker.style.animationPlayState = "running";
        });
      }

      // Close mobile menu on escape key
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          closeMobileMenu();
        }
      });

      // Handle window resize
      window.addEventListener("resize", () => {
        if (window.innerWidth >= 768) {
          closeMobileMenu();
        }
      });
    </script>
  </body>
</html>
