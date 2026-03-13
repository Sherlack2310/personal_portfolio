@extends('layouts.app')

@section('content')


<style>
.bouncing-sticker {
    position: absolute;
    pointer-events: none;
    opacity: 0.85;
    transition: transform 0.1s linear;
}


.hero-image {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    opacity: 0;
    transition: opacity 2s ease-in-out;
}





.hero-image.active {
    opacity: 1;
}

.loading-dots::after{
content:"";
animation:dots 1.5s steps(4,end) infinite;
}

@keyframes dots{
0%{content:"";}
25%{content:".";}
50%{content:"..";}
75%{content:"...";}
}




/* Mobile: fit full image */
@media screen and (max-width: 768px) {
    .hero-image {
        object-fit: cover;       /* fit whole image inside screen */
        object-position: center;  /* 100px from left, 50px from top */  
        transform: scale(1.1); /* 120% size */
        object-position: -130px; /* shift image */

  
    }
}



</style>



<!-- PRELOADER -->
<div id="preloader" class="fixed inset-0 bg-black flex flex-col items-center justify-center z-[9999] transition-opacity duration-700">

    <!-- Logo -->
    <img id="loading-logo"
         src="images/stickers design/14.png"
         class="w-48 mb-6 transition-all duration-300">

    <!-- Loading text -->
    <p class="text-3xl text-purple-400 tracking-widest drop-shadow-[0_0_10px_rgba(168,85,247,0.9)]">
        Now Loading<span class="loading-dots"></span>
    </p>

</div>




<div id="fullpage">

<section class="section relative flex items-center justify-center overflow-hidden h-screen w-screen">

    <!-- Background Images -->
    <div id="hero-background" class="absolute inset-0 z-0 overflow-hidden w-full h-full"></div>

<div class="text-center relative z-10 px-4">
    <div class="inline-block bg-black/40 px-4 py-2 rounded-md">
        <h1 class="text-6xl font-bold mb-2">
            <span class="text-blue-400">Jonathan Mandawe
        </h1>
        <p class="text-gray-200 mb-2">Sherlack2310</p>
        <p class="text-gray-200">Scroll down to explore my work</p>
    </div>
</div>

</section>


<!-- About Me -->
<section class="section relative flex items-center justify-center bg-black text-white px-6 overflow-hidden">

    <!-- Particle Background -->
    <div id="bouncing-stickers" class="absolute inset-0 pointer-events-none overflow-hidden"></div>

    <div class="max-w-6xl grid md:grid-cols-2 gap-12 items-center relative z-10">

        <!-- Profile Image -->
        <div class="flex justify-center">
            <div class="relative">

                <!-- glow background -->
                <div class="absolute inset-0 bg-purple-500 blur-3xl opacity-20 rounded-full"></div>

                <img src="/images/about_me/profile1.jpg"
                     class="relative w-72 h-72 object-cover rounded-3xl shadow-2xl border border-white/10">
            </div>
        </div>

        <!-- About Text -->
        <div class="space-y-6">


  
    <h1 class="text-5xl font-bold leading-tight">
        Hi, I'm
        <span class="text-purple-400">Jonathan Mandawe</span>
    </h1>

    <p class="text-lg text-gray-300">
        Online, I go by <strong>Sherlack2310</strong>. I’m a 2D artist who specializes in cartoon-style character design, with a strong focus on anthropomorphic (furry) characters.
    </p>

    <p class="text-gray-400">
        My goal is to continuously improve my artistic skills and explore new creative challenges. I enjoy designing expressive, stylized characters and expanding my experience in character-focused artwork and visual storytelling.
    </p>
            <!-- Skills -->
            <div class="flex flex-wrap gap-3 pt-2">

                <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-sm">
                    Clip Studio Paint
                </span>

                <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-sm">
                    Canvas
                </span>

                <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-sm">
                    2D Artist
                </span>

                <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-sm">
                    Graphic Design
                </span>

            </div>

        </div>

    </div>

</section>



 <!-- CONTACT -->
<section class="section flex items-center justify-center bg-neutral-900 text-white px-6">

    <div id="particles-contact" class="absolute inset-0 pointer-events-none z-0"></div>

    <div class="max-w-4xl w-full text-center space-y-10">

        <!-- Title -->
        <div>
            <h2 class="text-5xl font-bold mb-4">Contact Information</h2>
            <p class="text-gray-400">
                Feel free to reach out or follow my work through my social platforms.
            </p>
        </div>

        <!-- Contact Info -->
        <div class="flex flex-col gap-4 text-lg text-gray-300">

            <div class="flex justify-center gap-3">
                <span class="text-purple-400">📧</span>
                <span>your@email.com</span>
            </div>

            <div class="flex justify-center gap-3">
                <span class="text-purple-400">📱</span>
                <span>+63 XXX XXX XXXX</span>
            </div>

        </div>

        <!-- Social Links -->
