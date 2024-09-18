<div x-data="{ darkMode: false }"
     x-init="darkMode = localStorage.getItem('dark-mode') === 'true'; if (darkMode) document.documentElement.classList.add('dark')"
     x-bind:class="{ 'dark': darkMode }"
     class="flex items-center transition-colors duration-300">

    <button @click="darkMode = !darkMode;
                    localStorage.setItem('dark-mode', darkMode);
                    document.documentElement.classList.toggle('dark', darkMode)"
            class="flex items-center p-2 rounded-md focus:outline-none">
        <span x-show="!darkMode" class="mr-2">🌞</span>
        <span x-show="darkMode" class="mr-2">🌜</span>
        <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
    </button>
</div>
