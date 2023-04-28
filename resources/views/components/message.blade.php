@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class='w-50 shadow-2xl shadow-black fixed top-0 transform-translate-x-1/2 z-40 mt-10 rounded-lg dark:text-slate-700 p-10 bg-teal-500'>
        <p>{{session('message')}}</p>
    </div>
@endif