<!-- Social Links -->
<div class="grid md:grid-cols-3 gap-6 pt-6">

    <!-- Twitter -->
    <a href="https://x.com/SherlackW" class="group bg-black border border-white/10 rounded-xl p-6 hover:border-blue-400 transition text-center">

        <i class="fa-brands fa-twitter text-3xl mb-3 text-blue-400"></i>

        <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-400">
            Twitter / X
        </h3>

        <p class="text-gray-400 text-sm">
            Follow updates and thoughts
        </p>

    </a>


    <!-- Bluesky -->
    <a href="https://bsky.app/profile/sherlackw.bsky.social" class="group bg-black border border-white/10 rounded-xl p-6 hover:border-sky-400 transition text-center">

        <i class="fa-brands fa-bluesky text-3xl mb-3 text-sky-400"></i>

        <h3 class="text-xl font-semibold mb-2 group-hover:text-sky-400">
            Bluesky
        </h3>

        <p class="text-gray-400 text-sm">
            Connect and see my latest posts
        </p>

    </a>


    <!-- Linktree -->
    <a href="https://trello.com/b/VHKzmLul/sherlacks-commission-board-and-artwork" class="group bg-black border border-white/10 rounded-xl p-6 hover:border-green-400 transition text-center">

        <i class="fa-solid fa-link text-3xl mb-3 text-green-400"></i>

        <h3 class="text-xl font-semibold mb-2 group-hover:text-green-400">
            Trello
        </h3>

        <p class="text-gray-400 text-sm">
            All my links and projects
        </p>

        </a>

</div>
    </div>

</section>












    
<section x-data="{ section: 'menu' }" class="section flex items-center justify-center bg-black text-white px-6">

<div class="max-w-6xl w-full text-center">

  <!-- CATEGORY MENU -->
  <div x-show="section === 'menu'" class="space-y-10">
      <h2 class="text-5xl font-bold">Gallery</h2>
      <p class="text-gray-400">Choose The Categories to Explore</p>

      <div class="grid md:grid-cols-3 gap-6 pt-6">

          <button @click="section = 'portrait'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-purple-400 transition">
              <h3 class="text-xl font-semibold mb-2">Portrait Artwork</h3>
              <p class="text-gray-400 text-sm">Portrait Artwork</p>
          </button>

          <button @click="section = 'landscape'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-purple-400 transition">
              <h3 class="text-xl font-semibold mb-2">Landscape Artwork</h3>
              <p class="text-gray-400 text-sm">Landscape Artwork</p>
          </button>

          <button @click="section = 'comics'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-blue-400 transition">
              <h3 class="text-xl font-semibold mb-2">Comics</h3>
              <p class="text-gray-400 text-sm">My Original Comics</p>
          </button>


            <button @click="section = 'fanart'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-blue-400 transition">
              <h3 class="text-xl font-semibold mb-2">Fanart</h3>
              <p class="text-gray-400 text-sm">Art Created from different shows to video games</p>
          </button>


          
            <button @click="section = 'stickers'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-blue-400 transition">
              <h3 class="text-xl font-semibold mb-2">Sticker</h3>
              <p class="text-gray-400 text-sm">Sticker Design from events to social media stickers</p>
          </button>


            <button @click="section = 'concept'" class="bg-neutral-900 border border-white/10 p-8 rounded-xl hover:border-blue-400 transition">
              <h3 class="text-xl font-semibold mb-2">Character Concept</h3>
              <p class="text-gray-400 text-sm">Character Design Concept And Introduction</p>
          </button>

      </div>
  </div>





  <!-- POTRAIT GALLERY -->
<div x-show="section === 'portrait'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Portrait Artwork</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 17; $i++)
            <a href="{{ asset("images/portrait/$i.png") }}" class="glightbox" data-gallery="portrait">
                <img src="{{ asset("images/portrait/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>







  <!-- LANDSCAPE GALLERY -->
<div x-show="section === 'landscape'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Landscape Artwork</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 3; $i++)
            <a href="{{ asset("images/landscape/$i.png") }}" class="glightbox" data-gallery="landscape">
                <img src="{{ asset("images/landscape/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>











  <!-- COMICS GALLERY -->
<div x-show="section === 'comics'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Comics</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 8; $i++)
            <a href="{{ asset("images/comics/$i.png") }}" class="glightbox" data-gallery="comics">
                <img src="{{ asset("images/comics/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>



  <!-- FANART GALLERY -->
