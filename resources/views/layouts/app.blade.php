<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="author" content="">
    <meta name="description" content="">

    <title>Accueil</title>
  </head>
  <body class="font-poppins text-gray-600">
    <nav class="bg-white shadow-sm">
      <div class="container mx-auto px-4 py-3 flex items-center">
        <div class="w-40">
          <a href="index.html">
            <img src="images/logo.png" alt="logo" class="w-[40px]">
          </a>
        </div>

        <div class="ml-12 space-x-5 hidden lg:flex">
          <a href="index.html" class="flex items-center font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-home"></i>
            </span>
            Home
          </a>
          <a href="index.html" class="flex items-center font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-file-alt"></i>
            </span>
            About
          </a>
          <a href="index.html" class="flex items-center font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-phone"></i>
            </span>
            Contact
          </a>
        </div>

        <div class="relative ml-auto hidden lg:block">
          <span class="absolute left-3 top-2 text-sm text-gray-500">
            <i class="fas fa-search"></i>
          </span>
          <input type="text" placeholder="search..." class="block w-full border-none rounded-3xl pl-11 pr-2 py-2 focus:outline-none bg-gray-100 text-sm text-gray-700 shadow-sm">
        </div>

        <div class="lg:ml-5 ml-auto">
          <a href="#" class="flex items-center text-sm font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-user"></i>
            </span>
            Login/Register
          </a>
        </div>

        <div class="ml-4 block xl:hidden text-xl text-gray-700 cursor-pointer hover:text-blue-500 transition" id="open_sidebar">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>

    <main class="py-12 bg-gray-100 min-h-screen">
      <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
        <div class="w-3/12 hidden xl:block">
          <div class="bg-white shadow-sm rounded-sm p-4">
            <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Categories</h3>
            <div class="text-gray-700 space-y-2 font-semibold uppercase text-sm">
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>Beauti</span>
                <span class="font-normal ml-auto">(12)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>business</span>
                <span class="font-normal ml-auto">(12)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>fashion</span>
                <span class="font-normal ml-auto">(12)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>food</span>
                <span class="font-normal ml-auto">(7)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>learn</span>
                <span class="font-normal ml-auto">(4)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>music</span>
                <span class="font-normal ml-auto">(1)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>nature</span>
                <span class="font-normal ml-auto">(12)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>people</span>
                <span class="font-normal ml-auto">(14)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>sports</span>
                <span class="font-normal ml-auto">(9)</span>
              </a>
              <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
                <span class="mr-2">
                  <i class="far fa-folder-open"></i>
                </span>
                <span>technology</span>
                <span class="font-normal ml-auto">(15)</span>
              </a>
            </div>
          </div>

          <div class="bg-white shadow-sm rounded-sm p-4 mt-8">
            <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Random Posts</h3>
            <div class="md:space-y-2 sm:space-y-2 space-y-2">
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo.jpg" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo2.jfif" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo4.jpg" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        {{ $slot }}

        <div class="xl:w-3/12 lg:w-4/12 w-full mt-8 lg:mt-0">
          <div class="bg-white shadow-sm rounded-sm p-4">
            <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Social Plugin</h3>
            <div class="flex gap-3">
              <a href="#" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                <i class="fab fa-x-twitter"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                <i class="fab fa-pinterest-p"></i>
              </a>
              <a href="#" class="w-8 h-8 rounded-sm flex items-center justify-center border border-gray-400 text-base text-gray-800">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <div class="bg-white shadow-sm rounded-sm p-4 mt-8">
            <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Popular Posts</h3>
            <div class="md:space-y-2 sm:space-y-2 space-y-2">
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo.jpg" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo2.jfif" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
              <a href="#" class="flex group">
                <div class="flex-shrink-0">
                  <img src="images/seo4.jpg" alt="seo" class="w-20 h-14 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                  <h5 class="text-md leading-5 font-roboto font-semibold group-hover:text-blue-500 transition">
                    Team Bitbose geared up to attend Blockchain
                  </h5>
                  <div class="flex text-gray-400 text-sm items-center">
                    <span class="mr-1 text-xs">
                      <i class="far fa-clock"></i>
                    </span>
                    April 29, 2024
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="bg-white shadow-sm rounded-sm p-4 mt-8">
            <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Tags</h3>
            <div class="flex flex-wrap gap-2">
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Beauti</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Sports</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Business</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Politics</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Computer</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Coding</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Web Design</a>
              <a href="#" class="px-3 py-1 text-sm border border-gray-200 rounded-sm hover:bg-blue-500 hover:text-white transition">Web App</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="py-4 bg-white">
      <p class="text-sm text-center">
        Copyright &copy; 2024 <span class="font-semibold">Alex ESAKI</span>
        All Rights Reserved
      </p>
    </footer>

    <div class="fixed w-full h-full bg-black left-0 top-0 z-10 xl:hidden bg-opacity-25 opacity-0 invisible transition-all duration-500" id="sidebar_wrapper">
      <div class="fixed top-0 w-72 h-full bg-white shadow-md z-10 flex flex-col p-4">
        <div class="relative mb-3">
          <span class="absolute left-3 top-2 text-sm text-gray-500">
            <i class="fas fa-search"></i>
          </span>
          <input type="text" placeholder="search..." class="block w-full border-none rounded-3xl pl-11 pr-2 py-2 focus:outline-none bg-gray-100 text-sm text-gray-700 shadow-sm">
        </div>

        <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Menu</h3>
        <div class="flex flex-col space-y-3 mb-4">
          <a href="index.html" class="flex font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-home"></i>
            </span>
            Home
          </a>
          <a href="index.html" class="flex font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-file-alt"></i>
            </span>
            About
          </a>
          <a href="index.html" class="flex font-semibold hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="fas fa-phone"></i>
            </span>
            Contact
          </a>
        </div>

        <h3 class="text-xl font-semibold text-gray-700 font-roboto mb-3">Categories</h3>
        <div class="text-gray-700 space-y-2 font-semibold uppercase text-sm">
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>Beauti</span>
            <span class="font-normal ml-auto">(12)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>business</span>
            <span class="font-normal ml-auto">(12)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>fashion</span>
            <span class="font-normal ml-auto">(12)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>food</span>
            <span class="font-normal ml-auto">(7)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>learn</span>
            <span class="font-normal ml-auto">(4)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>music</span>
            <span class="font-normal ml-auto">(1)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>nature</span>
            <span class="font-normal ml-auto">(12)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>people</span>
            <span class="font-normal ml-auto">(14)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>sports</span>
            <span class="font-normal ml-auto">(9)</span>
          </a>
          <a href="#" class="flex items-center leading-4 hover:text-blue-500 transition">
            <span class="mr-2">
              <i class="far fa-folder-open"></i>
            </span>
            <span>technology</span>
            <span class="font-normal ml-auto">(15)</span>
          </a>
        </div>
      </div>
    </div>

    <script>
      document.querySelector("#open_sidebar").addEventListener('click', function () {
        document.querySelector("#sidebar_wrapper").classList.remove('opacity-0')
        document.querySelector('#sidebar_wrapper').classList.remove('invisible')
      })

      document.body.addEventListener('click', function (e) {
        if (e.target.id === "sidebar_wrapper") {
          document.querySelector('#sidebar_wrapper').classList.add('opacity-0')
          document.querySelector('#sidebar_wrapper').classList.add('invisible')
        }
      })
    </script>
  </body>
</html>
