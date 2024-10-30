<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Kaylila Larasati_XIPPLG4</title>
</head>
<body class="font-sans bg-white text-gray-900">
  <nav class="max-w-7xl mx-auto p-5 flex justify-between items-center">
    <div class="text-lg font-bold text-yellow-600">
      <a href="#">Ruang Bumi</a>
    </div>
    <ul class="flex space-x-8 text-gray-700">
      <li><a href="#home" class="hover:text-yellow-600">HOME</a></li>
      <li><a href="#about" class="hover:text-yellow-600">ABOUT</a></li>
      <li><a href="#project" class="hover:text-yellow-600">PROJECT</a></li>
      <li><a href="#contact" class="hover:text-yellow-600">CONTACT</a></li>
    </ul>
    <div class="space-x-4">
      <button class="px-4 py-2 border border-gray-500 text-gray-500 rounded hover:bg-gray-100">Log In</button>
      <button class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Register Now</button>
    </div>
  </nav>

  <header class="bg-gray-100 py-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
      <div class="space-y-5">
        <h1 class="text-5xl font-bold text-gray-800">Turning Your Vision into Reality with Superior Construction Solutions</h1>
        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <div class="flex space-x-4">
          <button class="px-6 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Buy Now</button>
          <button class="px-6 py-2 border border-yellow-600 text-yellow-600 rounded hover:bg-yellow-100">Learn More</button>
        </div>
      </div>
      <div class="flex justify-center">
        <img src="ft.jpg" alt="header" class="object-cover h-80 w-full rounded-md" />
      </div>
    </div>
  </header>

  <section id="about" class="max-w-7xl mx-auto py-20 px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="flex justify-center">
      <img src="ft1.jpg" alt="about" class="object-cover h-80 w-full rounded-md" />
    </div>
    <div class="space-y-5">
      <h3 class="text-2xl font-semibold text-yellow-600">ABOUT US</h3>
      <h2 class="text-3xl font-bold text-gray-800">In our efforts to transform into a more modern company</h2>
      <p class="text-gray-600">Focusing on the business of office space leasing, building and asset management, construction services, provision of outsourcing services, and security services.</p>
      <div class="grid grid-cols-3 gap-4">
        <div class="text-center">
          <h4 class="text-yellow-600 font-semibold">PREVIOUS PROJECTS</h4>
          <p class="text-2xl font-bold text-gray-800">17+</p>
        </div>
        <div class="text-center">
          <h4 class="text-yellow-600 font-semibold">YEARS EXPERIENCE</h4>
          <p class="text-2xl font-bold text-gray-800">10+</p>
        </div>
        <div class="text-center">
          <h4 class="text-yellow-600 font-semibold">ONGOING PROJECTS</h4>
          <p class="text-2xl font-bold text-gray-800">12</p>
        </div>
      </div>
    </div>
  </section>

  <section id="project" class="max-w-7xl mx-auto py-20 px-4">
    <div class="flex justify-between items-center mb-10">
      <div>
        <h2 class="text-3xl font-bold text-gray-800">Ongoing Projects</h2>
        <p class="text-gray-600">We are dedicated to helping you find your dream property with ease and confidence.</p>
      </div>
      <div class="space-x-2">
        <span class="text-2xl cursor-pointer text-yellow-600"><i class="ri-arrow-left-line"></i></span>
        <span class="text-2xl cursor-pointer text-yellow-600"><i class="ri-arrow-right-line"></i></span>
      </div>
    </div>
    <div class="swiper">
      <!-- Add swiper slides here, same structure as given above -->
    </div>
  </section>

  <section id="contact" class="max-w-7xl mx-auto py-20 px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="flex justify-center">
      <img src="ft2.jpg" alt="contact" class="object-cover h-80 w-full rounded-md" />
    </div>
    <div>
      <h2 class="text-3xl font-bold text-gray-800">Contact Us</h2>
      <p class="text-gray-600 mb-6">Discover the difference, where expertise meets excellence in real estate. Let's embark on this exciting journey together.</p>
      <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="First Name" class="p-4 border rounded" />
          <input type="text" placeholder="Last Name" class="p-4 border rounded" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="Email Address" class="p-4 border rounded" />
          <input type="text" placeholder="Phone Number" class="p-4 border rounded" />
        </div>
        <textarea cols="30" rows="5" placeholder="Description" class="w-full p-4 border rounded"></textarea>
        <button class="px-6 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">SEND MESSAGE</button>
      </form>
    </div>
  </section>

  <footer class="bg-gray-100 py-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-4">
      <div>
        <h4 class="text-xl font-bold text-gray-800 mb-2">Ruang Bumi</h4>
        <p class="text-gray-600">Our team of seasoned professionals is committed to providing you with exceptional service...</p>
        <div class="flex space-x-4 mt-4 text-yellow-600">
          <a href="#"><i class="ri-facebook-circle-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
      </div>
      <!-- Add other footer columns as given above -->
    </div>
    <div class="text-center mt-8 text-gray-500">Copyright © 2023 Web Design Mastery. All rights reserved.</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="test.js"></script>
</body>
</html>