<div x-show="section === 'fanart'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Fanart</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 24; $i++)
            <a href="{{ asset("images/fanart/$i.png") }}" class="glightbox" data-gallery="fanart">
                <img src="{{ asset("images/fanart/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>





  <!--STICKERS GALLERY -->
<div x-show="section === 'stickers'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Stickers Design</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 23; $i++)
            <a href="{{ asset("images/stickers design/$i.png") }}" class="glightbox" data-gallery="stickers">
                <img src="{{ asset("images/stickers design/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>





  <!--STICKERS GALLERY -->
<div x-show="section === 'concept'" x-transition x-cloak>
    <h2 class="text-4xl font-bold mb-8 text-center">Concept Design</h2>

    <div class="grid md:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 18; $i++)
            <a href="{{ asset("images/concept/$i.png") }}" class="glightbox" data-gallery="concept">
                <img src="{{ asset("images/concept/$i.png") }}" 
                     class="rounded-xl hover:scale-105 hover:shadow-2xl transition duration-500 cursor-pointer">
            </a>
        @endfor
    </div>

    <button @click="section = 'menu'" class="mt-10 bg-white text-black px-6 py-3 rounded-lg hover:bg-gray-200 transition">
        ← Back
    </button>
</div>






</div>




</section>




<script>



const logos = [
"images/stickers design/1.png",
"images/stickers design/2.png",
"images/stickers design/3.png",
"images/stickers design/4.png",
"images/stickers design/5.png",
"images/stickers design/6.png",
"images/stickers design/7.png",
"images/stickers design/8.png",
"images/stickers design/9.png",
"images/stickers design/10.png",
"images/stickers design/11.png",
"images/stickers design/12.png",
"images/stickers design/13.png",
"images/stickers design/14.png",
"images/stickers design/15.png",
"images/stickers design/16.png",
"images/stickers design/17.png",
"images/stickers design/18.png",
"images/stickers design/19.png",
"images/stickers design/20.png",
"images/stickers design/21.png",
"images/stickers design/22.png"
];

let index = 0;
const logoElement = document.getElementById("loading-logo");

// Change logo every 1 second
const logoInterval = setInterval(() => {

    index++;

    if(index >= logos.length){
        index = 0;
    }

    logoElement.src = logos[index];

},300);


// Hide loader when page loads
window.addEventListener("load", function(){

    setTimeout(()=>{

        clearInterval(logoInterval);

        const loader = document.getElementById("preloader");

        loader.style.opacity = "0";

        setTimeout(()=>{
            loader.style.display = "none";
        },700);

    },7000);

});






new fullpage('#fullpage', {

    autoScrolling: true,
    navigation: true,
    scrollingSpeed: 900,

    keyboardScrolling: true,
    animateAnchor: true,

    controlArrows: true,
    loopBottom: false,

});

</script>







<script>
const lightbox = GLightbox({
    selector: '.glightbox',
    loop: true,
    touchNavigation: true
});
</script>



<script>
particlesJS("particles-contact", {
    "particles": {
        "number": {
            "value": 30,
            "density": { "enable": true, "value_area": 800 }
        },
        "shape": {
            "type": "image",
            "image": {
                "src": "/images/particles/sakura.png", // replace with your sakura PNG
                "width": 32,
                "height": 32
            }
        },
        "opacity": {
            "value": 0.8,
            "random": true,
            "anim": { "enable": true, "speed": 1, "opacity_min": 0.3, "sync": false }
        },
        "size": {
            "value": 20,
            "random": true,
            "anim": { "enable": true, "speed": 2, "size_min": 10, "sync": false }
        },
        "rotate": {
            "value": 0,
            "random": true,
            "direction": "clockwise",
            "animation": {
                "enable": true,
                "speed": 5, // adjust rotation speed
                "sync": false
            }
        },
        "move": {
            "enable": true,
            "speed": 1,
            "direction": "bottom",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "bounce": false
        },
        "line_linked": { "enable": false }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": { "onhover": { "enable": false }, "onclick": { "enable": false }, "resize": true }
    },
    "retina_detect": true
});
</script>




<script>
particlesJS("particles-js", {
  particles: {
    number: {
      value: 80,
      density: { enable: true, value_area: 800 }
    },
    color: {
      value: "#ffffff"
    },
    shape: {
      type: "circle"
    },
    opacity: {
      value: 0.5,
      random: true
    },
    size: {
      value: 3,
      random: true
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
      opacity: 0.3,
      width: 1
    },
    move: {
      enable: true,
      speed: 2
    }
  },

  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: true,
        mode: "repulse"
      }
    },
    modes: {
      repulse: {
        distance: 100
      }
    }
  },

  retina_detect: true
});
</script>





