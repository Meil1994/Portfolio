<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="shortcut icon" type="image/png" href="{{ asset('public/images/logo2.png') }}">
  <title>MCabaluna</title>
</head>
<body>
    <div class='bg-stone-50 dark:bg-gradient-to-b from-stone-800 dark:to-cyan-950 dark:text-white pt-10 sm:p-10 lg:p-20 lg:pb-5 lg:pt-10'>
        <div class='grid grid-cols-3 divide-x lg:grid-cols-2'>
            <div class='flex col-span-1 h-100 items-center border-none ml-5 sm4:ml-0'>
                <p class='position: sm4:fixed border-4 border-green-900 p-3 text-4xl rounded-lg font-semibold text-green-900 dark:border-green-500 dark:text-green-500'><a href='/'>M</a></p>
            </div>
        

            <ul class='border-none flex col-span-2 lg:col-span-1 lg:justify-evenly justify-end font-light dark:text-slate-300 h-100 items-center tracking-wide'>
                <li data-target="about" class='nav-link hidden lg:flex items-end hover:text-green-900 dark:hover:text-green-500 cursor-pointer'><span class='text-sm text-green-900 dark:text-green-400'>01.</span> About</li>
                <li data-target="experience" class='nav-link hidden lg:flex items-end hover:text-green-900 dark:hover:text-green-500 cursor-pointer'><span class='text-sm text-green-900 dark:text-green-400'>02.</span> Experience</li>
                <li data-target="projects" class='nav-link hidden lg:flex items-end hover:text-green-900 dark:hover:text-green-500 cursor-pointer'><span class='text-sm text-green-900 dark:text-green-400'>03.</span> Projects</li>
                <li data-target="contact" class='nav-link hidden lg:flex items-end hover:text-green-900 dark:hover:text-green-500 cursor-pointer'><span class='text-sm text-green-900 dark:text-green-400'>04.</span> Contact</li>
                <li class='hidden sm:flex mr-2'>
                    <button id="light-button"><x-zondicon-brightness-up class="w-3 mr-2"/></button>
                    <button id="dark-button" class="ml-2"><i class="fa-solid fa-moon"></i></button>

                    <a href='https://drive.google.com/file/d/1U6Bbwkg_YEnuYdd1ioOTdsqOSgyg922O/view?usp=sharing' target='blank' class='border dark:border-slate-300 border-black p-3 pt-2 pb-2 ml-3 rounded-md hover:text-green-900 dark:hover:text-green-500 hover:border-green-900 dark:hover:border-green-500'>Resume</a>
                </li>
                <li class="lg:hidden">
                    <button id="burger" class="navbar-burger text-black rounded-md mr-5 sm:mr-0  p-2 border dark:border-slate-300 dark:text-slate-300 border-black hover:text-green-900 dark:hover:text-green-500 hover:border-green-900 dark:hover:border-green-500">
                        <svg class="fill-current h-7 w-7" viewBox="0 0 20 20">
                          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                        </svg>
                    </button>
                    
                    <div id="menu" class="hidden -ml-28">
                        <div class="navbar-menu-content">
                            <div class="absolute mr-20 mt-4 w-40 rounded-md shadow-lg border border-slate-300 shadow-black dark:shadow-none bg-white ring-1 ring-black ring-opacity-5 dark:bg-slate-500 dark:text-white">
                                <div
                                    class="py-1 dark:slate-300"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="options-menu"
                                >
                                    <div class='px-4 py-2 sm:hidden flex'>
                                        <button id="light-button-2"><x-zondicon-brightness-up class="w-3 mr-2"/></button>
                                        <button id="dark-button-2" class="ml-2"><i class="fa-solid fa-moon"></i></button>
                                    </div>
                                    <div>
                                        <a href='https://drive.google.com/file/d/1U6Bbwkg_YEnuYdd1ioOTdsqOSgyg922O/view?usp=sharing' target='blank' class='pl-6 w-28 sm:hidden flex mt-2 border dark:border-slate-300 border-black p-3 pt-2 pb-2 ml-3 rounded-md hover:text-green-900 dark:hover:text-green-500 hover:border-green-900 dark:hover:border-green-500'>Resume</a>
                                    </div>
                                    <a
                                        data-target="about"
                                        class="nav-link cursor-pointer block dark:text-white px-4 py-2 text-sm text-gray-700 mt-5"
                                        >
                                        <span class='text-xs'>01.</span> About
                                    </a>
                                    <a
                                        data-target="experience"
                                        class="nav-link cursor-pointer block dark:text-white px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        >
                                        <span class='text-xs'>02.</span> Experience
                                    </a>
                                    <a
                                        data-target="projects"
                                        class="nav-link cursor-pointer block dark:text-white px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        >
                                        <span class='text-xs'>03.</span> Projects
                                    </a>
                                    <a
                                        data-target="contact"
                                        class="nav-link cursor-pointer block dark:text-white px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        >
                                        <span class='text-xs'>04.</span> Contact
                                    </a>
                                </div>
                            </div>
                        </div
                    </div>
                </li>

            </ul>
        </div> 

        <div class="grid grid-cols-10 divide-x">
            <div class="col-span-1 border-none">
                @include('components.Social') 
            </div>
            <div class="col-span-8 border-none">
                @include('components.Intro') 
                <button data-target="contact"  class="nav-link border mb-15 mt-5 border-green-800 p-10 pt-4 pb-4 text-green-800 hover:border-green-600 hover:text-green-600 dark:border-green-400 dark:text-green-400 dark:hover:border-green-200 dark:hover:text-green-200">Drop me a message! </button>
                

                  <div id="about" class="section"></div>
                  <section>
                    @include('components.About') 
                  </section>
                  
                  <div id="experience" class="section"></div>
                  <section>
                    @include('components.Experience') 
                  </section>
                  
                  <section id="projects" class="section">
                    @include('components.Projects') 
                  </section>
                  
                  <section id="contact" class="section">
                    @include('components.Contact') 
                  </section>
            </div>

            <div class="col-span-1 border-none">
                @include('components.Website') 
            </div>  
          </div>

    </div>

    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
    <script>
        function toggleMode(mode) {
          const body = document.querySelector('body');
          body.classList.remove('light', 'dark');
          body.classList.add(mode);
          
          if (body.classList.contains('light')) {
            document.documentElement.setAttribute('mode', 'light');
          } else {
            document.documentElement.removeAttribute('mode');
          }
        }
      
        const lightButton = document.querySelector('#light-button');
        const darkButton = document.querySelector('#dark-button');
        const lightButton2 = document.querySelector('#light-button-2');
        const darkButton2 = document.querySelector('#dark-button-2');
      
        lightButton.addEventListener('click', () => toggleMode('light'));
        darkButton.addEventListener('click', () => toggleMode('dark'));
        lightButton2.addEventListener('click', () => toggleMode('light'));
        darkButton2.addEventListener('click', () => toggleMode('dark'));
      </script>
    <script>
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickOnBurger = event.target.closest('#burger');

        if (!isClickInsideMenu && !isClickOnBurger) {
            menu.classList.add('hidden');
        }
        });
    </script>

    <script>
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
        link.addEventListener('click', () => {
            const target = link.getAttribute('data-target');
            const section = document.querySelector(`#${target}`);
            section.scrollIntoView({ behavior: 'smooth' });
        });
        });
    </script>
    
</body>
</html>   