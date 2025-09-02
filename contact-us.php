<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Gandiv</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap");

      body {
        font-family: "Plus Jakarta Sans", sans-serif;
        background-color: #f8f9fa;
        background-image: radial-gradient(
            at 80% 0%,
            #c4dfdf 0px,
            transparent 50%
          ),
          radial-gradient(at 20% 100%, #94c4c4 0px, transparent 50%);
        background-attachment: fixed;
        min-height: 100vh;
      }

      .card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      }

      .input-field {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(148, 196, 196, 0.3);
        transition: all 0.3s ease;
      }

      .input-field:focus {
        border-color: #94c4c4;
        box-shadow: 0 0 0 4px rgba(148, 196, 196, 0.15);
      }

      @keyframes float {
        0% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-10px);
        }
        100% {
          transform: translateY(0px);
        }
      }

      .float {
        animation: float 3s ease-in-out infinite;
      }
    </style>
  </head>
  <body class="">
    <?php 
        include("includes/header.php");
    ?>
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="card rounded-3xl p-8">
          <div class="text-center mb-4">
            <h1 class="text-3xl font-bold text-[#648383] mb-3">
              We'd Love to Hear from You!
            </h1>
          </div>

          <div class="space-y-8">
            <div class="bg-[#c4dfdf]/20 rounded-2xl p-6">
              <div class="flex items-start gap-4">
                <div
                  class="bg-[#c4dfdf] rounded-full p-3 w-12 h-12 flex items-center justify-center shrink-0"
                >
                  <i class="fas fa-building text-[#648383] text-xl"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-[#648383] mb-2">
                    Our Office
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    Gandiv Heritage and Innovation Center<br />
                    Rajpipla City, Narmada District<br />
                    Gujarat, India - 393145
                  </p>
                </div>
              </div>
            </div>

            <div class="bg-[#c4dfdf]/20 rounded-2xl p-6">
              <div class="flex items-start gap-4">
                <div
                  class="bg-[#c4dfdf] rounded-full p-3 w-12 h-12 flex items-center justify-center shrink-0"
                >
                  <i class="fas fa-address-card text-[#648383] text-xl"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-[#648383] mb-2">
                    Contact Details
                  </h3>
                  <div class="space-y-2">
                    <p class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-phone text-[#94c4c4]"></i>
                      +91 98765 43210
                    </p>
                    <p class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-envelope text-[#94c4c4]"></i>
                      support@gandivplatform.in
                    </p>
                    <p class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-globe text-[#94c4c4]"></i>
                      www.gandivplatform.in
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-[#c4dfdf]/20 rounded-2xl p-6">
              <div class="flex items-start gap-4">
                <div
                  class="bg-[#c4dfdf] rounded-full p-3 w-12 h-12 flex items-center justify-center shrink-0"
                >
                  <i class="fas fa-handshake text-[#648383] text-xl"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-[#648383] mb-2">
                    Partnership & Collaboration
                  </h3>
                  <p class="text-gray-600 mb-2">
                    If you're a business owner, artisan, tour guide, or service
                    provider interested in collaborating with us, please reach
                    out at:
                  </p>
                  <p class="flex items-center gap-2 text-gray-600">
                    <i class="fas fa-envelope text-[#94c4c4]"></i>
                    partnerships@gandivplatform.in
                  </p>
                </div>
              </div>
            </div>

            <div class="bg-[#c4dfdf]/20 rounded-2xl p-6">
              <div class="flex items-start gap-4">
                <div
                  class="bg-[#c4dfdf] rounded-full p-3 w-12 h-12 flex items-center justify-center shrink-0"
                >
                  <i class="fas fa-bolt text-[#648383] text-xl"></i>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-[#648383] mb-3">
                    Quick Support Categories
                  </h3>
                  <div class="grid grid-cols-2 gap-3">
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-info-circle text-[#94c4c4]"></i>
                      General Information
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-compass text-[#94c4c4]"></i>
                      Booking Assistance
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-briefcase text-[#94c4c4]"></i>
                      Business Queries
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-user-tie text-[#94c4c4]"></i>
                      Job Support
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-newspaper text-[#94c4c4]"></i>
                      News & Media
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                      <i class="fas fa-vr-cardboard text-[#94c4c4]"></i>
                      AR/VR Support
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card rounded-3xl p-8">
          <h2 class="text-2xl font-semibold text-[#648383] mb-6">
            Send us a message
          </h2>
          <form class="space-y-6">
            <div>
              <label
                class="block text-gray-600 text-sm font-medium mb-2"
                for="name"
              >
                Full Name
              </label>
              <input
                type="text"
                id="name"
                class="input-field w-full px-4 py-3 rounded-xl focus:outline-none"
                placeholder="Enter your name"
                required
              />
            </div>

            <div>
              <label
                class="block text-gray-600 text-sm font-medium mb-2"
                for="email"
              >
                Email Address
              </label>
              <input
                type="email"
                id="email"
                class="input-field w-full px-4 py-3 rounded-xl focus:outline-none"
                placeholder="Enter your email"
                required
              />
            </div>

            <div>
              <label
                class="block text-gray-600 text-sm font-medium mb-2"
                for="subject"
              >
                Subject
              </label>
              <select
                id="subject"
                class="input-field w-full px-4 py-3 rounded-xl focus:outline-none"
                required
              >
                <option value="">Select a subject</option>
                <option value="general">General Inquiry</option>
                <option value="support">Technical Support</option>
                <option value="partnership">Partnership</option>
                <option value="feedback">Feedback</option>
              </select>
            </div>

            <div>
              <label
                class="block text-gray-600 text-sm font-medium mb-2"
                for="message"
              >
                Message
              </label>
              <textarea
                id="message"
                rows="5"
                class="input-field w-full px-4 py-3 rounded-xl focus:outline-none resize-none"
                placeholder="Type your message here..."
                required
              ></textarea>
            </div>

            <button
              type="submit"
              class="w-full bg-[#94c4c4] hover:bg-[#648383] text-white font-medium py-3 px-6 rounded-xl transition-all duration-300 flex items-center justify-center gap-2"
            >
              <i class="fas fa-paper-plane"></i>
              Send Message
            </button>
          </form>

          <!-- Map -->
          <div class="mt-8">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59523.51898740667!2d73.47726399999999!3d21.876642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3960f9989c8f2a7d%3A0xfa598e0ba5d7765d!2sRajpipla%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1650998546548!5m2!1sen!2sin"
              class="w-full h-52 rounded-xl"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            >
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