<script>
// Sticker images
const stickers = [
"images/stickers design/1.png",
"images/stickers design/2.png",
"images/stickers design/3.png",
"images/stickers design/4.png",
"images/stickers design/5.png",
"images/stickers design/6.png",
"images/stickers design/7.png",
"images/stickers design/8.png",
"images/stickers design/9.png",
"images/stickers design/10.png",
"images/stickers design/11.png",
"images/stickers design/12.png",
"images/stickers design/13.png",
"images/stickers design/14.png",
"images/stickers design/15.png",
"images/stickers design/16.png",
"images/stickers design/17.png",
"images/stickers design/18.png",
"images/stickers design/19.png",
"images/stickers design/20.png",
"images/stickers design/21.png",
"images/stickers design/22.png"
];

const container = document.getElementById("bouncing-stickers");
const stickerObjects = [];
const mouse = { x: 0, y: 0 };

// Track mouse for repulsion
document.addEventListener("mousemove", e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
});

// Settings
const stickerCount = 50;

// Spawn stickers
for (let i = 0; i < stickerCount; i++) {
    const img = document.createElement("img");
    img.src = stickers[Math.floor(Math.random() * stickers.length)];
    img.className = "bouncing-sticker";

    // Random size for depth effect
    const size = 30 + Math.random() * 50;
    img.style.width = size + "px";

    const obj = {
        el: img,
        x: Math.random() * window.innerWidth,
        y: Math.random() * window.innerHeight,
        vx: (Math.random() - 0.5) * 4, // higher speed for bouncy effect
        vy: (Math.random() - 0.5) * 4,
        rotation: Math.random() * 360,
        size: size
    };

    img.style.left = obj.x + "px";
    img.style.top = obj.y + "px";

    container.appendChild(img);
    stickerObjects.push(obj);
}

// Animate stickers
function animate() {
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;

    stickerObjects.forEach(obj => {

        // Mouse repulsion
        const dx = obj.x - mouse.x;
        const dy = obj.y - mouse.y;
        const dist = Math.sqrt(dx*dx + dy*dy);

        if(dist < 150){
            obj.vx += dx * 0.001;
            obj.vy += dy * 0.001;
        }

        // Update position
        obj.x += obj.vx;
        obj.y += obj.vy;

        // Bounce off edges
        if(obj.x < 0){
            obj.x = 0;
            obj.vx *= -1;
        }
        if(obj.x > screenWidth - obj.size){
            obj.x = screenWidth - obj.size;
            obj.vx *= -1;
        }
        if(obj.y < 0){
            obj.y = 0;
            obj.vy *= -1;
        }
        if(obj.y > screenHeight - obj.size){
            obj.y = screenHeight - obj.size;
            obj.vy *= -1;
        }

        // Rotate only
        obj.rotation += 0.1;

        // Apply position and rotation
        obj.el.style.left = obj.x + "px";
        obj.el.style.top = obj.y + "px";
        obj.el.style.transform = `rotate(${obj.rotation}deg)`;
    });

    requestAnimationFrame(animate);

}

animate();

// Keep stickers inside screen on resize
window.addEventListener("resize", () => {
    stickerObjects.forEach(obj => {
        obj.x = Math.min(obj.x, window.innerWidth - obj.size);
        obj.y = Math.min(obj.y, window.innerHeight - obj.size);
    });
});
</script>












<script>
// Detect device
const isMobile = window.innerWidth <= 768;
const folder = isMobile ? "/images/showcase-portrait/" : "/images/showcase/";

// Dynamically build image array
const totalImages = 4; // change to match number of images
const images = [];

for (let i = 1; i <= totalImages; i++) {
    images.push(`${folder}${i}.png`);
}

// Insert images into DOM
const heroBackground = document.getElementById("hero-background");

images.forEach((src, index) => {
    const img = document.createElement("img");
    img.src = src;
    img.className = "hero-image";

    if (index === 0) img.classList.add("active"); 
    heroBackground.appendChild(img);
});

// Cycle images
let current = 0;
const imageElements = document.querySelectorAll(".hero-image");

setInterval(() => {
    imageElements[current].classList.remove("active");
    current = (current + 1) % imageElements.length;
    imageElements[current].classList.add("active");
}, 5000);

// Optional: reload on device change (mobile/desktop)
window.addEventListener("resize", () => {
    const isMobileNow = window.innerWidth <= 768;
    if (isMobileNow !== isMobile) {
        location.reload();
    }
});
</script>





@endsection