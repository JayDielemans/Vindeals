<div class="flex items-center gap-2 px-3 h-10 rounded-md border border-solid border-gray-300 cursor-pointer" onclick="changeLanguage()">
    <span id="flag" class="fi fi-nl"></span>
    <div id="language" class="text-sm">Nederlands</div>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-400">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />        
    </svg>
</div>

<script>
    function changeLanguage(){
        const flag = document.getElementById('flag');
        const language = document.getElementById('language');

        if(flag.classList.contains('fi-nl')){
            flag.classList.remove('fi-nl');
            flag.classList.add('fi-gb');
            language.innerHTML = 'English';
            
        } else {
            flag.classList.remove('fi-gb');
            flag.classList.add('fi-nl');
            language.innerHTML = 'Nederlands';
        }
    }
</script>
